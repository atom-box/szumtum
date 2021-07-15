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
     * @Route("/{title}/write-questions", name="writequestions")
     */
    public function writeQuestions(EntityManagerInterface $em, Request $req, TomeController $tc, string $title): Response
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
        // $chunks = $this->parseTome($body);
        $chunks = $this->parseTome('asdfja;lsdkjf asdf;kjasdf.   asldfkajsdf;k.     sadsdf.' . $title);
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
