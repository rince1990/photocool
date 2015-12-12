<?php

namespace AdrianG\RegisterBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;



class DefaultController extends Controller
{

  public function adminAction()
  {
    return $this->render('AdrianGRegisterBundle:Default:admin.html.twig');
  }
  public function messageAction($message)
  {
    return $this->render('AdrianGRegisterBundle:Default:message.html.twig', array('message' => $message));
  }


  public function indexAction()
  {
    return $this->render('AdrianGRegisterBundle:Default:index.html.twig');
  }


}
