<?php

namespace App\Repository;

use App\Entity\PlayerFine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerFine|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerFine|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerFine[]    findAll()
 * @method PlayerFine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerFineRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerFine::class);
    }

    // /**
    //  * @return PlayerFine[] Returns an array of PlayerFine objects
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
    public function findOneBySomeField($value): ?PlayerFine
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
