<?php

namespace App\Repository;

use App\Entity\AdminUserGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminUserGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminUserGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminUserGroups[]    findAll()
 * @method AdminUserGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminUserGroupsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminUserGroups::class);
    }

//    /**
//     * @return AdminUserGroups[] Returns an array of AdminUserGroups objects
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
    public function findOneBySomeField($value): ?AdminUserGroups
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
