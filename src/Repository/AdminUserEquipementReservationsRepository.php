<?php

namespace App\Repository;

use App\Entity\AdminUserEquipementReservations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminUserEquipementReservations|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminUserEquipementReservations|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminUserEquipementReservations[]    findAll()
 * @method AdminUserEquipementReservations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminUserEquipementReservationsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminUserEquipementReservations::class);
    }

//    /**
//     * @return AdminUserEquipementReservations[] Returns an array of AdminUserEquipementReservations objects
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
    public function findOneBySomeField($value): ?AdminUserEquipementReservations
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
