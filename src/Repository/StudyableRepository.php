<?php

namespace App\Repository;

use App\Entity\Studyable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Studyable|null find($id, $lockMode = null, $lockVersion = null)
 * @method Studyable|null findOneBy(array $criteria, array $orderBy = null)
 * @method Studyable[]    findAll()
 * @method Studyable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudyableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Studyable::class);
    }

    // /**
    //  * @return Studyable[] Returns an array of Studyable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Studyable
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
