<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerElection
 * @ORM\Table(name="server_election")
 * @ORM\Entity(repositoryClass="App\Repository\ServerElectionRepository")
 */
class ServerElection
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="smallint", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var int
	 * @ORM\Column(name="time", type="smallint", nullable=false)
	 */
	private $time;
	
	/**
	 * @var int
	 * @ORM\Column(name="vote_level", type="smallint", nullable=false)
	 */
	private $vote_level;
	
	/**
	 * @var bool
	 * @ORM\Column(name="Work", type="boolean", nullable=false)
	 */
	private $work;
	
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
	public function getVoteLevel() : int
	{
		return $this->vote_level;
	}
	
	/**
	 * @param int $vote_level
	 */
	public function setVoteLevel(int $vote_level) : void
	{
		$this->vote_level = $vote_level;
	}
	
	/**
	 * @return bool
	 */
	public function isWork() : bool
	{
		return $this->work;
	}
	
	/**
	 * @param bool $work
	 */
	public function setWork(bool $work) : void
	{
		$this->work = $work;
	}
}