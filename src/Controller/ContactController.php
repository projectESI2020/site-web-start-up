<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/home", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $message = (new \Swift_Message('Nouveau mail client'))
                ->setFrom($contactFormData['email'])
                ->setSubject($contactFormData['object'])
                ->setTo('bd.concept.metz@gmail.com')
                ->setBody(
                    $contactFormData['message'],
                    'text/plain'
                )
            ;

            $mailer->send($message);

            $this->addFlash('success', 'Le message a bien été envoyé !');

            return $this->redirectToRoute('contact');
        }

        return $this->render('home/contact.html.twig', [
            'email_form' => $form->createView(),
        ]);
    }

        /**
         * @Route("/home", name="db")
         */
        public function createProduct(): Response
        {
            $form = $this->createForm(ContactType::class);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {

                $contactFormData = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();

                $contact = (new Contact())
                    ->setFirstname($contactFormData['firstname'])
                    ->setLastname($contactFormData['lastname'])
                    ->setObject($contactFormData['object'])
                    ->setEmail($contactFormData['email'])
                    ->setPhone($contactFormData['phone'])
                    ->setMessage($contactFormData['message']);

                $entityManager->persist($contact);

                $entityManager->flush();

            return new Response('Saved new product with id '.$contact->getId());
        }
    }
}