<?php

namespace App\Repository;

use App\Entity\Question;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Question|null find($id, $lockMode = null, $lockVersion = null)
 * @method Question|null findOneBy(array $criteria, array $orderBy = null)
 * @method Question[]    findAll()
 * @method Question[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Question::class);
    }

    
    /**
     * @return Question[] Returns an array of Question objects
     */
     public function findByTitle(string $title)
     {
        $em = $this->getEntityManager();
        // TODO   TODO    TODO 
        // $query = $em->createQuery(
        //     'SELECT body FROM tome WHERE title = "Canterbury Tales Prologue";'
            // 'SELECT c
            // FROM App\Ent    ity\Question p
            // WHERE p.price > :price
            // ORDER BY p.price ASC'
        // )->setParameter('chunk', $chunk);


    //     $tomeRow = $this->getDoctrine()
    //     ->getRepository(Tome::class)
    //     ->find($title);
    //     // returns an array of Product objects
    //     return $tomeRow->getResult();
     }

     /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Question
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
