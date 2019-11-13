<?php

namespace App\Repository;

use App\Entity\ServerGpsPlayer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerGpsPlayer|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerGpsPlayer|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerGpsPlayer[]    findAll()
 * @method ServerGpsPlayer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerGpsPlayerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerGpsPlayer::class);
    }

    // /**
    //  * @return ServerGpsPlayer[] Returns an array of ServerGpsPlayer objects
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
    public function findOneBySomeField($value): ?ServerGpsPlayer
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
