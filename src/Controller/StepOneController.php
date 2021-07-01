<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StepOneController extends AbstractController
{
    /**
     * @Route("/step/one", name="step_one")
     */
    public function index(): Response
    {
        return $this->render('step_one/index.html.twig', [
            'controller_name' => 'StepOneController',
        ]);
    }
}
