<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerBusinessStatistic
 * @ORM\Table(name="server_business_statistic")
 * @ORM\Entity(repositoryClass="App\Repository\ServerBusinessStatisticRepository")
 */
class ServerBusinessStatistic
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerBusiness", inversedBy="statistic")
	 */
	private $business;
	
	/**
	 * @var string
	 * @ORM\Column(name="date", type="string", length=16, nullable=false)
	 */
	private $date;
	
	/**
	 * @var int
	 * @ORM\Column(name="cash", type="integer", nullable=false)
	 */
	private $cash;
	
	/**
	 * @var int
	 * @ORM\Column(name="consumption", type="integer", nullable=false)
	 */
	private $consumption;
	
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
	 * @return string
	 */
	public function getDate() : string
	{
		return $this->date;
	}
	
	/**
	 * @param string $date
	 */
	public function setDate(string $date) : void
	{
		$this->date = $date;
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
}