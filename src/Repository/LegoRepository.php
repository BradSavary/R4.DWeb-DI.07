<?php

namespace App\Repository;

use App\Entity\Lego;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lego>
 */
class LegoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lego::class);
    }

    public function findByCollection(string $collection): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.collection = :collection')
            ->setParameter('collection', $collection)
            ->orderBy('l.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findAllExcludingPremium()
    {
        return $this->createQueryBuilder('l')
            ->leftJoin('l.category', 'c')
            ->where('c.id != :premiumId')
            ->setParameter('premiumId', 5)
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return Lego[] Returns an array of Lego objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Lego
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
