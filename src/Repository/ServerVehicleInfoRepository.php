<?php

namespace App\Repository;

use App\Entity\ServerVehicleInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerVehicleInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerVehicleInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerVehicleInfo[]    findAll()
 * @method ServerVehicleInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerVehicleInfoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerVehicleInfo::class);
    }

    // /**
    //  * @return ServerVehicleInfo[] Returns an array of ServerVehicleInfo objects
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
    public function findOneBySomeField($value): ?ServerVehicleInfo
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
