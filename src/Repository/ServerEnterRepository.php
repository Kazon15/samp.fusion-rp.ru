<?php

namespace App\Repository;

use App\Entity\ServerEnter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerEnter|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerEnter|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerEnter[]    findAll()
 * @method ServerEnter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerEnterRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerEnter::class);
    }

    // /**
    //  * @return ServerEnter[] Returns an array of ServerEnter objects
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
    public function findOneBySomeField($value): ?ServerEnter
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
