<?php

namespace multimediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use multimediaBundle\Entity\Image;

class UploadController extends Controller
{
  public function uploadAction(Request $request, $galleryID)
  {

    $form = $this->createFormBuilder()->getForm();

    $form->handleRequest($request);

    $em = $this->getDoctrine()->getManager();
    $user = $this->getUser();

    //Getting the gallery
    $repository = $this->getDoctrine()
    ->getRepository('multimediaBundle:Gallery');
    $gallery = $repository->findOneByid($galleryID);

    if ($form->isValid()) {

      $ds          = DIRECTORY_SEPARATOR;  //1
      $storeFolder = 'uploads'. $ds .$user->getUserName(). $ds .$gallery->getName()  ;   //2

      if (!empty($_FILES)) {
        $tempFile = $_FILES['file']['tmp_name'];          //3
        $imageData = getimagesize($tempFile);
        $imageExtension = $extension = image_type_to_extension($imageData[2]);

        //we get the last ID(for next image name)
        $last_entity = $em->createQueryBuilder()
        ->select('e')
        ->from('multimediaBundle:Image', 'e')
        ->orderBy('e.id', 'DESC')
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();

        $newImageName=strval($last_entity->getId()+1);
        $targetFile =  $storeFolder.$ds.$newImageName.$imageExtension;  //5

        $image = new Image();
        $image->setName ($last_entity->getId()+1);
        $image->setPath ($targetFile);
        $image->setGallery ($gallery);
        $em->persist($image);
        $em->flush();


        move_uploaded_file($tempFile,$targetFile); //6
      }
    }

    return $this->render('multimediaBundle:Default:upload.html.twig', array(
      'form' => $form->createView()
    ));

  }

}
