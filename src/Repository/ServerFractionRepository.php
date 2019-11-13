<?php

namespace App\Repository;

use App\Entity\ServerFraction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerFraction|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerFraction|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerFraction[]    findAll()
 * @method ServerFraction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerFractionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerFraction::class);
    }

    // /**
    //  * @return ServerFraction[] Returns an array of ServerFraction objects
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
    public function findOneBySomeField($value): ?ServerFraction
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
