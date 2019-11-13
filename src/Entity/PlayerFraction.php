<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerFraction
 * @ORM\Table(name="player_fraction")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerFractionRepository")
 */
class PlayerFraction
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="fraction")
	 */
	private $player;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerFractionRang", inversedBy="players")
	 */
	private $rang;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerFraction", inversedBy="players")
	 */
	private $fraction;
	
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
	 * @return mixed
	 */
	public function getRang()
	{
		return $this->rang;
	}
	
	/**
	 * @param mixed $rang
	 */
	public function setRang($rang) : void
	{
		$this->rang = $rang;
	}
	
	/**
	 * @return mixed
	 */
	public function getFraction()
	{
		return $this->fraction;
	}
	
	/**
	 * @param mixed $fraction
	 */
	public function setFraction($fraction) : void
	{
		$this->fraction = $fraction;
	}
}