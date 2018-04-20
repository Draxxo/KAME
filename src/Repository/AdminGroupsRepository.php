<?php

namespace App\Repository;

use App\Entity\AdminGroups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AdminGroups|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdminGroups|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdminGroups[]    findAll()
 * @method AdminGroups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdminGroupsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AdminGroups::class);
    }

//    /**
//     * @return AdminGroups[] Returns an array of AdminGroups objects
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
    public function findOneBySomeField($value): ?AdminGroups
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
