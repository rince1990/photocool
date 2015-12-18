<?php

namespace multimediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use multimediaBundle\Entity\Gallery;
use multimediaBundle\Entity\Tag;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Finder\Iterator\RecursiveDirectoryIterator;

class DefaultController extends Controller
{
  public function haveAccess($owner){
    $user = $this->getUser();
    if (($user != $owner) && ($user->getroles()[0] != 'ROLE_ADMIN')){
      return false;
    }else{
      return true;

    }
  }

  public function canView($owner,$gallery){

    $user = $this->getUser();
    if ($gallery->getVisibility() == 'Private') {//only access  owner && admin
      if (($user != $owner) && ($user->getroles()[0] != 'ROLE_ADMIN')) {
        return false;
      }else {
        return true;
      }
    }else if ($gallery->getVisibility() == 'Specific') { //only access owner & admin & allowed users
      if(($user != $owner) && ($user->getroles()[0] != 'ROLE_ADMIN') && !($gallery->getUsersAccess()->contains($user))){ //if can view
        return false;
      }else{
        return true;
      }
    }else if ($gallery->getVisibility() == 'Limited') {
      $securityContext = $this->container->get('security.authorization_checker');
      if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
        // authenticated REMEMBERED, FULLY will imply REMEMBERED (NON anonymous)
        return true;
      }else{
        return false;
      }
    }else{//is public
      return true;
    }
  }


  public function indexAction()
  {
    return $this->render('multimediaBundle:Default:index.html.twig');
  }

  public function AJAXSearchAction()
  {
    return $this->render('multimediaBundle:Default:AJAXSearch.html.twig');
  }

  public function createGalleryAction()
  {
    return $this->render('multimediaBundle:Default:createGallery.html.twig');
  }

  public function accesibleGalleryAction()
  {
    $galleries = $this->getDoctrine()
    ->getRepository('multimediaBundle:Gallery')
    ->findAll();

    return $this->render('multimediaBundle:Default:accesibleGallery.html.twig', array('galleries' => $galleries));
  }

  public function viewGalleryAction($galleryID)
  {

    // make a database call or other logic
    $gallery = $this->getDoctrine()
    ->getRepository('multimediaBundle:Gallery')
    ->findOneById($galleryID);
    //$images = $gallery->getImages();

    $images = $gallery->getImages();
    $owner = $gallery->getOwner();

    if(!DefaultController::canView($owner,$gallery)){
      $message = 'You dont have permission to access here';
      return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
    }else{
      return $this->render('multimediaBundle:Default:viewGallery.html.twig',  array('gallery' => $gallery , 'images' => $images));
    }

  }

  public function viewImageAction($imageID)
  {

    // make a database call or other logic
    $image = $this->getDoctrine()
    ->getRepository('multimediaBundle:Image')
    ->findOneById($imageID);

    $gallery = $image->getGallery();
    $owner = $gallery->getOwner();

    if(!DefaultController::canView($owner,$gallery)){
      $message = 'You dont have permission to access here';
      return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
    }else{
      return $this->render('multimediaBundle:Default:viewImage.html.twig',  array('image' => $image, 'owner'=>$owner));
    }
  }



  public function modifyImageAction($imageID)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();

    // make a database call or other logic
    $image = $this->getDoctrine()
    ->getRepository('multimediaBundle:Image')
    ->findOneById($imageID);

    $gallery = $image->getGallery();
    $owner = $gallery->getOwner();


    if(!DefaultController::haveAccess($owner)){
      $message = 'You dont have permission to modify this Image';
      return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
    }else{
      return $this->render('multimediaBundle:Default:modifyImage.html.twig',  array('image' => $image, 'owner'=>$owner));
    }

  }

  public function modifyImageSQLAction($imageID)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();

    // make a database call or other logic
    $image = $this->getDoctrine()
    ->getRepository('multimediaBundle:Image')
    ->findOneById($imageID);

    $gallery = $image->getGallery();
    $owner = $gallery->getOwner();

    if(!DefaultController::haveAccess($owner)){
      $message = 'You dont have permission to modify this Image';
      return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
    }else{
      $newName = $_POST['imageName'];
      $newTags = $_POST['tags'];
      //separamos los tag  por comas y les quitamos los espacios en blanco inicial y finales
      //e introducimos nuevas entidades si el tag no existia anteriomente
      $arrayTags = explode(',', $newTags);
      foreach ($arrayTags as $tag){
        $tag = rtrim($tag);

        $existstag = $this->getDoctrine()
        ->getRepository('multimediaBundle:Tag')
        ->findOneBytag($tag);
        if($existstag == null){// si el tag no existe creamos uno nuevo y lo asignamos a la galeria
          $newTag = new Tag();
          $newTag->addTagsImage($image);
          $newTag->setTag ($tag);
          $em->persist($newTag);
          $em->flush();
        }else{//el tag existe, lo asignamos a la galeria
          $existstag->addTagsImage ($image);
          $em->persist($existstag);
          $em->flush();
        }
      }

      $image->setName($newName);
      $em->persist($image);
      $em->flush();

      $message = 'Image '.$image->getName().' modified succesfully';

      return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
    }
  }


  public function createGallerySQLAction()
  {
    $message = "An error ocurred, please try again";
    if (!empty($_FILES)) {
      //  get the User!
      $em = $this->getDoctrine()->getManager();
      $user = $this->getUser();
      $galleryName = $_POST['galleryName'];

      //if name already exist, send error
      $galleryExists = $this->getDoctrine()
      ->getRepository('multimediaBundle:Gallery')
      ->findOneBy(array('name' => $galleryName , 'owner' => $user->getId()));
      if ($galleryExists != null){
        $message = "You have already a gallery with that name, chose another one";

      }else{

        $ds = DIRECTORY_SEPARATOR;


        //create gallery directory for photos
        $newDirPath = 'uploads'. $ds .$user->getUserName(). $ds .$galleryName;
        if (!file_exists($newDirPath)) {
          mkdir($newDirPath, 0777, true);
        }

        $storeFolder = 'uploads'. $ds .$user->getUserName();   //2


        $tempFile = $_FILES['file']['tmp_name'];          //3
        $imageData = getimagesize($tempFile);
        $imageExtension = $extension = image_type_to_extension($imageData[2]);

        $targetFile =  $storeFolder.$ds.$galleryName.$imageExtension;  //5

        $gallery = new Gallery();
        $gallery->setName ($galleryName);
        $gallery->setPath ($targetFile);
        $gallery->setOwner ($user);
        $gallery->setCreationDate (new \DateTime("now"));
        $em->persist($gallery);
        $em->flush();


        move_uploaded_file($tempFile,$targetFile); //6

        $message = "Gallery sucesfully created";
      }
    }
    return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
  }


  public function deleteGallerySQLAction($galleryID)
  {

    // make a database call or other logic
    $gallery = $this->getDoctrine()
    ->getRepository('multimediaBundle:Gallery')
    ->findOneById($galleryID);

    $images = $gallery->getImages();

    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();
    $owner = $gallery->getOwner();

    if(!DefaultController::haveAccess($owner)){
      $message = 'You dont have permission to delete this gallery';
    }else{
      $em->remove($gallery);
      $em->flush();

      //Delete from file system
      $dir = 'uploads'.DIRECTORY_SEPARATOR.$owner->getUserName().DIRECTORY_SEPARATOR.$gallery->getName();
      array_map('unlink', glob("$dir/*.*"));
      rmdir($dir);


      //remove also gallery image
      $file= $gallery->getPath();
      unlink($file);

      $message = 'Gallery '.$gallery->getName().' deleted succesfully';
    }
    return $this->render('multimediaBundle:Default:messageNoBackLink.html.twig', array('message' => $message));

  }

  public function deleteImageSQLAction($imageID)
  {

    // make a database call or other logic
    $image = $this->getDoctrine()
    ->getRepository('multimediaBundle:Image')
    ->findOneById($imageID);

    $gallery = $image->getGallery();

    $em = $this->getDoctrine()->getManager();

    $user = $this->getUser();
    $owner = $gallery->getOwner();

    if(!DefaultController::haveAccess($owner)){
      $message = 'You dont have permission to delete this Image';

    }else{
      //delete from database
      $em->remove($image);
      $em->flush();

      //Delete from file system
      unlink($image->getPath());



      $message = 'Image '.$image->getName().' deleted succesfully';
    }
    return $this->render('multimediaBundle:Default:messageNoBackLink.html.twig', array('message' => $message));

  }

  public function modifyGalleryAction($galleryID)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();

    // make a database call or other logic
    $gallery = $this->getDoctrine()
    ->getRepository('multimediaBundle:Gallery')
    ->findOneById($galleryID);

    $owner = $gallery->getOwner();
    $user_acess_emails = '';
    foreach ($gallery->getUsersAccess() as $user_access){
      $user_acess_emails = $user_access->getEmail().', '.$user_acess_emails;
    }

    if(!DefaultController::haveAccess($owner)){
      $message = 'You dont have permission to modify this Gallery';
      return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
    }else{
      return $this->render('multimediaBundle:Default:modifyGallery.html.twig',  array('gallery' => $gallery, 'owner'=>$owner, 'user_acess_emails'=>$user_acess_emails));
    }
  }

  public function modifyGallerySQLAction($galleryID)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();

    // make a database call or other logic
    $gallery = $this->getDoctrine()
    ->getRepository('multimediaBundle:Gallery')
    ->findOneById($galleryID);

    $owner = $gallery->getOwner();

    if(!DefaultController::haveAccess($owner)){
      $message = 'You dont have permission to modify this Image';
    }else{
      //  $newName = $_POST['galleryName'];
      $newVisibility = $_POST['visibility'];
      //separamos los tag  por comas y les quitamos los espacios en blanco inicial y finales

      //cambiamos BBDD
      //  $gallery->setName($newName);
      $gallery->setVisibility($newVisibility);
      //añadimos las personas que tiene privilegios en caso de escoger la option Specific users
      $usersAccess = $_POST['addUser'];
      $arrayusers = explode(',', $usersAccess);

      //delete previous emails
      foreach ($gallery->getUsersAccess() as $userdelete) {
        $gallery->removeUsersAccess($userdelete);
      }
      //get users by email
      foreach ($arrayusers as $useremail){
        $useremail = trim($useremail);
        $repository = $this->getDoctrine()
        ->getRepository('AdrianGRegisterBundle:User');
        $addUser = $repository->findOneByemail($useremail);
        if($addUser != null)
        $gallery->addUsersAccess($addUser);
      }

      $em->persist($gallery);
      $em->flush();

      //cambiamos imagen
      if ($_FILES['file']['tmp_name'] != '') {
        $ds = DIRECTORY_SEPARATOR;
        $storeFolder = 'uploads'. $ds .$user->getUserName();   //2
        $tempFile = $_FILES['file']['tmp_name'];          //3
        $imageData = getimagesize($tempFile);
        $imageExtension = $extension = image_type_to_extension($imageData[2]);
        $targetFile =  $storeFolder.$ds.$gallery->getName().$imageExtension;  //5
        move_uploaded_file($tempFile,$targetFile);
      }

      $message = 'Gallery '.$gallery->getName().' modified succesfully';
    }

    return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
  }

  public function AJAXDataGalleryAction(){
    $request = $this->get('request');
    $data = $request->get('data');
    $data = "%".$data."%";

    $repository = $this->getDoctrine()->getRepository('multimediaBundle:Gallery');

    $query = $repository->createQueryBuilder('p')
    ->where('p.visibility = :visibility AND p.name LIKE :name')
    ->setParameter('visibility', 'Public')
    ->setParameter('name',$data)
    ->getQuery();

    $galleries = $query->getResult();


    //prepare the response, e.g.
    $response = $this->container->get('serializer')->serialize($galleries, 'json');

    //you can return result as JSON
    return new JsonResponse($response);
  }

  public function AJAXDataPhotoAction(){
    $request = $this->get('request');
    $data = $request->get('data');


    $repository = $this->getDoctrine()
    ->getRepository('multimediaBundle:Tag');
    $tag = $repository->findOneBytag($data);

    $repository = $this->getDoctrine()
    ->getRepository('multimediaBundle:Image');
    $images = $repository->findAll();
    $filteredImages = new \Doctrine\Common\Collections\ArrayCollection();
    foreach ($images as $image){

      if($image->hasTag($tag))
      //if($image->getGallery()->getVisibility() == 'Public')
      $filteredImages[] = $image;
    }

    //prepare the response, e.g.
    $response = $this->container->get('serializer')->serialize($filteredImages, 'json');

    //you can return result as JSON
    return new JsonResponse($response);
  }

}
