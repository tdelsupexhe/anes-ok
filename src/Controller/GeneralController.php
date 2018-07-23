<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {
        return $this->render('general/index.html.twig', [
        ]);
    }

    /**
     * @Route("/tarifs", name="tarifs")
     */
    public function tarifs()
    {
        return $this->render('general/tarifs.html.twig', [
        ]);
    }
}
