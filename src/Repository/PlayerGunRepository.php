<?php

namespace App\Repository;

use App\Entity\PlayerGun;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerGun|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerGun|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerGun[]    findAll()
 * @method PlayerGun[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerGunRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerGun::class);
    }

    // /**
    //  * @return PlayerGun[] Returns an array of PlayerGun objects
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
    public function findOneBySomeField($value): ?PlayerGun
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
