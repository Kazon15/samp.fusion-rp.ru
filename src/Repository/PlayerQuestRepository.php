<?php

namespace App\Repository;

use App\Entity\PlayerQuest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PlayerQuest|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerQuest|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerQuest[]    findAll()
 * @method PlayerQuest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerQuestRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PlayerQuest::class);
    }

    // /**
    //  * @return PlayerQuest[] Returns an array of PlayerQuest objects
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
    public function findOneBySomeField($value): ?PlayerQuest
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
