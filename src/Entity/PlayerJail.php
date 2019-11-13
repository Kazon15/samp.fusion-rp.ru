<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerJail
 * @ORM\Table(name="player_jail")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerJailRepository")
 */
class PlayerJail
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="jail")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="jail", type="integer", nullable=false)
	 */
	private $jail;
	
	/**
	 * @var int
	 * @ORM\Column(name="time", type="integer", nullable=false)
	 */
	private $time;
	
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
	public function getJail() : int
	{
		return $this->jail;
	}
	
	/**
	 * @param int $jail
	 */
	public function setJail(int $jail) : void
	{
		$this->jail = $jail;
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
}