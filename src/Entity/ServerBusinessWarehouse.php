<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerBusinessWarehouse
 * @ORM\Table(name="server_business_warehouse")
 * @ORM\Entity(repositoryClass="App\Repository\ServerBusinessWarehouseRepository")
 */
class ServerBusinessWarehouse
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerBusiness", inversedBy="warehouse")
	 */
	private $business;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerStorage", inversedBy="business_warehouse")
	 */
	private $storage;
	
	/**
	 * @var int
	 * @ORM\Column(name="count", type="integer", nullable=false)
	 */
	private $count;
	
	public function getId() : ?int
	{
		return $this->id;
	}
	
	/**
	 * @return mixed
	 */
	public function getBusiness()
	{
		return $this->business;
	}
	
	/**
	 * @param mixed $business
	 */
	public function setBusiness($business) : void
	{
		$this->business = $business;
	}
	
	/**
	 * @return mixed
	 */
	public function getStorage()
	{
		return $this->storage;
	}
	
	/**
	 * @param mixed $storage
	 */
	public function setStorage($storage) : void
	{
		$this->storage = $storage;
	}
	
	/**
	 * @return int
	 */
	public function getCount() : int
	{
		return $this->count;
	}
	
	/**
	 * @param int $count
	 */
	public function setCount(int $count) : void
	{
		$this->count = $count;
	}
}