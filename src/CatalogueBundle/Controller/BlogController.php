<?php

namespace CatalogueBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use CatalogueBundle\Entity\TableBlog;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormBuilderInterface;


class BlogController extends Controller
{
    /**
    ** @Route("/creerpost")
    */
    // c'est la route a partir de racine
public function creerpostAction(Request $request) {

    $tB=new TableBlog();
    //générer le formulaire
    $form=$this->createFormBuilder($tB)
      //  ->add('commevnt', TextareaType::class, array(
        //    'label' => 'input comment', 'attr' => array('style' => 'width: 200px')))
       // ->add('description', 'textarea', array('attr' => array('rows' => '10','cols' => '10')) )
        ->add('Author',TextType::class, array('label' => 'Author'),array('attr' => array('style' => 'width: 200px')))
        ->add('mail',EmailType::class, array('label' => 'E-mail'),array('attr' => array('style' =>'width: 200px')))
        ->add('titreMessage',TextType::class, array('label' => 'Title'),array('attr' => (array('style' => 'width: 200px'))))
        ->add('contenuMessage',TextareaType::class, array('label' => 'Content'),array('attr' => (array('style' => 'width: 200px'))))
        ->add('datePublication',DateType::class, array('label' => 'Published Date'),array('attr' => (array('style' => 'width: 200px'))))
        //->add('task', null, array('attr' => array('maxlength' => 4)))

        ->add('Ajouter',SubmitType::class, array('label' => 'Create a Post')  )
        ->getForm();
    $form->handleRequest($request);
        //tester si le formuaire est valide
    if($form->isValid()) {
        $em=$this->getDoctrine()->getManager();
        $em->persist($tB);
        $em->flush();
        //ici aprés l'insertion des données de la forme dans la base de données il va se redireger vers
        // la page Liste
    //aller à la vue liste des produits
     //return $this->redirect($this->generateUrl("http://localhost/sf33/web/app_dev.php/"));
        }
    return $this->render('@Catalogue/Default/formblog.html.twig',array('f' => $form->createView()));
}
}
