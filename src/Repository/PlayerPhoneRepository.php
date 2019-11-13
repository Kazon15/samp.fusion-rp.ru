<?php

namespace App\Repository;

use App\Entity\PlayerPhone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerPhone|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerPhone|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerPhone[]    findAll()
 * @method PlayerPhone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerPhoneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerPhone::class);
    }

    // /**
    //  * @return PlayerPhone[] Returns an array of PlayerPhone objects
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
    public function findOneBySomeField($value): ?PlayerPhone
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
