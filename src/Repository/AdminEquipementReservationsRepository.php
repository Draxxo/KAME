<?php

namespace App\Repository;

use App\Entity\AdminEquipementReservations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminEquipementReservations|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminEquipementReservations|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminEquipementReservations[]    findAll()
 * @method AdminEquipementReservations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminEquipementReservationsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminEquipementReservations::class);
    }

//    /**
//     * @return AdminEquipementReservations[] Returns an array of AdminEquipementReservations objects
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
    public function findOneBySomeField($value): ?AdminEquipementReservations
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
