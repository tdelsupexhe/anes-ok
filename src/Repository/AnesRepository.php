<?php

namespace App\Repository;

use App\Entity\Anes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Anes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Anes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Anes[]    findAll()
 * @method Anes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AnesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Anes::class);
    }

//    /**
//     * @return Anes[] Returns an array of Anes objects
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
    public function findOneBySomeField($value): ?Anes
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
