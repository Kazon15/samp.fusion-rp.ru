<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerElectionApplicant
 * @ORM\Table(name="server_election_applicant")
 * @ORM\Entity(repositoryClass="App\Repository\ServerElectionApplicantRepository")
 */
class ServerElectionApplicant
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="applicant")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="votes", type="integer", nullable=false)
	 */
	private $votes;
	
	/**
	 * @var int
	 * @ORM\Column(name="party", type="integer", nullable=false)
	 */
	private $party;
	
	/**
	 * @return int
	 */
	public function getId() : int
	{
		return $this->id;
	}
	
	/**
	 * @param int $id
	 */
	public function setId(int $id) : void
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
	 * @return int
	 */
	public function getVotes() : int
	{
		return $this->votes;
	}
	
	/**
	 * @param int $votes
	 */
	public function setVotes(int $votes) : void
	{
		$this->votes = $votes;
	}
	
	/**
	 * @return int
	 */
	public function getParty() : int
	{
		return $this->party;
	}
	
	/**
	 * @param int $party
	 */
	public function setParty(int $party) : void
	{
		$this->party = $party;
	}
}