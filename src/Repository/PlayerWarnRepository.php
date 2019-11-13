<?php

namespace App\Repository;

use App\Entity\PlayerWarn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerWarn|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerWarn|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerWarn[]    findAll()
 * @method PlayerWarn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerWarnRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerWarn::class);
    }

    // /**
    //  * @return PlayerWarn[] Returns an array of PlayerWarn objects
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
    public function findOneBySomeField($value): ?PlayerWarn
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
