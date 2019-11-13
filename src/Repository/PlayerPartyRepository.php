<?php

namespace App\Repository;

use App\Entity\PlayerParty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerParty|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerParty|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerParty[]    findAll()
 * @method PlayerParty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerPartyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerParty::class);
    }

    // /**
    //  * @return PlayerParty[] Returns an array of PlayerParty objects
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
    public function findOneBySomeField($value): ?PlayerParty
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
