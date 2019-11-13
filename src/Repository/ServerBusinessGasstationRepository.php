<?php

namespace App\Repository;

use App\Entity\ServerBusinessGasstation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerBusinessGasstation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerBusinessGasstation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerBusinessGasstation[]    findAll()
 * @method ServerBusinessGasstation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerBusinessGasstationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerBusinessGasstation::class);
    }

    // /**
    //  * @return ServerBusinessGasstation[] Returns an array of ServerBusinessGasstation objects
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
    public function findOneBySomeField($value): ?ServerBusinessGasstation
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
