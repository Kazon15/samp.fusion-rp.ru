<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerBan
 * @ORM\Table(name="player_ban")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerBanRepository")
 */
class PlayerBan
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
	 * @ORM\Column(name="who_banned", type="string", length=32, nullable=false)
	 */
	private $who_banned;
	
	/**
	 * @var string
	 * @ORM\Column(name="ip", type="string", length=16, nullable=false)
	 */
	private $ip;
	
	/**
	 * @var string
	 * @ORM\Column(name="ban_date", type="string", length=16, nullable=false)
	 */
	private $ban_date;
	
	/**
	 * @var int
	 * @ORM\Column(name="time", type="integer", nullable=false)
	 */
	private $time;
	
	/**
	 * @var int
	 * @ORM\Column(name="unban_date", type="integer", nullable=false)
	 */
	private $unban_date;
	
	/**
	 * @var string
	 * @ORM\Column(name="reason", type="string", length=32, nullable=false)
	 */
	private $reason;
	
	/**
	 * @return int
	 */
	public function getId() : int
	{
		return $this->id;
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
	public function getWhoBanned() : string
	{
		return $this->who_banned;
	}
	
	/**
	 * @param string $who_banned
	 */
	public function setWhoBanned(string $who_banned) : void
	{
		$this->who_banned = $who_banned;
	}
	
	/**
	 * @return string
	 */
	public function getIp() : string
	{
		return $this->ip;
	}
	
	/**
	 * @param string $ip
	 */
	public function setIp(string $ip) : void
	{
		$this->ip = $ip;
	}
	
	/**
	 * @return string
	 */
	public function getBanDate() : string
	{
		return $this->ban_date;
	}
	
	/**
	 * @param string $ban_date
	 */
	public function setBanDate(string $ban_date) : void
	{
		$this->ban_date = $ban_date;
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
	public function getUnbanDate() : int
	{
		return $this->unban_date;
	}
	
	/**
	 * @param int $unban_date
	 */
	public function setUnbanDate(int $unban_date) : void
	{
		$this->unban_date = $unban_date;
	}
	
	/**
	 * @return string
	 */
	public function getReason() : string
	{
		return $this->reason;
	}
	
	/**
	 * @param string $reason
	 */
	public function setReason(string $reason) : void
	{
		$this->reason = $reason;
	}
}