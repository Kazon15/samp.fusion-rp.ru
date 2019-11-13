<?php

namespace App\Repository;

use App\Entity\PlayerInventory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerInventory|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerInventory|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerInventory[]    findAll()
 * @method PlayerInventory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerInventoryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerInventory::class);
    }

    // /**
    //  * @return PlayerInventory[] Returns an array of PlayerInventory objects
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
    public function findOneBySomeField($value): ?PlayerInventory
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
