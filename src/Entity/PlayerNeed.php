<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerNeed
 * @ORM\Table(name="player_need")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerNeedRepository")
 */
class PlayerNeed
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="need")
	 */
	private $player;
	
	/**
	 * @var float
	 * @ORM\Column(name="thirsty", type="float", nullable=false)
	 */
	private $thirsty;
	
	/**
	 * @var float
	 * @ORM\Column(name="hungry", type="float", nullable=false)
	 */
	private $hungry;
	
	public function getId() : ?int
	{
		return $this->id;
	}
	
	public function getPlayer() : ?Player
	{
		return $this->player;
	}
	
	public function setPlayer(?Player $player) : self
	{
		$this->player = $player;
		
		return $this;
	}
	
	/**
	 * @return float
	 */
	public function getThirsty() : float
	{
		return $this->thirsty;
	}
	
	/**
	 * @param float $thirsty
	 */
	public function setThirsty(float $thirsty) : void
	{
		$this->thirsty = $thirsty;
	}
	
	/**
	 * @return float
	 */
	public function getHungry() : float
	{
		return $this->hungry;
	}
	
	/**
	 * @param float $hungry
	 */
	public function setHungry(float $hungry) : void
	{
		$this->hungry = $hungry;
	}
}