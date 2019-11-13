<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerJob
 * @ORM\Table(name="player_job")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerJobRepository")
 */
class PlayerJob
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="job")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="job", type="integer", nullable=false)
	 */
	private $job;
	
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
	public function getJob() : int
	{
		return $this->job;
	}
	
	/**
	 * @param int $job
	 */
	public function setJob(int $job) : void
	{
		$this->job = $job;
	}
}