<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ServerBusiness
 * @ORM\Table(name="server_business")
 * @ORM\Entity(repositoryClass="App\Repository\ServerBusinessRepository")
 */
class ServerBusiness
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Player", inversedBy="business")
	 */
	private $player;
	
	/**
	 * @var string
	 * @ORM\Column(name="name", type="string", nullable=false)
	 */
	private $name;
	
	/**
	 * @var int
	 * @ORM\Column(name="price", type="integer", nullable=false)
	 */
	private $price;
	
	/**
	 * @var int
	 * @ORM\Column(name="type", type="integer", nullable=false)
	 */
	private $type;
	
	/**
	 * @var int
	 * @ORM\Column(name="icon", type="integer", nullable=false)
	 */
	private $icon;
	
	/**
	 * @var float
	 * @ORM\Column(name="x", type="float", nullable=false)
	 */
	private $x;
	
	/**
	 * @var float
	 * @ORM\Column(name="y", type="float", nullable=false)
	 */
	private $y;
	
	/**
	 * @var float
	 * @ORM\Column(name="z", type="float", nullable=false)
	 */
	private $z;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerBusinessInterior", mappedBy="business")
	 */
	private $interior;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerBusinessJob", mappedBy="business")
	 */
	private $job;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerBusinessProduct", mappedBy="business")
	 */
	private $product;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerBusinessWarehouse", mappedBy="business")
	 */
	private $warehouse;
	
	public function __construct()
	{
		$this->product   = new ArrayCollection();
		$this->warehouse = new ArrayCollection();
	}
	
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
	 * @return int
	 */
	public function getIcon() : int
	{
		return $this->icon;
	}
	
	/**
	 * @param int $icon
	 */
	public function setIcon(int $icon) : void
	{
		$this->icon = $icon;
	}
	
	/**
	 * @return float
	 */
	public function getX() : float
	{
		return $this->x;
	}
	
	/**
	 * @param float $x
	 */
	public function setX(float $x) : void
	{
		$this->x = $x;
	}
	
	/**
	 * @return float
	 */
	public function getY() : float
	{
		return $this->y;
	}
	
	/**
	 * @param float $y
	 */
	public function setY(float $y) : void
	{
		$this->y = $y;
	}
	
	/**
	 * @return float
	 */
	public function getZ() : float
	{
		return $this->z;
	}
	
	/**
	 * @param float $z
	 */
	public function setZ(float $z) : void
	{
		$this->z = $z;
	}
	
	/**
	 * @return mixed
	 */
	public function getInterior()
	{
		return $this->interior;
	}
	
	/**
	 * @param mixed $interior
	 */
	public function setInterior($interior) : void
	{
		$this->interior = $interior;
	}
	
	/**
	 * @return mixed
	 */
	public function getJob()
	{
		return $this->job;
	}
	
	/**
	 * @param mixed $interior
	 */
	public function setJob($job) : void
	{
		$this->job = $job;
	}
	
	/**
	 * @return mixed
	 */
	public function getProduct() : Collection
	{
		return $this->product;
	}
	
	/**
	 * @param mixed $product
	 */
	public function setProduct($product) : void
	{
		$this->product = $product;
	}
	
	/**
	 * @return mixed
	 */
	public function getWarehouse() : Collection
	{
		return $this->warehouse;
	}
	
	/**
	 * @param mixed $warehouse
	 */
	public function setWarehouse($warehouse) : void
	{
		$this->warehouse = $warehouse;
	}
}