<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ServerFraction
 * @ORM\Table(name="server_fraction")
 * @ORM\Entity(repositoryClass="App\Repository\ServerFractionRepository")
 */
class ServerFraction
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="leader")
	 */
	private $player;
	
	/**
	 * @var string
	 * @ORM\Column(name="name", type="string", length=32, nullable=false)
	 */
	private $name;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerFractionRang", mappedBy="fraction")
	 */
	private $rang;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerFractionWarehouse", mappedBy="fraction")
	 */
	private $warehouse;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\PlayerFraction", mappedBy="fraction")
	 */
	private $players;
	
	public function __construct()
	{
		$this->rang      = new ArrayCollection();
		$this->warehouse = new ArrayCollection();
		$this->players = new ArrayCollection();
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
	 * @return mixed
	 */
	public function getRang() : Collection
	{
		return $this->rang;
	}
	
	/**
	 * @param mixed $rang
	 */
	public function setRang($rang) : void
	{
		$this->rang = $rang;
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
	
	/**
	 * @return mixed
	 */
	public function getPlayers()
	{
		return $this->players;
	}
	
	/**
	 * @param mixed $players
	 */
	public function setPlayers($players) : void
	{
		$this->players = $players;
	}
}