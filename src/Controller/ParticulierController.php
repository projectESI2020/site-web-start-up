<?php
 
 namespace App\Controller;

 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;
 
 class ParticulierController extends AbstractController
 {
     /**
      * @Route("/particulier", name="particulier")
      */
     public function particulierAction()
     {

         return $this->render('home/particulier.html.twig');
     }
 }