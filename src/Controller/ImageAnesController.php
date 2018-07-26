<?php

namespace App\Controller;

use App\Entity\ImageAnes;
use App\Form\ImageAnesType;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ImageAnesController extends AbstractController
{
    /**
     * @Route("/anes/images", name="image_anes")
     */
    public function index()
    {
        return $this->render('image_anes/index.html.twig', [
            'controller_name' => 'ImageAnesController',
        ]);
    }

    /**
     * @Route("/anes/images/add", name="image_anes_add")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function add(Request $request, FileUploader $fileUploader)
    {
        $image = new ImageAnes();

        $form = $this->createForm(ImageAnesType::class, $image);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            //on récupère le fichier dans $file
            $file = $form->get('lien')->getData();
            //on l'upload dans le bon répertoire
            $fileName = $fileUploader->upload($file);
            //on le met dans la db
            $image->setLien($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($image);
            $em->flush();

            return $this->redirectToRoute('image_anes_add');
        }

        return $this->render('image_anes/add_images_anes.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
