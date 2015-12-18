<?php
namespace multimediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LatestGalleriesController extends Controller
{
  public function latestGalleriesAction()
  {
    // make a database call or other logic
    $em = $this->getDoctrine()->getManager();

    $query = $em->createQuery(
        'SELECT p
        FROM multimediaBundle:Gallery p
        WHERE p.visibility = :visibility
        ORDER BY p.creationDate'
    )->setParameter('visibility', 'Public');

    $galleries = $query->setMaxResults(4)->getResult();
    // to get just one result:
    // $product = $query->setMaxResults(1)->getOneOrNullResult();

    return $this->render('multimediaBundle:Default:latestgalleries.html.twig',  array('galleries' => $galleries));
  }
}
