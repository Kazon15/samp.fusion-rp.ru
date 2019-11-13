<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerElectionParty
 * @ORM\Table(name="server_election_party")
 * @ORM\Entity(repositoryClass="App\Repository\ServerElectionPartyRepository")
 */
class ServerElectionParty
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var string
	 * @ORM\Column(name="name", type="string", length=32, nullable=false)
	 */
	private $name;
	
	/**
	 * @var string
	 * @ORM\Column(name="abbreviation", type="string", length=16, nullable=false)
	 */
	private $abbreviation;
	
	/**
	 * @var string
	 * @ORM\Column(name="date", type="string", length=16, nullable=false)
	 */
	private $date;
	
	/**
	 * @var string
	 * @ORM\Column(name="founder", type="string", length=24, nullable=false)
	 */
	private $founder;
	
	/**
	 * @var string
	 * @ORM\Column(name="leader", type="string", length=24, nullable=false)
	 */
	private $leader;
	
	/**
	 * @var string
	 * @ORM\Column(name="candidate", type="string", length=24, nullable=false)
	 */
	private $candidate;
	
	/**
	 * @var int
	 * @ORM\Column(name="cash", type="integer", nullable=false)
	 */
	private $cash;
	
	/**
	 * @var int
	 * @ORM\Column(name="victory", type="smallint", nullable=false)
	 */
	private $victory;
	
	/**
	 * @var int
	 * @ORM\Column(name="participation", type="smallint", nullable=false)
	 */
	private $participation;
	
	/**
	 * @var string
	 * @ORM\Column(name="description", type="string", length=128, nullable=false)
	 */
	private $description;
	
	/**
	 * @var int
	 * @ORM\Column(name="Color", type="smallint", nullable=false)
	 */
	private $color;
	
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
	 * @return string
	 */
	public function getName() : string
	{
		return $this->name;
	}
	
	/**
	 * @param string $name
	 */
	public function setName(string $name) : void
	{
		$this->name = $name;
	}
	
	/**
	 * @return string
	 */
	public function getAbbreviation() : string
	{
		return $this->abbreviation;
	}
	
	/**
	 * @param string $abbreviation
	 */
	public function setAbbreviation(string $abbreviation) : void
	{
		$this->abbreviation = $abbreviation;
	}
	
	/**
	 * @return string
	 */
	public function getDate() : string
	{
		return $this->date;
	}
	
	/**
	 * @param string $date
	 */
	public function setDate(string $date) : void
	{
		$this->date = $date;
	}
	
	/**
	 * @return string
	 */
	public function getFounder() : string
	{
		return $this->founder;
	}
	
	/**
	 * @param string $founder
	 */
	public function setFounder(string $founder) : void
	{
		$this->founder = $founder;
	}
	
	/**
	 * @return string
	 */
	public function getLeader() : string
	{
		return $this->leader;
	}
	
	/**
	 * @param string $leader
	 */
	public function setLeader(string $leader) : void
	{
		$this->leader = $leader;
	}
	
	/**
	 * @return string
	 */
	public function getCandidate() : string
	{
		return $this->candidate;
	}
	
	/**
	 * @param string $candidate
	 */
	public function setCandidate(string $candidate) : void
	{
		$this->candidate = $candidate;
	}
	
	/**
	 * @return int
	 */
	public function getCash() : int
	{
		return $this->cash;
	}
	
	/**
	 * @param int $cash
	 */
	public function setCash(int $cash) : void
	{
		$this->cash = $cash;
	}
	
	/**
	 * @return int
	 */
	public function getVictory() : int
	{
		return $this->victory;
	}
	
	/**
	 * @param int $victory
	 */
	public function setVictory(int $victory) : void
	{
		$this->victory = $victory;
	}
	
	/**
	 * @return int
	 */
	public function getParticipation() : int
	{
		return $this->participation;
	}
	
	/**
	 * @param int $participation
	 */
	public function setParticipation(int $participation) : void
	{
		$this->participation = $participation;
	}
	
	/**
	 * @return string
	 */
	public function getDescription() : string
	{
		return $this->description;
	}
	
	/**
	 * @param string $description
	 */
	public function setDescription(string $description) : void
	{
		$this->description = $description;
	}
	
	/**
	 * @return int
	 */
	public function getColor() : int
	{
		return $this->color;
	}
	
	/**
	 * @param int $color
	 */
	public function setColor(int $color) : void
	{
		$this->color = $color;
	}
}