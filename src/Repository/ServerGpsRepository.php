<?php

namespace App\Repository;

use App\Entity\ServerGps;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerGps|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerGps|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerGps[]    findAll()
 * @method ServerGps[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerGpsRepository extends ServiceEntityRepository
{
	public function __construct(RegistryInterface $registry)
	{
		parent::__construct($registry, ServerGps::class);
	}
	
	// /**
	//  * @return PlayerGps[] Returns an array of PlayerGps objects
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
	public function findOneBySomeField($value): ?PlayerGps
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
