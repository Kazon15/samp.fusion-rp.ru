<?php

namespace App\Repository;

use App\Entity\ServerElectionParty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerElectionParty|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerElectionParty|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerElectionParty[]    findAll()
 * @method ServerElectionParty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerElectionPartyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerElectionParty::class);
    }

    // /**
    //  * @return ServerElectionParty[] Returns an array of ServerElectionParty objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ServerElectionParty
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
