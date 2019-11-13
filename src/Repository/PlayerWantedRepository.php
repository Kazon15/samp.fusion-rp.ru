<?php

namespace App\Repository;

use App\Entity\PlayerWanted;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerWanted|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerWanted|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerWanted[]    findAll()
 * @method PlayerWanted[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerWantedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerWanted::class);
    }

    // /**
    //  * @return PlayerWanted[] Returns an array of PlayerWanted objects
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
    public function findOneBySomeField($value): ?PlayerWanted
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
