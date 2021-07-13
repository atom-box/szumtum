<?php
namespace App\Controller;

use App\Entity\Question;
use App\Form\Type\TomeFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    /**
     * @Route("/write-questions", name="writequestions")
     */
    public function writeQuestions(EntityManagerInterface $em, Request $req): Response
    {
        return $this->render('question/bin/_step2.html.twig');


    }


}
