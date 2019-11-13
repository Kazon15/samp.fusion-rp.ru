<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerSkin
 * @ORM\Table(name="server_skin")
 * @ORM\Entity(repositoryClass="App\Repository\ServerSkinRepository")
 */
class ServerSkin
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var int
	 * @ORM\Column(name="skin", type="integer", nullable=false)
	 */
	private $skin;
	
	/**
	 * @var int
	 * @ORM\Column(name="sex", type="boolean", nullable=false)
	 */
	private $sex;
	
	/**
	 * @var int
	 * @ORM\Column(name="type", type="integer", nullable=false)
	 */
	private $type;
	
	/**
	 * @var string
	 * @ORM\Column(name="animlib", type="string", nullable=false)
	 */
	private $animlib;
	
	/**
	 * @var string
	 * @ORM\Column(name="animname", type="string", nullable=false)
	 */
	private $animname;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_x", type="float", nullable=false)
	 */
	private $pos_x;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_y", type="float", nullable=false)
	 */
	private $pos_y;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_z", type="float", nullable=false)
	 */
	private $pos_z;
	
	/**
	 * @var float
	 * @ORM\Column(name="pos_fa", type="float", nullable=false)
	 */
	private $pos_fa;
	
	/**
	 * @var float
	 * @ORM\Column(name="cam_pos_x", type="float", nullable=false)
	 */
	private $cam_pos_x;
	
	/**
	 * @var float
	 * @ORM\Column(name="cam_pos_y", type="float", nullable=false)
	 */
	private $cam_pos_y;
	
	/**
	 * @var float
	 * @ORM\Column(name="cam_pos_z", type="float", nullable=false)
	 */
	private $cam_pos_z;
	
	public function getId() : ?int
	{
		return $this->id;
	}
	
	/**
	 * @return int
	 */
	public function getSkin() : int
	{
		return $this->skin;
	}
	
	/**
	 * @param int $skin
	 */
	public function setSkin(int $skin) : void
	{
		$this->skin = $skin;
	}
	
	/**
	 * @return int
	 */
	public function getSex() : int
	{
		return $this->sex;
	}
	
	/**
	 * @param int $sex
	 */
	public function setSex(int $sex) : void
	{
		$this->sex = $sex;
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
	public function getAnimlib() : string
	{
		return $this->animlib;
	}
	
	/**
	 * @param string $animlib
	 */
	public function setAnimlib(string $animlib) : void
	{
		$this->animlib = $animlib;
	}
	
	/**
	 * @return string
	 */
	public function getAnimname() : string
	{
		return $this->animname;
	}
	
	/**
	 * @param string $animname
	 */
	public function setAnimname(string $animname) : void
	{
		$this->animname = $animname;
	}
	
	/**
	 * @return float
	 */
	public function getPosX() : float
	{
		return $this->pos_x;
	}
	
	/**
	 * @param float $pos_x
	 */
	public function setPosX(float $pos_x) : void
	{
		$this->pos_x = $pos_x;
	}
	
	/**
	 * @return float
	 */
	public function getPosY() : float
	{
		return $this->pos_y;
	}
	
	/**
	 * @param float $pos_y
	 */
	public function setPosY(float $pos_y) : void
	{
		$this->pos_y = $pos_y;
	}
	
	/**
	 * @return float
	 */
	public function getPosZ() : float
	{
		return $this->pos_z;
	}
	
	/**
	 * @param float $pos_z
	 */
	public function setPosZ(float $pos_z) : void
	{
		$this->pos_z = $pos_z;
	}
	
	/**
	 * @return float
	 */
	public function getPosFa() : float
	{
		return $this->pos_fa;
	}
	
	/**
	 * @param float $pos_fa
	 */
	public function setPosFa(float $pos_fa) : void
	{
		$this->pos_fa = $pos_fa;
	}
	
	/**
	 * @return float
	 */
	public function getCamPosX() : float
	{
		return $this->cam_pos_x;
	}
	
	/**
	 * @param float $cam_pos_x
	 */
	public function setCamPosX(float $cam_pos_x) : void
	{
		$this->cam_pos_x = $cam_pos_x;
	}
	
	/**
	 * @return float
	 */
	public function getCamPosY() : float
	{
		return $this->cam_pos_y;
	}
	
	/**
	 * @param float $cam_pos_y
	 */
	public function setCamPosY(float $cam_pos_y) : void
	{
		$this->cam_pos_y = $cam_pos_y;
	}
	
	/**
	 * @return float
	 */
	public function getCamPosZ() : float
	{
		return $this->cam_pos_z;
	}
	
	/**
	 * @param float $cam_pos_z
	 */
	public function setCamPosZ(float $cam_pos_z) : void
	{
		$this->cam_pos_z = $cam_pos_z;
	}
}