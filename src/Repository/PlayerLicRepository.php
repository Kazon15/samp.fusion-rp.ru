<?php

namespace App\Repository;

use App\Entity\PlayerLic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerLic|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerLic|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerLic[]    findAll()
 * @method PlayerLic[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerLicRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerLic::class);
    }

    // /**
    //  * @return PlayerLic[] Returns an array of PlayerLic objects
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
    public function findOneBySomeField($value): ?PlayerLic
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
