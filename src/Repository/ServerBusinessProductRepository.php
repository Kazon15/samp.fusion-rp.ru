<?php

namespace App\Repository;

use App\Entity\ServerBusinessProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerBusinessProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerBusinessProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerBusinessProduct[]    findAll()
 * @method ServerBusinessProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerBusinessProductRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerBusinessProduct::class);
    }

    // /**
    //  * @return ServerBusinessProduct[] Returns an array of ServerBusinessProduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ServerBusinessProduct
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
