<?php

namespace App\Repository;

use App\Entity\Hat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hat[]    findAll()
 * @method Hat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hat::class);
    }

    // /**
    //  * @return Hat[] Returns an array of Hat objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hat
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
