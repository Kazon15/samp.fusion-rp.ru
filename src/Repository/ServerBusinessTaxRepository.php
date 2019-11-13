<?php

namespace App\Repository;

use App\Entity\ServerBusinessTax;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerBusinessTax|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerBusinessTax|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerBusinessTax[]    findAll()
 * @method ServerBusinessTax[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerBusinessTaxRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerBusinessTax::class);
    }

    // /**
    //  * @return ServerBusinessTax[] Returns an array of ServerBusinessTax objects
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
    public function findOneBySomeField($value): ?ServerBusinessTax
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
