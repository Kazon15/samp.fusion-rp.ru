<?php

namespace App\Repository;

use App\Entity\ServerFractionRang;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerFractionRang|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerFractionRang|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerFractionRang[]    findAll()
 * @method ServerFractionRang[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerFractionRangRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerFractionRang::class);
    }

    // /**
    //  * @return ServerFractionRang[] Returns an array of ServerFractionRang objects
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
    public function findOneBySomeField($value): ?ServerFractionRang
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
