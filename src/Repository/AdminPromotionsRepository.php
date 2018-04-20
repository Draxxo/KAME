<?php

namespace App\Repository;

use App\Entity\AdminPromotions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminPromotions|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminPromotions|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminPromotions[]    findAll()
 * @method AdminPromotions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminPromotionsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminPromotions::class);
    }

//    /**
//     * @return AdminPromotions[] Returns an array of AdminPromotions objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdminPromotions
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
