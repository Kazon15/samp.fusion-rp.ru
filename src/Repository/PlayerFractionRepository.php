<?php

namespace App\Repository;

use App\Entity\PlayerFraction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerFraction|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerFraction|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerFraction[]    findAll()
 * @method PlayerFraction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerFractionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerFraction::class);
    }

    // /**
    //  * @return PlayerFraction[] Returns an array of PlayerFraction objects
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
    public function findOneBySomeField($value): ?PlayerFraction
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
