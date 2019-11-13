<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerPhone
 * @ORM\Table(name="player_phone")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerPhoneRepository")
 */
class PlayerPhone
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="phone")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="money", type="integer", nullable=false)
	 */
	private $money;
	
	/**
	 * @var int
	 * @ORM\Column(name="number", type="integer", nullable=false)
	 */
	private $number;
	
	/**
	 * @return int
	 */
	public function getId() : int
	{
		return $this->id;
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
	 * @return int
	 */
	public function getMoney() : int
	{
		return $this->money;
	}
	
	/**
	 * @param int $money
	 */
	public function setMoney(int $money) : void
	{
		$this->money = $money;
	}
	
	/**
	 * @return int
	 */
	public function getNumber() : int
	{
		return $this->number;
	}
	
	/**
	 * @param int $number
	 */
	public function setNumber(int $number) : void
	{
		$this->number = $number;
	}
}