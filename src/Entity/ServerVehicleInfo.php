<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerVehicleInfo
 * @ORM\Table(name="server_vehicle_info")
 * @ORM\Entity(repositoryClass="App\Repository\ServerVehicleInfoRepository")
 */
class ServerVehicleInfo
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
	 * @var string
	 * @ORM\Column(name="name", type="string", length=34, nullable=false)
	 */
	private $name;
	
	/**
	 * @var int
	 * @ORM\Column(name="price", type="integer", nullable=false)
	 */
	private $price;
	
	/**
	 * @var int
	 * @ORM\Column(name="tank", type="smallint", nullable=false)
	 */
	private $tank;
	
	/**
	 * @var int
	 * @ORM\Column(name="consumption", type="smallint", nullable=false)
	 */
	private $consumption;
	
	/**
	 * @var int
	 * @ORM\Column(name="class", type="smallint", nullable=false)
	 */
	private $class;
	
	/**
	 * @var int
	 * @ORM\Column(name="fuelable", type="smallint", nullable=false)
	 */
	private $fuelable;
	
	/**
	 * @var int
	 * @ORM\Column(name="fuel_mark", type="smallint", nullable=false)
	 */
	private $fuel_mark;
	
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
	public function getTank() : int
	{
		return $this->tank;
	}
	
	/**
	 * @param int $tank
	 */
	public function setTank(int $tank) : void
	{
		$this->tank = $tank;
	}
	
	/**
	 * @return int
	 */
	public function getConsumption() : int
	{
		return $this->consumption;
	}
	
	/**
	 * @param int $consumption
	 */
	public function setConsumption(int $consumption) : void
	{
		$this->consumption = $consumption;
	}
	
	/**
	 * @return int
	 */
	public function getClass() : int
	{
		return $this->class;
	}
	
	/**
	 * @param int $class
	 */
	public function setClass(int $class) : void
	{
		$this->class = $class;
	}
	
	/**
	 * @return int
	 */
	public function getFuelable() : int
	{
		return $this->fuelable;
	}
	
	/**
	 * @param int $fuelable
	 */
	public function setFuelable(int $fuelable) : void
	{
		$this->fuelable = $fuelable;
	}
	
	/**
	 * @return int
	 */
	public function getFuelMark() : int
	{
		return $this->fuel_mark;
	}
	
	/**
	 * @param int $fuel_mark
	 */
	public function setFuelMark(int $fuel_mark) : void
	{
		$this->fuel_mark = $fuel_mark;
	}
}