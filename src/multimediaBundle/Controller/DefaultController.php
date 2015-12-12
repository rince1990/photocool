<?php

namespace multimediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('multimediaBundle:Default:index.html.twig');
    }
}
