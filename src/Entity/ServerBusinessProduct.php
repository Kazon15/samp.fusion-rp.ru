<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerBusinessProduct
 * @ORM\Table(name="server_business_product")
 * @ORM\Entity(repositoryClass="App\Repository\ServerBusinessProductRepository")
 */
class ServerBusinessProduct
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerBusiness", inversedBy="product")
	 */
	private $business;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerStorage", inversedBy="product")
	 */
	private $storage;
	
	/**
	 * @var int
	 * @ORM\Column(name="price", type="integer", nullable=false)
	 */
	private $price;
	
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
	public function getPrice() : int
	{
		return $this->price;
	}
	
	/**
	 * @param int $price
	 */
	public function setPrice(int $price) : void
	{
		$this->price = $price;
	}
}