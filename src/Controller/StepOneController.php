<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StepOneController extends AbstractController
{
    public function index(): Response
    {
        return new Response('<h1>Yowza. Boy howdy.</h1>');
    }
}
