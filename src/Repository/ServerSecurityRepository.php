<?php

namespace App\Repository;

use App\Entity\ServerSecurity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerSecurity|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerSecurity|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerSecurity[]    findAll()
 * @method ServerSecurity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerSecurityRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerSecurity::class);
    }

    // /**
    //  * @return ServerSecurity[] Returns an array of ServerSecurity objects
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
    public function findOneBySomeField($value): ?ServerSecurity
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
