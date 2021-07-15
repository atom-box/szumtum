<?php
namespace App\Controller;

use App\Entity\Question;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class QuestionController extends AbstractController
{
    public $chunks = [];

    /**
     * @Route("/write-questions", name="writequestions")
     */
    public function writeQuestions(EntityManagerInterface $em, Request $req, TomeController $tc): Response
    {
        // dd($req);
        // CHUNKIFY
        // SEND THAT TO THE DB
        // USE THE LOCAL CHUNKS

        // $chunks = $this->getDoctrine()
        //     ->getRepository(Question::class)
        //     ->getChunk();

        // if (!$chunks) {
        //     throw $this->createNotFoundException(
        //         'No product found for id '.$id
        //     );
        // }
        $chunks = $this->parseTome($tc->temporaryChaucer);
        // dd($chunks[0]);
        return $this->render('question/bin/_step2.html.twig', [
            'chunks' => $chunks[0],
        ]);


    }

    private function parseTome(string $input): array
    {
        $chunks = [];
        $chunks[] = explode('.', $input);
        return $chunks;
    }

}
