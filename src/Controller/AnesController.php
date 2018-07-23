<?php

namespace App\Controller;

use App\Entity\Anes;
use App\Form\AnesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AnesController extends AbstractController
{
    /**
     * @Route("/anes", name="anes")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(AnesType::class);
        $anes = $repository->findAll();

        return $this->render('/anes/index.html.twig',
            [
                'anes' => $anes
            ]);
    }

    /**
     * @Route("/anes/add", name="anes_add")
     */
    public function add_anes(Request $request)
    {
        $anes = new Anes();

        $form = $this->createForm(AnesType::class, $anes);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
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
}
