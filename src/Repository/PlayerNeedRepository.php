<?php

namespace App\Repository;

use App\Entity\PlayerNeed;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerNeed|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerNeed|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerNeed[]    findAll()
 * @method PlayerNeed[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerNeedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerNeed::class);
    }

    // /**
    //  * @return PlayerNeed[] Returns an array of PlayerNeed objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlayerNeed
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
