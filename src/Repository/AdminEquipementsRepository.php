<?php

namespace App\Repository;

use App\Entity\AdminEquipements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminEquipements|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminEquipements|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminEquipements[]    findAll()
 * @method AdminEquipements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminEquipementsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminEquipements::class);
    }

//    /**
//     * @return AdminEquipements[] Returns an array of AdminEquipements objects
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
    public function findOneBySomeField($value): ?AdminEquipements
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
