<?php

namespace App\Repository;

use App\Entity\ServerElection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerElection|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerElection|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerElection[]    findAll()
 * @method ServerElection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerElectionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerElection::class);
    }

    // /**
    //  * @return ServerElection[] Returns an array of ServerElection objects
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
    public function findOneBySomeField($value): ?ServerElection
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
