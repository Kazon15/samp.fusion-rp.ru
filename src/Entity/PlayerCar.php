<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerCar
 * @ORM\Table(name="player_car")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerCarRepository")
 */
class PlayerCar
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="car")
	 */
	private $player;
	
	/**
	 * @var string
	 * @ORM\Column(name="number", type="string", length=10, nullable=false)
	 */
	private $number;
	
	/**
	 * @var bool
	 * @ORM\Column(name="lock", type="boolean", nullable=false)
	 */
	private $lock;
	
	/**
	 * @var int
	 * @ORM\Column(name="model", type="smallint", nullable=false)
	 */
	private $model;
	
	/**
	 * @var int
	 * @ORM\Column(name="price", type="integer", nullable=false)
	 */
	private $price;
	
	/**
	 * @var int
	 * @ORM\Column(name="color_1", type="integer", nullable=false)
	 */
	private $color_1;
	
	/**
	 * @var int
	 * @ORM\Column(name="color_2", type="integer", nullable=false)
	 */
	private $color_2;
	
	/**
	 * @var int
	 * @ORM\Column(name="paint_job", type="integer", nullable=false)
	 */
	private $paint_job;
	
	/**
	 * @var float
	 * @ORM\Column(name="fuel", type="float", nullable=false)
	 */
	private $fuel;
	
	/**
	 * @var float
	 * @ORM\Column(name="health", type="float", nullable=false)
	 */
	private $health;
	
	/**
	 * @var float
	 * @ORM\Column(name="mileage", type="float", nullable=false)
	 */
	private $mileage;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_x", type="float", nullable=false)
	 */
	private $pos_x;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_y", type="float", nullable=false)
	 */
	private $pos_y;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_z", type="float", nullable=false)
	 */
	private $pos_z;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_fa", type="float", nullable=false)
	 */
	private $pos_fa;
	
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
	 * @return string
	 */
	public function getNumber() : string
	{
		return $this->number;
	}
	
	/**
	 * @param string $number
	 */
	public function setNumber(string $number) : void
	{
		$this->number = $number;
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
	public function getModel() : int
	{
		return $this->model;
	}
	
	/**
	 * @param int $model
	 */
	public function setModel(int $model) : void
	{
		$this->model = $model;
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
	public function getColor1() : int
	{
		return $this->color_1;
	}
	
	/**
	 * @param int $color_1
	 */
	public function setColor1(int $color_1) : void
	{
		$this->color_1 = $color_1;
	}
	
	/**
	 * @return int
	 */
	public function getColor2() : int
	{
		return $this->color_2;
	}
	
	/**
	 * @param int $color_2
	 */
	public function setColor2(int $color_2) : void
	{
		$this->color_2 = $color_2;
	}
	
	/**
	 * @return int
	 */
	public function getPaintJob() : int
	{
		return $this->paint_job;
	}
	
	/**
	 * @param int $paint_job
	 */
	public function setPaintJob(int $paint_job) : void
	{
		$this->paint_job = $paint_job;
	}
	
	/**
	 * @return float
	 */
	public function getFuel() : float
	{
		return $this->fuel;
	}
	
	/**
	 * @param float $fuel
	 */
	public function setFuel(float $fuel) : void
	{
		$this->fuel = $fuel;
	}
	
	/**
	 * @return float
	 */
	public function getHealth() : float
	{
		return $this->health;
	}
	
	/**
	 * @param float $health
	 */
	public function setHealth(float $health) : void
	{
		$this->health = $health;
	}
	
	/**
	 * @return float
	 */
	public function getMileage() : float
	{
		return $this->mileage;
	}
	
	/**
	 * @param float $mileage
	 */
	public function setMileage(float $mileage) : void
	{
		$this->mileage = $mileage;
	}
	
	/**
	 * @return float
	 */
	public function getPosX() : float
	{
		return $this->pos_x;
	}
	
	/**
	 * @param float $pos_x
	 */
	public function setPosX(float $pos_x) : void
	{
		$this->pos_x = $pos_x;
	}
	
	/**
	 * @return float
	 */
	public function getPosY() : float
	{
		return $this->pos_y;
	}
	
	/**
	 * @param float $pos_y
	 */
	public function setPosY(float $pos_y) : void
	{
		$this->pos_y = $pos_y;
	}
	
	/**
	 * @return float
	 */
	public function getPosZ() : float
	{
		return $this->pos_z;
	}
	
	/**
	 * @param float $pos_z
	 */
	public function setPosZ(float $pos_z) : void
	{
		$this->pos_z = $pos_z;
	}
	
	/**
	 * @return float
	 */
	public function getPosFa() : float
	{
		return $this->pos_fa;
	}
	
	/**
	 * @param float $pos_fa
	 */
	public function setPosFa(float $pos_fa) : void
	{
		$this->pos_fa = $pos_fa;
	}
}