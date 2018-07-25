<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\TranslatorInterface;

class GeneralController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function home(TranslatorInterface $translator)
    {
        $translated = $translator->trans('Symfony is great');
        return $this->render('general/index.html.twig', [
            'translated' => $translated
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
