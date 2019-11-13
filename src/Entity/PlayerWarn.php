<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerWarn
 * @ORM\Table(name="player_warn")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerWarnRepository")
 */
class PlayerWarn
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="warn")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="warn", type="integer", nullable=false)
	 */
	private $warn;
	
	/**
	 * @var int
	 * @ORM\Column(name="mute", type="integer", nullable=false)
	 */
	private $mute;
	
	/**
	 * @var int
	 * @ORM\Column(name="rebuke", type="integer", nullable=false)
	 */
	private $rebuke;
	
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
	public function getWarn() : int
	{
		return $this->warn;
	}
	
	/**
	 * @param int $warn
	 */
	public function setWarn(int $warn) : void
	{
		$this->warn = $warn;
	}
	
	/**
	 * @return int
	 */
	public function getMute() : int
	{
		return $this->mute;
	}
	
	/**
	 * @param int $mute
	 */
	public function setMute(int $mute) : void
	{
		$this->mute = $mute;
	}
	
	/**
	 * @return int
	 */
	public function getRebuke() : int
	{
		return $this->rebuke;
	}
	
	/**
	 * @param int $rebuke
	 */
	public function setRebuke(int $rebuke) : void
	{
		$this->rebuke = $rebuke;
	}
}