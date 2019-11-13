<?php

namespace App\Repository;

use App\Entity\ServerBusinessStatistic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerBusinessStatistic|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerBusinessStatistic|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerBusinessStatistic[]    findAll()
 * @method ServerBusinessStatistic[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerBusinessStatisticRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerBusinessStatistic::class);
    }

    // /**
    //  * @return ServerBusinessStatistic[] Returns an array of ServerBusinessStatistic objects
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
    public function findOneBySomeField($value): ?ServerBusinessStatistic
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
