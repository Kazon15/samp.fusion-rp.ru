<?php

namespace App\Repository;

use App\Entity\PlayerMoney;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerMoney|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerMoney|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerMoney[]    findAll()
 * @method PlayerMoney[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerMoneyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerMoney::class);
    }

    // /**
    //  * @return PlayerMoney[] Returns an array of PlayerMoney objects
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
    public function findOneBySomeField($value): ?PlayerMoney
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
