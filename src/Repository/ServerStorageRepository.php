<?php

namespace App\Repository;

use App\Entity\ServerStorage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerStorage|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerStorage|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerStorage[]    findAll()
 * @method ServerStorage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerStorageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ServerStorage::class);
    }

    // /**
    //  * @return ServerStorage[] Returns an array of ServerStorage objects
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
    public function findOneBySomeField($value): ?ServerStorage
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
