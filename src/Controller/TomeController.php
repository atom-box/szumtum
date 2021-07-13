<?php
namespace App\Controller;

use App\Entity\Tome;
use App\Form\Type\TomeFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TomeController extends AbstractController
{
    /**
     * @Route("/set-text", name="settext")
     */
    public function setText(EntityManagerInterface $em, Request $req): Response
    {
        $tome = new Tome();
        $tome->setTitle('My Title');
        $tome->setBody('');

        $form = $this->createForm(TomeFormType::class, $tome);

        $form->handleRequest($req);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Tome $tome */
            $tome = $form->getData();
        $em->persist($tome);
        $em->flush();
        $this->addFlash('alert', "Things happened, probably good.");
        return $this->redirectToRoute('writequestions');
    }


        return $this->render('tome/bin/_step1.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
