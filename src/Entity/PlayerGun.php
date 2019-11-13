<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerGun
 * @ORM\Table(name="player_gun")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerGunRepository")
 */
class PlayerGun
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="gun")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_0", type="integer", nullable=false)
	 */
	private $gun_0;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_0", type="integer", nullable=false)
	 */
	private $ammo_0;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_1", type="integer", nullable=false)
	 */
	private $gun_1;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_1", type="integer", nullable=false)
	 */
	private $ammo_1;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_2", type="integer", nullable=false)
	 */
	private $gun_2;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_2", type="integer", nullable=false)
	 */
	private $ammo_2;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_3", type="integer", nullable=false)
	 */
	private $gun_3;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_3", type="integer", nullable=false)
	 */
	private $ammo_3;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_4", type="integer", nullable=false)
	 */
	private $gun_4;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_4", type="integer", nullable=false)
	 */
	private $ammo_4;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_5", type="integer", nullable=false)
	 */
	private $gun_5;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_5", type="integer", nullable=false)
	 */
	private $ammo_5;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_6", type="integer", nullable=false)
	 */
	private $gun_6;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_6", type="integer", nullable=false)
	 */
	private $ammo_6;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_7", type="integer", nullable=false)
	 */
	private $gun_7;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_7", type="integer", nullable=false)
	 */
	private $ammo_7;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_8", type="integer", nullable=false)
	 */
	private $gun_8;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_8", type="integer", nullable=false)
	 */
	private $ammo_8;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_9", type="integer", nullable=false)
	 */
	private $gun_9;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_9", type="integer", nullable=false)
	 */
	private $ammo_9;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_10", type="integer", nullable=false)
	 */
	private $gun_10;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_10", type="integer", nullable=false)
	 */
	private $ammo_10;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_11", type="integer", nullable=false)
	 */
	private $gun_11;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_11", type="integer", nullable=false)
	 */
	private $ammo_11;
	
	/**
	 * @var int
	 * @ORM\Column(name="gun_12", type="integer", nullable=false)
	 */
	private $gun_12;
	
	/**
	 * @var int
	 * @ORM\Column(name="ammo_12", type="integer", nullable=false)
	 */
	private $ammo_12;
	
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
	public function getGun0() : int
	{
		return $this->gun_0;
	}
	
	/**
	 * @param int $gun_0
	 */
	public function setGun0(int $gun_0) : void
	{
		$this->gun_0 = $gun_0;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo0() : int
	{
		return $this->ammo_0;
	}
	
	/**
	 * @param int $ammo_0
	 */
	public function setAmmo0(int $ammo_0) : void
	{
		$this->ammo_0 = $ammo_0;
	}
	
	/**
	 * @return int
	 */
	public function getGun1() : int
	{
		return $this->gun_1;
	}
	
	/**
	 * @param int $gun_1
	 */
	public function setGun1(int $gun_1) : void
	{
		$this->gun_1 = $gun_1;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo1() : int
	{
		return $this->ammo_1;
	}
	
	/**
	 * @param int $ammo_1
	 */
	public function setAmmo1(int $ammo_1) : void
	{
		$this->ammo_1 = $ammo_1;
	}
	
	/**
	 * @return int
	 */
	public function getGun2() : int
	{
		return $this->gun_2;
	}
	
	/**
	 * @param int $gun_2
	 */
	public function setGun2(int $gun_2) : void
	{
		$this->gun_2 = $gun_2;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo2() : int
	{
		return $this->ammo_2;
	}
	
	/**
	 * @param int $ammo_2
	 */
	public function setAmmo2(int $ammo_2) : void
	{
		$this->ammo_2 = $ammo_2;
	}
	
	/**
	 * @return int
	 */
	public function getGun3() : int
	{
		return $this->gun_3;
	}
	
	/**
	 * @param int $gun_3
	 */
	public function setGun3(int $gun_3) : void
	{
		$this->gun_3 = $gun_3;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo3() : int
	{
		return $this->ammo_3;
	}
	
	/**
	 * @param int $ammo_3
	 */
	public function setAmmo3(int $ammo_3) : void
	{
		$this->ammo_3 = $ammo_3;
	}
	
	/**
	 * @return int
	 */
	public function getGun4() : int
	{
		return $this->gun_4;
	}
	
	/**
	 * @param int $gun_4
	 */
	public function setGun4(int $gun_4) : void
	{
		$this->gun_4 = $gun_4;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo4() : int
	{
		return $this->ammo_4;
	}
	
	/**
	 * @param int $ammo_4
	 */
	public function setAmmo4(int $ammo_4) : void
	{
		$this->ammo_4 = $ammo_4;
	}
	
	/**
	 * @return int
	 */
	public function getGun5() : int
	{
		return $this->gun_5;
	}
	
	/**
	 * @param int $gun_5
	 */
	public function setGun5(int $gun_5) : void
	{
		$this->gun_5 = $gun_5;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo5() : int
	{
		return $this->ammo_5;
	}
	
	/**
	 * @param int $ammo_5
	 */
	public function setAmmo5(int $ammo_5) : void
	{
		$this->ammo_5 = $ammo_5;
	}
	
	/**
	 * @return int
	 */
	public function getGun6() : int
	{
		return $this->gun_6;
	}
	
	/**
	 * @param int $gun_6
	 */
	public function setGun6(int $gun_6) : void
	{
		$this->gun_6 = $gun_6;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo6() : int
	{
		return $this->ammo_6;
	}
	
	/**
	 * @param int $ammo_6
	 */
	public function setAmmo6(int $ammo_6) : void
	{
		$this->ammo_6 = $ammo_6;
	}
	
	/**
	 * @return int
	 */
	public function getGun7() : int
	{
		return $this->gun_7;
	}
	
	/**
	 * @param int $gun_7
	 */
	public function setGun7(int $gun_7) : void
	{
		$this->gun_7 = $gun_7;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo7() : int
	{
		return $this->ammo_7;
	}
	
	/**
	 * @param int $ammo_7
	 */
	public function setAmmo7(int $ammo_7) : void
	{
		$this->ammo_7 = $ammo_7;
	}
	
	/**
	 * @return int
	 */
	public function getGun8() : int
	{
		return $this->gun_8;
	}
	
	/**
	 * @param int $gun_8
	 */
	public function setGun8(int $gun_8) : void
	{
		$this->gun_8 = $gun_8;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo8() : int
	{
		return $this->ammo_8;
	}
	
	/**
	 * @param int $ammo_8
	 */
	public function setAmmo8(int $ammo_8) : void
	{
		$this->ammo_8 = $ammo_8;
	}
	
	/**
	 * @return int
	 */
	public function getGun9() : int
	{
		return $this->gun_9;
	}
	
	/**
	 * @param int $gun_9
	 */
	public function setGun9(int $gun_9) : void
	{
		$this->gun_9 = $gun_9;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo9() : int
	{
		return $this->ammo_9;
	}
	
	/**
	 * @param int $ammo_9
	 */
	public function setAmmo9(int $ammo_9) : void
	{
		$this->ammo_9 = $ammo_9;
	}
	
	/**
	 * @return int
	 */
	public function getGun10() : int
	{
		return $this->gun_10;
	}
	
	/**
	 * @param int $gun_10
	 */
	public function setGun10(int $gun_10) : void
	{
		$this->gun_10 = $gun_10;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo10() : int
	{
		return $this->ammo_10;
	}
	
	/**
	 * @param int $ammo_10
	 */
	public function setAmmo10(int $ammo_10) : void
	{
		$this->ammo_10 = $ammo_10;
	}
	
	/**
	 * @return int
	 */
	public function getGun11() : int
	{
		return $this->gun_11;
	}
	
	/**
	 * @param int $gun_11
	 */
	public function setGun11(int $gun_11) : void
	{
		$this->gun_11 = $gun_11;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo11() : int
	{
		return $this->ammo_11;
	}
	
	/**
	 * @param int $ammo_11
	 */
	public function setAmmo11(int $ammo_11) : void
	{
		$this->ammo_11 = $ammo_11;
	}
	
	/**
	 * @return int
	 */
	public function getGun12() : int
	{
		return $this->gun_12;
	}
	
	/**
	 * @param int $gun_12
	 */
	public function setGun12(int $gun_12) : void
	{
		$this->gun_12 = $gun_12;
	}
	
	/**
	 * @return int
	 */
	public function getAmmo12() : int
	{
		return $this->ammo_12;
	}
	
	/**
	 * @param int $ammo_12
	 */
	public function setAmmo12(int $ammo_12) : void
	{
		$this->ammo_12 = $ammo_12;
	}
}