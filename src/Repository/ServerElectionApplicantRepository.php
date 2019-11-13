<?php

namespace App\Repository;

use App\Entity\ServerElectionApplicant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerElectionApplicant|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerElectionApplicant|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerElectionApplicant[]    findAll()
 * @method ServerElectionApplicant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerElectionApplicantRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerElectionApplicant::class);
    }

    // /**
    //  * @return ServerElectionApplicant[] Returns an array of ServerElectionApplicant objects
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
    public function findOneBySomeField($value): ?ServerElectionApplicant
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
