<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerQuest
 * @ORM\Table(name="player_quest")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerQuestRepository")
 */
class PlayerQuest
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="quest")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_0", type="boolean", nullable=false)
	 */
	private $status_0;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_0", type="integer", nullable=false)
	 */
	private $money_0;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_1", type="boolean", nullable=false)
	 */
	private $status_1;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_1", type="integer", nullable=false)
	 */
	private $money_1;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_2", type="boolean", nullable=false)
	 */
	private $status_2;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_2", type="integer", nullable=false)
	 */
	private $money_2;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_3", type="boolean", nullable=false)
	 */
	private $status_3;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_3", type="integer", nullable=false)
	 */
	private $money_3;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_4", type="boolean", nullable=false)
	 */
	private $status_4;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_4", type="integer", nullable=false)
	 */
	private $money_4;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_5", type="boolean", nullable=false)
	 */
	private $status_5;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_5", type="integer", nullable=false)
	 */
	private $money_5;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_6", type="boolean", nullable=false)
	 */
	private $status_6;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_6", type="integer", nullable=false)
	 */
	private $money_6;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_7", type="boolean", nullable=false)
	 */
	private $status_7;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_7", type="integer", nullable=false)
	 */
	private $money_7;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_8", type="boolean", nullable=false)
	 */
	private $status_8;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_8", type="integer", nullable=false)
	 */
	private $money_8;
	
	/**
	 * @var int
	 * @ORM\Column(name="status_9", type="boolean", nullable=false)
	 */
	private $status_9;
	
	/**
	 * @var int
	 * @ORM\Column(name="money_9", type="integer", nullable=false)
	 */
	private $money_9;
	
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
	public function getStatus0() : int
	{
		return $this->status_0;
	}
	
	/**
	 * @param int $status_0
	 */
	public function setStatus0(int $status_0) : void
	{
		$this->status_0 = $status_0;
	}
	
	/**
	 * @return int
	 */
	public function getMoney0() : int
	{
		return $this->money_0;
	}
	
	/**
	 * @param int $money_0
	 */
	public function setMoney0(int $money_0) : void
	{
		$this->money_0 = $money_0;
	}
	
	/**
	 * @return int
	 */
	public function getStatus1() : int
	{
		return $this->status_1;
	}
	
	/**
	 * @param int $status_1
	 */
	public function setStatus1(int $status_1) : void
	{
		$this->status_1 = $status_1;
	}
	
	/**
	 * @return int
	 */
	public function getMoney1() : int
	{
		return $this->money_1;
	}
	
	/**
	 * @param int $money_1
	 */
	public function setMoney1(int $money_1) : void
	{
		$this->money_1 = $money_1;
	}
	
	/**
	 * @return int
	 */
	public function getStatus2() : int
	{
		return $this->status_2;
	}
	
	/**
	 * @param int $status_2
	 */
	public function setStatus2(int $status_2) : void
	{
		$this->status_2 = $status_2;
	}
	
	/**
	 * @return int
	 */
	public function getMoney2() : int
	{
		return $this->money_2;
	}
	
	/**
	 * @param int $money_2
	 */
	public function setMoney2(int $money_2) : void
	{
		$this->money_2 = $money_2;
	}
	
	/**
	 * @return int
	 */
	public function getStatus3() : int
	{
		return $this->status_3;
	}
	
	/**
	 * @param int $status_3
	 */
	public function setStatus3(int $status_3) : void
	{
		$this->status_3 = $status_3;
	}
	
	/**
	 * @return int
	 */
	public function getMoney3() : int
	{
		return $this->money_3;
	}
	
	/**
	 * @param int $money_3
	 */
	public function setMoney3(int $money_3) : void
	{
		$this->money_3 = $money_3;
	}
	
	/**
	 * @return int
	 */
	public function getStatus4() : int
	{
		return $this->status_4;
	}
	
	/**
	 * @param int $status_4
	 */
	public function setStatus4(int $status_4) : void
	{
		$this->status_4 = $status_4;
	}
	
	/**
	 * @return int
	 */
	public function getMoney4() : int
	{
		return $this->money_4;
	}
	
	/**
	 * @param int $money_4
	 */
	public function setMoney4(int $money_4) : void
	{
		$this->money_4 = $money_4;
	}
	
	/**
	 * @return int
	 */
	public function getStatus5() : int
	{
		return $this->status_5;
	}
	
	/**
	 * @param int $status_5
	 */
	public function setStatus5(int $status_5) : void
	{
		$this->status_5 = $status_5;
	}
	
	/**
	 * @return int
	 */
	public function getMoney5() : int
	{
		return $this->money_5;
	}
	
	/**
	 * @param int $money_5
	 */
	public function setMoney5(int $money_5) : void
	{
		$this->money_5 = $money_5;
	}
	
	/**
	 * @return int
	 */
	public function getStatus6() : int
	{
		return $this->status_6;
	}
	
	/**
	 * @param int $status_6
	 */
	public function setStatus6(int $status_6) : void
	{
		$this->status_6 = $status_6;
	}
	
	/**
	 * @return int
	 */
	public function getMoney6() : int
	{
		return $this->money_6;
	}
	
	/**
	 * @param int $money_6
	 */
	public function setMoney6(int $money_6) : void
	{
		$this->money_6 = $money_6;
	}
	
	/**
	 * @return int
	 */
	public function getStatus7() : int
	{
		return $this->status_7;
	}
	
	/**
	 * @param int $status_7
	 */
	public function setStatus7(int $status_7) : void
	{
		$this->status_7 = $status_7;
	}
	
	/**
	 * @return int
	 */
	public function getMoney7() : int
	{
		return $this->money_7;
	}
	
	/**
	 * @param int $money_7
	 */
	public function setMoney7(int $money_7) : void
	{
		$this->money_7 = $money_7;
	}
	
	/**
	 * @return int
	 */
	public function getStatus8() : int
	{
		return $this->status_8;
	}
	
	/**
	 * @param int $status_8
	 */
	public function setStatus8(int $status_8) : void
	{
		$this->status_8 = $status_8;
	}
	
	/**
	 * @return int
	 */
	public function getMoney8() : int
	{
		return $this->money_8;
	}
	
	/**
	 * @param int $money_8
	 */
	public function setMoney8(int $money_8) : void
	{
		$this->money_8 = $money_8;
	}
	
	/**
	 * @return int
	 */
	public function getStatus9() : int
	{
		return $this->status_9;
	}
	
	/**
	 * @param int $status_9
	 */
	public function setStatus9(int $status_9) : void
	{
		$this->status_9 = $status_9;
	}
	
	/**
	 * @return int
	 */
	public function getMoney9() : int
	{
		return $this->money_9;
	}
	
	/**
	 * @param int $money_9
	 */
	public function setMoney9(int $money_9) : void
	{
		$this->money_9 = $money_9;
	}
}