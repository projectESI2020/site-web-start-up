<?php
 
 namespace App\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;
 
 class ProfessionnelController extends AbstractController
 {
     /**
      * @Route("/professionnel", name="professionnel")
      */
     public function professionnelAction()
     {

         return $this->render('home/professionnel.html.twig');
     }
 }