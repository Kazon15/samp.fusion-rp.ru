<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ServerStorage
 * @ORM\Table(name="server_storage")
 * @ORM\Entity(repositoryClass="App\Repository\ServerStorageRepository")
 */
class ServerStorage
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var string
	 * @ORM\Column(name="name", type="string", nullable=false)
	 */
	private $name;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerBusinessProduct", mappedBy="storage")
	 */
	private $business_product;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerBusinessWarehouse", mappedBy="storage")
	 */
	private $business_warehouse;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerFractionWarehouse", mappedBy="storage")
	 */
	private $fraction_warehouse;
	
	public function __construct()
	{
		$this->business_product   = new ArrayCollection();
		$this->business_warehouse = new ArrayCollection();
		$this->fraction_warehouse = new ArrayCollection();
	}
	
	public function getId() : ?int
	{
		return $this->id;
	}
	
	/**
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}
	
	/**
	 * @param string $name
	 */
	public function setName(string $name) : void
	{
		$this->name = $name;
	}
	
	/**
	 * @return mixed
	 */
	public function getBusinessProduct() : Collection
	{
		return $this->business_product;
	}
	
	/**
	 * @param mixed $business_product
	 */
	public function setBusinessProduct($business_product) : void
	{
		$this->business_product = $business_product;
	}
	
	/**
	 * @return mixed
	 */
	public function getBusinessWarehouse() : Collection
	{
		return $this->business_warehouse;
	}
	
	/**
	 * @param mixed $business_warehouse
	 */
	public function setBusinessWarehouse($business_warehouse) : void
	{
		$this->business_warehouse = $business_warehouse;
	}
	
	/**
	 * @return mixed
	 */
	public function getFractionWarehouse() : Collection
	{
		return $this->fraction_warehouse;
	}
	
	/**
	 * @param mixed $fraction_warehouse
	 */
	public function setFractionWarehouse($fraction_warehouse) : void
	{
		$this->fraction_warehouse = $fraction_warehouse;
	}
}