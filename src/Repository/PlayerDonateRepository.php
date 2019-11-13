<?php

namespace App\Repository;

use App\Entity\PlayerDonate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerDonate|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerDonate|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerDonate[]    findAll()
 * @method PlayerDonate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerDonateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerDonate::class);
    }

    // /**
    //  * @return PlayerDonate[] Returns an array of PlayerDonate objects
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
    public function findOneBySomeField($value): ?PlayerDonate
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
