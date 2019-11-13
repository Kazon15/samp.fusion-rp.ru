<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerAdmin
 * @ORM\Table(name="player_admin")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerAdminRepository")
 */
class PlayerAdmin
{
	/**
	 * @ORM\Id()
	 * @ORM\GeneratedValue()
	 * @ORM\Column(type="integer")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="admin")
	 */
	private $player;
	
	/**
	 * @var string
	 * @ORM\Column(name="password", type="string", nullable=false, options={"default"="qwerty"})
	 */
	private $password = 'qwerty';
	
	/**
	 * @var int
	 * @ORM\Column(name="level", type="integer", nullable=false, options={"default"="1"})
	 */
	private $level = 1;
	
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
	 * @return string
	 */
	public function getPassword() : string
	{
		return $this->password;
	}
	
	/**
	 * @param string $password
	 */
	public function setPassword(string $password) : void
	{
		$this->password = $password;
	}
	
	/**
	 * @return int
	 */
	public function getLevel() : int
	{
		return $this->level;
	}
	
	/**
	 * @param int $level
	 */
	public function setLevel(int $level) : void
	{
		$this->level = $level;
	}
}