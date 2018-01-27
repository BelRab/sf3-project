<?php

namespace CatalogueBundle\Controller;

use CatalogueBundle\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProduitController extends Controller
{
    /**
    ** @Route("/addProduit/{nom}/{prix}")
    */
    // c'est la route a partir de racine
public function addProduitAction($nom,$prix) {
    // la fonction va prendre en parametre deux variables pour les  ajouter
    $p= new Produit(); // creer une instance de classe Produit
    $p->setNom($nom); // appeler la fonction setnom et prix
    $p->setPrix($prix);
    $em=$this->getDoctrine()->getManager();// c'est code c'est pour ajouter les deux parametres et les enregistrer dans la table
    $em->persist($p);
    $em->flush();
    return $this->render('@Catalogue/Default/addproduit.html.twig',array('produit'=>$p));
    }
}
