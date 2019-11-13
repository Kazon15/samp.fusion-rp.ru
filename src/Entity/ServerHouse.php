<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerHouse
 * @ORM\Table(name="server_house")
 * @ORM\Entity(repositoryClass="App\Repository\ServerHouseRepository")
 */
class ServerHouse
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Player", inversedBy="house")
	 */
	private $player;
	
	/**
	 * @var bool
	 * @ORM\Column(name="door_lock", type="boolean", nullable=false)
	 */
	private $lock;
	
	/**
	 * @var int
	 * @ORM\Column(name="cash", type="integer", nullable=false)
	 */
	private $cash;
	
	/**
	 * @var int
	 * @ORM\Column(name="price", type="integer", nullable=false)
	 */
	private $price;
	
	/**
	 * @var int
	 * @ORM\Column(name="interior", type="integer", nullable=false)
	 */
	private $interior;
	
	/**
	 * @var int
	 * @ORM\Column(name="world", type="integer", nullable=false)
	 */
	private $world;
	
	/**
	 * @var int
	 * @ORM\Column(name="type", type="integer", nullable=false)
	 */
	private $type;
	
	/**
	 * @var float
	 * @ORM\Column(name="enter_x", type="float", nullable=false)
	 */
	private $enter_x;
	
	/**
	 * @var float
	 * @ORM\Column(name="enter_y", type="float", nullable=false)
	 */
	private $enter_y;
	
	/**
	 * @var float
	 * @ORM\Column(name="enter_z", type="float", nullable=false)
	 */
	private $enter_z;
	
	/**
	 * @var float
	 * @ORM\Column(name="exit_x", type="float", nullable=false)
	 */
	private $exit_x;
	
	/**
	 * @var float
	 * @ORM\Column(name="exit_y", type="float", nullable=false)
	 */
	private $exit_y;
	
	/**
	 * @var float
	 * @ORM\Column(name="exit_z", type="float", nullable=false)
	 */
	private $exit_z;
	
	/**
	 * @return int
	 */
	public function getId() : int
	{
		return $this->id;
	}
	
	/**
	 * @return mixed
	 */
	public function getPlayer()
	{
		return $this->player;
	}
	
	/**
	 * @param mixed $player
	 */
	public function setPlayer($player) : void
	{
		$this->player = $player;
	}
	
	/**
	 * @return bool
	 */
	public function isLock() : bool
	{
		return $this->lock;
	}
	
	/**
	 * @param bool $lock
	 */
	public function setLock(bool $lock) : void
	{
		$this->lock = $lock;
	}
	
	/**
	 * @return int
	 */
	public function getCash() : int
	{
		return $this->cash;
	}
	
	/**
	 * @param int $cash
	 */
	public function setCash(int $cash) : void
	{
		$this->cash = $cash;
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
	
	/**
	 * @return int
	 */
	public function getInterior() : int
	{
		return $this->interior;
	}
	
	/**
	 * @param int $interior
	 */
	public function setInterior(int $interior) : void
	{
		$this->interior = $interior;
	}
	
	/**
	 * @return int
	 */
	public function getWorld() : int
	{
		return $this->world;
	}
	
	/**
	 * @param int $world
	 */
	public function setWorld(int $world) : void
	{
		$this->world = $world;
	}
	
	/**
	 * @return int
	 */
	public function getType() : int
	{
		return $this->type;
	}
	
	/**
	 * @param int $type
	 */
	public function setType(int $type) : void
	{
		$this->type = $type;
	}
	
	/**
	 * @return float
	 */
	public function getEnterX() : float
	{
		return $this->enter_x;
	}
	
	/**
	 * @param float $enter_x
	 */
	public function setEnterX(float $enter_x) : void
	{
		$this->enter_x = $enter_x;
	}
	
	/**
	 * @return float
	 */
	public function getEnterY() : float
	{
		return $this->enter_y;
	}
	
	/**
	 * @param float $enter_y
	 */
	public function setEnterY(float $enter_y) : void
	{
		$this->enter_y = $enter_y;
	}
	
	/**
	 * @return float
	 */
	public function getEnterZ() : float
	{
		return $this->enter_z;
	}
	
	/**
	 * @param float $enter_z
	 */
	public function setEnterZ(float $enter_z) : void
	{
		$this->enter_z = $enter_z;
	}
	
	/**
	 * @return float
	 */
	public function getExitX() : float
	{
		return $this->exit_x;
	}
	
	/**
	 * @param float $exit_x
	 */
	public function setExitX(float $exit_x) : void
	{
		$this->exit_x = $exit_x;
	}
	
	/**
	 * @return float
	 */
	public function getExitY() : float
	{
		return $this->exit_y;
	}
	
	/**
	 * @param float $exit_y
	 */
	public function setExitY(float $exit_y) : void
	{
		$this->exit_y = $exit_y;
	}
	
	/**
	 * @return float
	 */
	public function getExitZ() : float
	{
		return $this->exit_z;
	}
	
	/**
	 * @param float $exit_z
	 */
	public function setExitZ(float $exit_z) : void
	{
		$this->exit_z = $exit_z;
	}
}