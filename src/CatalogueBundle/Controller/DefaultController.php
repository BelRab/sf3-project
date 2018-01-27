<?php

namespace CatalogueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/{x}/{y}")
     */
    public function indexAction($x,$y)
    {
        $s=$x+$y;
        return $this->render('@Catalogue/Default/index.html.twig',array('x'=>$x,'y'=>$y,'s'=>$s));
    }
}
