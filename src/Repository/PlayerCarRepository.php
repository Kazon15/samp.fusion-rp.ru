<?php

namespace App\Repository;

use App\Entity\PlayerCar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerCar|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerCar|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerCar[]    findAll()
 * @method PlayerCar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerCarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerCar::class);
    }

    // /**
    //  * @return PlayerCar[] Returns an array of PlayerCar objects
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
    public function findOneBySomeField($value): ?PlayerCar
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
