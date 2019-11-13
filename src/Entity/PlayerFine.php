<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerFine
 * @ORM\Table(name="player_fine")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerFineRepository")
 */
class PlayerFine
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="fine")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="sum", type="integer", nullable=false)
	 */
	private $sum;
	
	/**
	 * @var int
	 * @ORM\Column(name="type", type="smallint", nullable=false)
	 */
	private $type;
	
	/**
	 * @var string
	 * @ORM\Column(name="date", type="string", length=16, nullable=false)
	 */
	private $date;
	
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
	public function getSum() : int
	{
		return $this->sum;
	}
	
	/**
	 * @param int $sum
	 */
	public function setSum(int $sum) : void
	{
		$this->sum = $sum;
	}
	
	/**
	 * @return int
	 */
	public function getType() : int
	{
		return $this->type;
	}
	
	/**
	 * @param int $type
	 */
	public function setType(int $type) : void
	{
		$this->type = $type;
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
}