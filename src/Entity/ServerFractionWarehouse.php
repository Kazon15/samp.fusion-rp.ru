<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerFractionWarehouse
 * @ORM\Table(name="server_fraction_warehouse")
 * @ORM\Entity(repositoryClass="App\Repository\ServerFractionWarehouseRepository")
 */
class ServerFractionWarehouse
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerFraction", inversedBy="warehouse")
	 */
	private $fraction;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerStorage", inversedBy="fraction_warehouse")
	 */
	private $storage;
	
	/**
	 * @var int
	 * @ORM\Column(name="count", type="integer", nullable=false)
	 */
	private $count;
	
	/**
	 * @return int
	 */
	public function getId() : int
	{
		return $this->id;
	}
	
	/**
	 * @param int $id
	 */
	public function setId(int $id) : void
	{
		$this->id = $id;
	}
	
	/**
	 * @return mixed
	 */
	public function getFraction()
	{
		return $this->fraction;
	}
	
	/**
	 * @param mixed $fraction
	 */
	public function setFraction($fraction) : void
	{
		$this->fraction = $fraction;
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