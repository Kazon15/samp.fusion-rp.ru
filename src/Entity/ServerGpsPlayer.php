<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerGpsPlayer
 * @ORM\Table(name="server_gps_player")
 * @ORM\Entity(repositoryClass="App\Repository\ServerGpsPlayerRepository")
 */
class ServerGpsPlayer
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\Player", inversedBy="gps")
	 */
	private $player;
	
	/**
	 * @var string
	 * @ORM\Column(name="name", type="string", length=64, nullable=false)
	 */
	private $name;
	
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
	 * @return int
	 */
	public function getId() : int
	{
		return $this->id;
	}
	
	public function getPlayer() : ?Player
	{
		return $this->player;
	}
	
	public function setPlayer(?Player $player) : self
	{
		$this->player = $player;
		
		return $this;
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
}