<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerBusinessInterior
 * @ORM\Table(name="server_business_interior")
 * @ORM\Entity(repositoryClass="App\Repository\ServerBusinessInteriorRepository")
 */
class ServerBusinessInterior
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerBusiness", inversedBy="interior")
	 */
	private $business;
	
	/**
	 * @var int
	 * @ORM\Column(name="enter_price", type="integer", nullable=false)
	 */
	private $enter_price;
	
	/**
	 * @var bool
	 * @ORM\Column(name="door_lock", type="boolean", nullable=false)
	 */
	private $lock;
	
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
	 * @var float
	 * @ORM\Column(name="menu_x", type="float", nullable=false)
	 */
	private $menu_x;
	
	/**
	 * @var float
	 * @ORM\Column(name="menu_y", type="float", nullable=false)
	 */
	private $menu_y;
	
	/**
	 * @var float
	 * @ORM\Column(name="menu_z", type="float", nullable=false)
	 */
	private $menu_z;
	
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
	 * @param int $id
	 */
	public function setId(int $id) : void
	{
		$this->id = $id;
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
	 * @return int
	 */
	public function getEnterPrice() : int
	{
		return $this->enter_price;
	}
	
	/**
	 * @param int $enter_price
	 */
	public function setEnterPrice(int $enter_price) : void
	{
		$this->enter_price = $enter_price;
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
	 * @return float
	 */
	public function getMenuX() : float
	{
		return $this->menu_x;
	}
	
	/**
	 * @param float $menu_x
	 */
	public function setMenuX(float $menu_x) : void
	{
		$this->menu_x = $menu_x;
	}
	
	/**
	 * @return float
	 */
	public function getMenuY() : float
	{
		return $this->menu_y;
	}
	
	/**
	 * @param float $menu_y
	 */
	public function setMenuY(float $menu_y) : void
	{
		$this->menu_y = $menu_y;
	}
	
	/**
	 * @return float
	 */
	public function getMenuZ() : float
	{
		return $this->menu_z;
	}
	
	/**
	 * @param float $menu_z
	 */
	public function setMenuZ(float $menu_z) : void
	{
		$this->menu_z = $menu_z;
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