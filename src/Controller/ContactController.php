<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $contactFormData = $form->getData();

            dump($contactFormData);

            $message = (new \Swift_Message('Email reçu de Ânes-OK'))
                ->setFrom($contactFormData['email'])
                ->setTo('tdelsupexhe@hotmail.com')
                ->setBody(
                    $contactFormData['message'],
                    'text/plain'
                    )
            ;

            $mailer->send($message);




        }

        return $this->render('contact/index.html.twig',
            ['form' => $form->createView()]
    );
    }
}
