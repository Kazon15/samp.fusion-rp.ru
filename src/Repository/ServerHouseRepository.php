<?php

namespace App\Repository;

use App\Entity\ServerHouse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerHouse|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerHouse|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerHouse[]    findAll()
 * @method ServerHouse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerHouseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerHouse::class);
    }

    // /**
    //  * @return ServerHouse[] Returns an array of ServerHouse objects
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
    public function findOneBySomeField($value): ?ServerHouse
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
