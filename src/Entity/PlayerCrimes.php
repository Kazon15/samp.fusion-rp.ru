<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerCrimes
 * @ORM\Table(name="player_crimes")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerCrimesRepository")
 */
class PlayerCrimes
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="crimes")
	 */
	private $player;
	
	/**
	 * @var string
	 * @ORM\Column(name="crimes", type="integer", nullable=false, options={"default"="0"})
	 */
	private $crimes = 0;
	
	/**
	 * @var int
	 * @ORM\Column(name="arrests", type="integer", nullable=false, options={"default"="0"})
	 */
	private $arrests = 0;
	
	/**
	 * @var int
	 * @ORM\Column(name="obedience", type="integer", nullable=false, options={"default"="0"})
	 */
	private $obedience = 0;
	
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
	public function getCrimes() : string
	{
		return $this->crimes;
	}
	
	/**
	 * @param string $crimes
	 */
	public function setCrimes(string $crimes) : void
	{
		$this->crimes = $crimes;
	}
	
	/**
	 * @return int
	 */
	public function getArrests() : int
	{
		return $this->arrests;
	}
	
	/**
	 * @param int $arrests
	 */
	public function setArrests(int $arrests) : void
	{
		$this->arrests = $arrests;
	}
	
	/**
	 * @return int
	 */
	public function getObedience() : int
	{
		return $this->obedience;
	}
	
	/**
	 * @param int $obedience
	 */
	public function setObedience(int $obedience) : void
	{
		$this->obedience = $obedience;
	}
}