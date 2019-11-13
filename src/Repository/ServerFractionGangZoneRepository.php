<?php

namespace App\Repository;

use App\Entity\ServerFractionGangZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ServerFractionGangZone|null find($id, $lockMode = null, $lockVersion = null)
 * @method ServerFractionGangZone|null findOneBy(array $criteria, array $orderBy = null)
 * @method ServerFractionGangZone[]    findAll()
 * @method ServerFractionGangZone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServerFractionGangZoneRepository extends ServiceEntityRepository
{
	public function __construct(RegistryInterface $registry)
	{
		parent::__construct($registry, ServerFractionGangZone::class);
	}
	
	// /**
	//  * @return ServerFractionGangZone[] Returns an array of ServerFractionGangZone objects
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
	public function findOneBySomeField($value): ?ServerFractionGangZone
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
