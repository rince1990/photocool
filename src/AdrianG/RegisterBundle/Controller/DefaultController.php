<?php

namespace AdrianG\RegisterBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends Controller
{

  public function adminAction()
  {

    $users = $this->getDoctrine()
    ->getRepository('AdrianGRegisterBundle:User')
    ->findby(array('roles' => 'ROLE_USER' ));

    return $this->render('AdrianGRegisterBundle:Default:admin.html.twig', array('users' => $users));
  }
  public function messageAction($message)
  {
    return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
  }


  public function indexAction()
  {
    return $this->render('AdrianGRegisterBundle:Default:index.html.twig');
  }

  public function allGalleryAction()
  {
    $user = $this->getUser();
    if ($user->getroles()[0] == 'ROLE_ADMIN') {
      $galleries = $this->getDoctrine()
      ->getRepository('multimediaBundle:Gallery')
      ->findAll();
      
      return $this->render('AdrianGRegisterBundle:Default:allGallery.html.twig', array('galleries'=> $galleries));
    }else {
      $message = 'You dont have permission to access here';
      return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
    }

  }


  public function statusAction($status)
  {
    $em = $this->getDoctrine()->getManager();
    $user = $this->getDoctrine()
    ->getRepository('AdrianGRegisterBundle:User')
    ->findOneById($_POST['userid']);


    if ($status == 'enable'){
      $user->setIsActive(true);
      $message= 'User '.$user->getEmail().' succesfully enabled';
      $em->persist($user);
      $em->flush();
    }else if($status == 'disable'){
      $user->setIsActive(false);
      $message= 'User '.$user->getEmail().' succesfully disabled';
      $em->persist($user);
      $em->flush();
    }else{
      $message = 'Incorrect status';
    }

    $users = $this->getDoctrine()
    ->getRepository('AdrianGRegisterBundle:User')
    ->findby(array('roles' => 'ROLE_USER' ));

    return $this->render('AdrianGRegisterBundle:Default:admin.html.twig', array('message' => $message, 'users' => $users));
  }



}
