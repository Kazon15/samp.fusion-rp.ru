<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerMoney
 * @ORM\Table(name="player_money")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerMoneyRepository")
 */
class PlayerMoney
{
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="money")
	 */
	private $player;
	
	/**
	 * @var string
	 * @ORM\Column(name="cash", type="integer", nullable=false)
	 */
	private $cash;
	
	/**
	 * @var int
	 * @ORM\Column(name="bank", type="integer", nullable=false)
	 */
	private $bank;
	
	/**
	 * @var int
	 * @ORM\Column(name="salary", type="integer", nullable=false)
	 */
	private $salary;
	
	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}
	
	/**
	 * @param mixed $id
	 */
	public function setId($id) : void
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
	public function getCash() : string
	{
		return $this->cash;
	}
	
	/**
	 * @param string $cash
	 */
	public function setCash(string $cash) : void
	{
		$this->cash = $cash;
	}
	
	/**
	 * @return int
	 */
	public function getBank() : int
	{
		return $this->bank;
	}
	
	/**
	 * @param int $bank
	 */
	public function setBank(int $bank) : void
	{
		$this->bank = $bank;
	}
	
	/**
	 * @return int
	 */
	public function getSalary() : int
	{
		return $this->salary;
	}
	
	/**
	 * @param int $salary
	 */
	public function setSalary(int $salary) : void
	{
		$this->salary = $salary;
	}
}