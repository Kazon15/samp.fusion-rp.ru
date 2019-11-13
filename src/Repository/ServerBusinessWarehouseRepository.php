<?php

namespace App\Repository;

use App\Entity\ServerBusinessWarehouse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerBusinessWarehouse|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerBusinessWarehouse|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerBusinessWarehouse[]    findAll()
 * @method ServerBusinessWarehouse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerBusinessWarehouseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerBusinessWarehouse::class);
    }

    // /**
    //  * @return ServerBusinessWarehouse[] Returns an array of ServerBusinessWarehouse objects
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
    public function findOneBySomeField($value): ?ServerBusinessWarehouse
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
