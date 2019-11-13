<?php

namespace App\Repository;

use App\Entity\PlayerCrimes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerCrimes|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerCrimes|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerCrimes[]    findAll()
 * @method PlayerCrimes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerCrimesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerCrimes::class);
    }

    // /**
    //  * @return PlayerCrimes[] Returns an array of PlayerCrimes objects
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
    public function findOneBySomeField($value): ?PlayerCrimes
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
