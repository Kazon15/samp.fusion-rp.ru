<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerWanted
 * @ORM\Table(name="player_wanted")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerWantedRepository")
 */
class PlayerWanted
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="wanted")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="wanted", type="boolean", nullable=false)
	 */
	private $wanted;
	
	/**
	 * @var int
	 * @ORM\Column(name="time", type="integer", nullable=false)
	 */
	private $time;
	
	/**
	 * @var int
	 * @ORM\Column(name="who", type="string", nullable=false, options={"default"="none"})
	 */
	private $who = 'none';
	
	/**
	 * @var int
	 * @ORM\Column(name="reason", type="string", nullable=false, options={"default"="none"})
	 */
	private $reason = 'none';
	
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
	public function getWanted() : int
	{
		return $this->wanted;
	}
	
	/**
	 * @param int $wanted
	 */
	public function setWanted(int $wanted) : void
	{
		$this->wanted = $wanted;
	}
	
	/**
	 * @return int
	 */
	public function getTime() : int
	{
		return $this->time;
	}
	
	/**
	 * @param int $time
	 */
	public function setTime(int $time) : void
	{
		$this->time = $time;
	}
	
	/**
	 * @return int
	 */
	public function getWho() : int
	{
		return $this->who;
	}
	
	/**
	 * @param int $who
	 */
	public function setWho(int $who) : void
	{
		$this->who = $who;
	}
	
	/**
	 * @return int
	 */
	public function getReason() : int
	{
		return $this->reason;
	}
	
	/**
	 * @param int $reason
	 */
	public function setReason(int $reason) : void
	{
		$this->reason = $reason;
	}
}