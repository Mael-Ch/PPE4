<?php

namespace App\Repository;

use App\Entity\ObstaclePartie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ObstaclePartie|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObstaclePartie|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObstaclePartie[]    findAll()
 * @method ObstaclePartie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObstaclePartieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObstaclePartie::class);
    }

    // /**
    //  * @return ObstaclePartie[] Returns an array of ObstaclePartie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ObstaclePartie
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
