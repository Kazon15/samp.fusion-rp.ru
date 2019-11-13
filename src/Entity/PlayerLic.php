<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerLic
 * @ORM\Table(name="player_lic")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerLicRepository")
 */
class PlayerLic
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="lic")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="lic_0", type="boolean", nullable=false)
	 */
	private $lic_0;
	
	/**
	 * @var int
	 * @ORM\Column(name="lic_1", type="boolean", nullable=false)
	 */
	private $lic_1;
	
	/**
	 * @var int
	 * @ORM\Column(name="lic_2", type="boolean", nullable=false)
	 */
	private $lic_2;
	
	/**
	 * @var int
	 * @ORM\Column(name="lic_3", type="boolean", nullable=false)
	 */
	private $lic_3;
	
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
	public function getLic0() : int
	{
		return $this->lic_0;
	}
	
	/**
	 * @param int $lic_0
	 */
	public function setLic0(int $lic_0) : void
	{
		$this->lic_0 = $lic_0;
	}
	
	/**
	 * @return int
	 */
	public function getLic1() : int
	{
		return $this->lic_1;
	}
	
	/**
	 * @param int $lic_1
	 */
	public function setLic1(int $lic_1) : void
	{
		$this->lic_1 = $lic_1;
	}
	
	/**
	 * @return int
	 */
	public function getLic2() : int
	{
		return $this->lic_2;
	}
	
	/**
	 * @param int $lic_2
	 */
	public function setLic2(int $lic_2) : void
	{
		$this->lic_2 = $lic_2;
	}
	
	/**
	 * @return int
	 */
	public function getLic3() : int
	{
		return $this->lic_3;
	}
	
	/**
	 * @param int $lic_3
	 */
	public function setLic3(int $lic_3) : void
	{
		$this->lic_3 = $lic_3;
	}
}