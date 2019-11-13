<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerParty
 * @ORM\Table(name="player_party")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerPartyRepository")
 */
class PlayerParty
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="party")
	 */
	private $player;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerElectionParty", inversedBy="player")
	 */
	private $party;
	
	/**
	 * @var int
	 * @ORM\Column(name="vote", type="integer", nullable=false)
	 */
	private $vote;
	
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
	 * @return mixed
	 */
	public function getParty()
	{
		return $this->party;
	}
	
	/**
	 * @param mixed $party
	 */
	public function setParty($party) : void
	{
		$this->party = $party;
	}
	
	/**
	 * @return int
	 */
	public function getVote() : int
	{
		return $this->vote;
	}
	
	/**
	 * @param int $vote
	 */
	public function setVote(int $vote) : void
	{
		$this->vote = $vote;
	}
}