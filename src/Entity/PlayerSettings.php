<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerSettings
 * @ORM\Table(name="player_settings")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerSettingsRepository")
 */
class PlayerSettings
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="settings")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="spawn", type="integer", nullable=false)
	 */
	private $spawn;
	
	/**
	 * @var int
	 * @ORM\Column(name="admin_mes", type="boolean", nullable=false)
	 */
	private $admin_mes;
	
	/**
	 * @var int
	 * @ORM\Column(name="name", type="boolean", nullable=false)
	 */
	private $name;
	
	/**
	 * @var int
	 * @ORM\Column(name="frac_mes", type="boolean", nullable=false)
	 */
	private $frac_mes;
	
	/**
	 * @var int
	 * @ORM\Column(name="need", type="boolean", nullable=false)
	 */
	private $need;
	
	/**
	 * @var int
	 * @ORM\Column(name="rang", type="boolean", nullable=false)
	 */
	private $rang;
	
	/**
	 * @var int
	 * @ORM\Column(name="protect_key", type="boolean", nullable=false)
	 */
	private $protect_key;
	
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
	public function getSpawn() : int
	{
		return $this->spawn;
	}
	
	/**
	 * @param int $spawn
	 */
	public function setSpawn(int $spawn) : void
	{
		$this->spawn = $spawn;
	}
	
	/**
	 * @return int
	 */
	public function getAdminMes() : int
	{
		return $this->admin_mes;
	}
	
	/**
	 * @param int $admin_mes
	 */
	public function setAdminMes(int $admin_mes) : void
	{
		$this->admin_mes = $admin_mes;
	}
	
	/**
	 * @return int
	 */
	public function getName() : int
	{
		return $this->name;
	}
	
	/**
	 * @param int $name
	 */
	public function setName(int $name) : void
	{
		$this->name = $name;
	}
	
	/**
	 * @return int
	 */
	public function getFracMes() : int
	{
		return $this->frac_mes;
	}
	
	/**
	 * @param int $frac_mes
	 */
	public function setFracMes(int $frac_mes) : void
	{
		$this->frac_mes = $frac_mes;
	}
	
	/**
	 * @return int
	 */
	public function getNeed() : int
	{
		return $this->need;
	}
	
	/**
	 * @param int $need
	 */
	public function setNeed(int $need) : void
	{
		$this->need = $need;
	}
	
	/**
	 * @return int
	 */
	public function getRang() : int
	{
		return $this->rang;
	}
	
	/**
	 * @param int $rang
	 */
	public function setRang(int $rang) : void
	{
		$this->rang = $rang;
	}
	
	/**
	 * @return int
	 */
	public function getProtectKey() : int
	{
		return $this->protect_key;
	}
	
	/**
	 * @param int $protect_key
	 */
	public function setProtectKey(int $protect_key) : void
	{
		$this->protect_key = $protect_key;
	}
}