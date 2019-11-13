<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerVehicle
 * @ORM\Table(name="server_vehicle")
 * @ORM\Entity(repositoryClass="App\Repository\ServerVehicleRepository")
 */
class ServerVehicle
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
	 * @ORM\Column(name="model", type="smallint", nullable=false)
	 */
	private $model;
	
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
	 * @var int
	 * @ORM\Column(name="color_0", type="integer", nullable=false)
	 */
	private $color_0;
	
	/**
	 * @var int
	 * @ORM\Column(name="color_1", type="integer", nullable=false)
	 */
	private $color_1;
	
	/**
	 * @var int
	 * @ORM\Column(name="fraction", type="smallint", nullable=false)
	 */
	private $fraction;
	
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
	
	/**
	 * @return int
	 */
	public function getColor0() : int
	{
		return $this->color_0;
	}
	
	/**
	 * @param int $color_0
	 */
	public function setColor0(int $color_0) : void
	{
		$this->color_0 = $color_0;
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
	public function getFraction() : int
	{
		return $this->fraction;
	}
	
	/**
	 * @param int $fraction
	 */
	public function setFraction(int $fraction) : void
	{
		$this->fraction = $fraction;
	}
}