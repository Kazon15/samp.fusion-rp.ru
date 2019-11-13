<?php

namespace App\Repository;

use App\Entity\PlayerBan;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerBan|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerBan|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerBan[]    findAll()
 * @method PlayerBan[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerBanRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerBan::class);
    }

    // /**
    //  * @return PlayerBan[] Returns an array of PlayerBan objects
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
    public function findOneBySomeField($value): ?PlayerBan
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
