<?php

namespace App\Controller;

use App\Entity\Anes;
use App\Form\AnesType;
use App\Service\FileUploader;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AnesController extends AbstractController
{
    /**
     * @Route("/anes", name="anes")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(Anes::class);
        $anes = $repository->findAll();

        return $this->render('/anes/index.html.twig',
            [
                'anes' => $anes,
            ]);
    }

    /**
     * @Route("/anes/add", name="anes_add")
     */
    public function add_anes(Request $request, FileUploader $fileUploader)
    {
        $anes = new Anes();

        $form = $this->createForm(AnesType::class, $anes);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            //on récupère le fichier dans $file
            $file = $form->get('image001')->getData();
            //on l'upload dans le bon répertoire
            $fileName = $fileUploader->upload($file);
            //on le met dans la db
            $anes->setImage001($fileName);

            $em= $this->getDoctrine()->getManager();
            $em->persist($anes);
            $em->flush();

            return $this->redirectToRoute('anes');
        }

        return $this->render('/anes/add_anes.html.twig',
            [
                'form'=>$form->createView()
            ]);
    }

    /**
     * @Route("anes/edit/{id}", name="ane_edit", requirements={"id"="\d+"})
     */
    public function edit_ane(Request $request, Anes $aneOne)
    {
        $ane = new Anes();
        $ane = $aneOne;

        $form = $this->createForm(AnesType::class, $ane);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file = new File($this->getParameter('images_anes_directory').'/'.$ane->getImage001());
            var_dump($file);
            die();
            $ane->setImage001($file);

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('anes');
        }

        return $this->render('/anes/edit.html.twig',
            [
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/anes/{id}", name="ane_detail", requirements={"id"="\d+"})
     */
    public function aneDetail(Anes $ane){
        return $this->render('anes/detail.html.twig',[
            'ane' => $ane
        ]);
    }

    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }
}
