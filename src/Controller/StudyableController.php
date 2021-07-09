<?php
namespace App\Controller;

use App\Entity\Studyable;
use App\Form\Type\StudyableFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudyableController extends AbstractController
{
    /**
     * @Route("/step/one", name="step_one")
     */
    public function new(): Response
    {
        $studyable = new Studyable();
        $studyable->setTitle('yooooo');
        $studyable->setBody('');

        $form = $this->createForm(StudyableFormType::class, $studyable);

        return $this->render('studyable/_step1.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
