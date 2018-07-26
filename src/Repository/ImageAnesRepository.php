<?php

namespace App\Repository;

use App\Entity\ImageAnes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ImageAnes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageAnes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageAnes[]    findAll()
 * @method ImageAnes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageAnesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ImageAnes::class);
    }

//    /**
//     * @return ImageAnes[] Returns an array of ImageAnes objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageAnes
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
