<?php
 
 namespace App\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;
 
 class AproposController extends AbstractController
 {
     /**
      * @Route("/apropos", name="apropos")
      */
     public function aproposAction()
     {

         return $this->render('home/apropos.html.twig');
     }
 }