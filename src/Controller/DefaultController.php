<?php

namespace App\Controller;

use App\Form\HelloType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        $form = $this->createForm(HelloType::class);

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}