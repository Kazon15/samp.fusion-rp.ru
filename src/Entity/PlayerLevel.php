<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerLevel
 * @ORM\Table(name="player_level")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerLevelRepository")
 */
class PlayerLevel
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="level")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="exp", type="integer", nullable=false)
	 */
	private $exp;
	
	/**
	 * @var int
	 * @ORM\Column(name="level", type="integer", nullable=false)
	 */
	private $level;
	
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
	public function getExp() : int
	{
		return $this->exp;
	}
	
	/**
	 * @param int $exp
	 */
	public function setExp(int $exp) : void
	{
		$this->exp = $exp;
	}
	
	/**
	 * @return int
	 */
	public function getLevel() : int
	{
		return $this->level;
	}
	
	/**
	 * @param int $level
	 */
	public function setLevel(int $level) : void
	{
		$this->level = $level;
	}
}