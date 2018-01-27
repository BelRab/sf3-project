<?php

namespace CatalogueBundle\Controller;

use CatalogueBundle\Entity\TableBlog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ListeBlogController extends Controller
{
    /**
     * @Route("/listeblog")
     */
    public function listeblogAction()
    {
        // $s=$x+$y;
        $blog = $this->getDoctrine()->getRepository("CatalogueBundle:TableBlog")->findAll();//select * from Produit
        return $this->render('@Catalogue/Default/listeBlog.html.twig',array('bl'=>$blog));
        // return $this->render('@Catalogue/Default/listeProduit.html.twig',array('x'=>$x,'y'=>$y,'s'=>$s));
    }
}
