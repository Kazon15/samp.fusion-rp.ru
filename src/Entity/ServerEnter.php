<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerEnter
 * @ORM\Table(name="server_enter")
 * @ORM\Entity(repositoryClass="App\Repository\ServerEnterRepository")
 */
class ServerEnter
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var int
	 * @ORM\Column(name="world", type="smallint", nullable=false)
	 */
	private $world;
	
	/**
	 * @var int
	 * @ORM\Column(name="interior", type="smallint", nullable=false)
	 */
	private $interior;
	
	/**
	 * @var int
	 * @ORM\Column(name="world_tp", type="smallint", nullable=false)
	 */
	private $world_tp;
	
	/**
	 * @var int
	 * @ORM\Column(name="interior_tp", type="smallint", nullable=false)
	 */
	private $interior_tp;
	
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
	 * @ORM\Column(name="pos_tp_x", type="float", nullable=false)
	 */
	private $pos_tp_x;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_tp_y", type="float", nullable=false)
	 */
	private $pos_tp_y;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_tp_z", type="float", nullable=false)
	 */
	private $pos_tp_z;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_tp_fa", type="float", nullable=false)
	 */
	private $pos_tp_fa;
	
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
	public function getWorldTp() : int
	{
		return $this->world_tp;
	}
	
	/**
	 * @param int $world_tp
	 */
	public function setWorldTp(int $world_tp) : void
	{
		$this->world_tp = $world_tp;
	}
	
	/**
	 * @return int
	 */
	public function getInteriorTp() : int
	{
		return $this->interior_tp;
	}
	
	/**
	 * @param int $interior_tp
	 */
	public function setInteriorTp(int $interior_tp) : void
	{
		$this->interior_tp = $interior_tp;
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
	public function getPosTpX() : float
	{
		return $this->pos_tp_x;
	}
	
	/**
	 * @param float $pos_tp_x
	 */
	public function setPosTpX(float $pos_tp_x) : void
	{
		$this->pos_tp_x = $pos_tp_x;
	}
	
	/**
	 * @return float
	 */
	public function getPosTpY() : float
	{
		return $this->pos_tp_y;
	}
	
	/**
	 * @param float $pos_tp_y
	 */
	public function setPosTpY(float $pos_tp_y) : void
	{
		$this->pos_tp_y = $pos_tp_y;
	}
	
	/**
	 * @return float
	 */
	public function getPosTpZ() : float
	{
		return $this->pos_tp_z;
	}
	
	/**
	 * @param float $pos_tp_z
	 */
	public function setPosTpZ(float $pos_tp_z) : void
	{
		$this->pos_tp_z = $pos_tp_z;
	}
	
	/**
	 * @return float
	 */
	public function getPosTpFa() : float
	{
		return $this->pos_tp_fa;
	}
	
	/**
	 * @param float $pos_tp_fa
	 */
	public function setPosTpFa(float $pos_tp_fa) : void
	{
		$this->pos_tp_fa = $pos_tp_fa;
	}
}