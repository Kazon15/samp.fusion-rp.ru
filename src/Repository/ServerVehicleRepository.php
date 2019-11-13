<?php

namespace App\Repository;

use App\Entity\ServerVehicle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerVehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerVehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerVehicle[]    findAll()
 * @method ServerVehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerVehicleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerVehicle::class);
    }

    // /**
    //  * @return ServerVehicle[] Returns an array of ServerVehicle objects
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
    public function findOneBySomeField($value): ?ServerVehicle
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
