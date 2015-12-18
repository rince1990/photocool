<?php
namespace multimediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MyGalleriesController extends Controller
{
    public function myGalleriesAction()
    {
        // make a database call or other logic
        $galleries = $this->getUser()->getGalleries();

         return $this->render('multimediaBundle:Default:mygalleries.html.twig',  array('galleries' => $galleries));
    }
}
