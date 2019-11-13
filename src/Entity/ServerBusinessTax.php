<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerBusinessTax
 * @ORM\Table(name="server_business_tax")
 * @ORM\Entity(repositoryClass="App\Repository\ServerBusinessTaxRepository")
 */
class ServerBusinessTax
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
	 * @ORM\Column(name="income", type="smallint", nullable=false)
	 */
	private $income;
	
	/**
	 * @var int
	 * @ORM\Column(name="car_shop", type="integer", nullable=false)
	 */
	private $car_shop;
	
	/**
	 * @var int
	 * @ORM\Column(name="bars", type="integer", nullable=false)
	 */
	private $bars;
	
	/**
	 * @var int
	 * @ORM\Column(name="production", type="integer", nullable=false)
	 */
	private $production;
	
	/**
	 * @var int
	 * @ORM\Column(name="eatery", type="integer", nullable=false)
	 */
	private $eatery;
	
	/**
	 * @var int
	 * @ORM\Column(name="gas_stations", type="integer", nullable=false)
	 */
	private $gas_stations;
	
	/**
	 * @var int
	 * @ORM\Column(name="shops", type="integer", nullable=false)
	 */
	private $shops;
	
	/**
	 * @var int
	 * @ORM\Column(name="clothing", type="integer", nullable=false)
	 */
	private $clothing;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammunition", type="integer", nullable=false)
	 */
	private $ammunition;
	
	/**
	 * @var int
	 * @ORM\Column(name="pizza", type="integer", nullable=false)
	 */
	private $pizza;
	
	/**
	 * @var int
	 * @ORM\Column(name="houses", type="smallint", nullable=false)
	 */
	private $houses;
	
	/**
	 * @var int
	 * @ORM\Column(name="party", type="integer", nullable=false)
	 */
	private $party;
	
	/**
	 * @var int
	 * @ORM\Column(name="business_fine", type="integer", nullable=false)
	 */
	private $business_fine;
	
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
	public function getIncome() : int
	{
		return $this->income;
	}
	
	/**
	 * @param int $income
	 */
	public function setIncome(int $income) : void
	{
		$this->income = $income;
	}
	
	/**
	 * @return int
	 */
	public function getCarShop() : int
	{
		return $this->car_shop;
	}
	
	/**
	 * @param int $car_shop
	 */
	public function setCarShop(int $car_shop) : void
	{
		$this->car_shop = $car_shop;
	}
	
	/**
	 * @return int
	 */
	public function getBars() : int
	{
		return $this->bars;
	}
	
	/**
	 * @param int $bars
	 */
	public function setBars(int $bars) : void
	{
		$this->bars = $bars;
	}
	
	/**
	 * @return int
	 */
	public function getProduction() : int
	{
		return $this->production;
	}
	
	/**
	 * @param int $production
	 */
	public function setProduction(int $production) : void
	{
		$this->production = $production;
	}
	
	/**
	 * @return int
	 */
	public function getEatery() : int
	{
		return $this->eatery;
	}
	
	/**
	 * @param int $eatery
	 */
	public function setEatery(int $eatery) : void
	{
		$this->eatery = $eatery;
	}
	
	/**
	 * @return int
	 */
	public function getGasStations() : int
	{
		return $this->gas_stations;
	}
	
	/**
	 * @param int $gas_stations
	 */
	public function setGasStations(int $gas_stations) : void
	{
		$this->gas_stations = $gas_stations;
	}
	
	/**
	 * @return int
	 */
	public function getShops() : int
	{
		return $this->shops;
	}
	
	/**
	 * @param int $shops
	 */
	public function setShops(int $shops) : void
	{
		$this->shops = $shops;
	}
	
	/**
	 * @return int
	 */
	public function getClothing() : int
	{
		return $this->clothing;
	}
	
	/**
	 * @param int $clothing
	 */
	public function setClothing(int $clothing) : void
	{
		$this->clothing = $clothing;
	}
	
	/**
	 * @return int
	 */
	public function getAmmunition() : int
	{
		return $this->ammunition;
	}
	
	/**
	 * @param int $ammunition
	 */
	public function setAmmunition(int $ammunition) : void
	{
		$this->ammunition = $ammunition;
	}
	
	/**
	 * @return int
	 */
	public function getPizza() : int
	{
		return $this->pizza;
	}
	
	/**
	 * @param int $pizza
	 */
	public function setPizza(int $pizza) : void
	{
		$this->pizza = $pizza;
	}
	
	/**
	 * @return int
	 */
	public function getHouses() : int
	{
		return $this->houses;
	}
	
	/**
	 * @param int $houses
	 */
	public function setHouses(int $houses) : void
	{
		$this->houses = $houses;
	}
	
	/**
	 * @return int
	 */
	public function getParty() : int
	{
		return $this->party;
	}
	
	/**
	 * @param int $party
	 */
	public function setParty(int $party) : void
	{
		$this->party = $party;
	}
	
	/**
	 * @return int
	 */
	public function getBusinessFine() : int
	{
		return $this->business_fine;
	}
	
	/**
	 * @param int $business_fine
	 */
	public function setBusinessFine(int $business_fine) : void
	{
		$this->business_fine = $business_fine;
	}
}