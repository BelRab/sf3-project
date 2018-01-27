<?php

namespace CatalogueBundle\Controller;

use CatalogueBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeProduitController extends Controller
{
    /**
         * @Route("/listeProduit")
     */
    public function listeProduitAction()
    {
       // $s=$x+$y;
        $produits = $this->getDoctrine()->getRepository("CatalogueBundle:Produit")->findAll();//select * from Produit
        return $this->render('@Catalogue/Default/listeProduit.html.twig',array('produits'=>$produits));
       // return $this->render('@Catalogue/Default/listeProduit.html.twig',array('x'=>$x,'y'=>$y,'s'=>$s));
    }
}
