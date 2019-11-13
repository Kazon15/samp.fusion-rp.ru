<?php

namespace App\Repository;

use App\Entity\PlayerAdmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerAdmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerAdmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerAdmin[]    findAll()
 * @method PlayerAdmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerAdminRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerAdmin::class);
    }

    // /**
    //  * @return PlayerAdmin[] Returns an array of PlayerAdmin objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlayerAdmin
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
