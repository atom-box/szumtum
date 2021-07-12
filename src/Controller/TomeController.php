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
        $tome->setTitle('yooooo');
        $tome->setBody('');
        $em->persist($tome);
        // SET ALL FOUR
        $em->flush();

        $form = $this->createForm(TomeFormType::class, $tome);

        return $this->render('tome/_step1.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
