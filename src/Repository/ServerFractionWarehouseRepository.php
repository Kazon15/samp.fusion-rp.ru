<?php

namespace App\Repository;

use App\Entity\ServerFractionWarehouse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerFractionWarehouse|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerFractionWarehouse|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerFractionWarehouse[]    findAll()
 * @method ServerFractionWarehouse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerFractionWarehouseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerFractionWarehouse::class);
    }

    // /**
    //  * @return ServerFractionWarehouse[] Returns an array of ServerFractionWarehouse objects
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
    public function findOneBySomeField($value): ?ServerFractionWarehouse
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
