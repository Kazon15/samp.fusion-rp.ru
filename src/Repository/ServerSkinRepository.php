<?php

namespace App\Repository;

use App\Entity\ServerSkin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerSkin|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerSkin|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerSkin[]    findAll()
 * @method ServerSkin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerSkinRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerSkin::class);
    }

    // /**
    //  * @return ServerSkin[] Returns an array of ServerSkin objects
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
    public function findOneBySomeField($value): ?ServerSkin
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
