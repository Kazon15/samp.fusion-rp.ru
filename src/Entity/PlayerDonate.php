<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerDonate
 * @ORM\Table(name="player_donate")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerDonateRepository")
 */
class PlayerDonate
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="donate")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="donate", type="integer", nullable=false, options={"default"="0"})
	 */
	private $donate = 0;
	
	/**
	 * @var int
	 * @ORM\Column(name="donate_all", type="integer", nullable=false, options={"default"="0"})
	 */
	private $donate_all = 0;
	
	/**
	 * @var int
	 * @ORM\Column(name="donate_last", type="integer", nullable=false, options={"default"="0"})
	 */
	private $donate_last = 0;
	
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
	public function getDonate() : int
	{
		return $this->donate;
	}
	
	/**
	 * @param int $donate
	 */
	public function setDonate(int $donate) : void
	{
		$this->donate = $donate;
	}
	
	/**
	 * @return int
	 */
	public function getDonateAll() : int
	{
		return $this->donate_all;
	}
	
	/**
	 * @param int $donate_all
	 */
	public function setDonateAll(int $donate_all) : void
	{
		$this->donate_all = $donate_all;
	}
	
	/**
	 * @return int
	 */
	public function getDonateLast() : int
	{
		return $this->donate_last;
	}
	
	/**
	 * @param int $donate_last
	 */
	public function setDonateLast(int $donate_last) : void
	{
		$this->donate_last = $donate_last;
	}
}