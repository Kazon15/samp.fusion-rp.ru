<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerBusinessGasstation
 * @ORM\Table(name="server_business_gasstation")
 * @ORM\Entity(repositoryClass="App\Repository\ServerBusinessGasstationRepository")
 */
class ServerBusinessGasstation
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerBusiness", inversedBy="gasstation")
	 */
	private $business;
	
	/**
	 * @var int
	 * @ORM\Column(name="type", type="smallint", nullable=false)
	 */
	private $type;
	
	/**
	 * @var int
	 * @ORM\Column(name="upgrade", type="smallint", nullable=false)
	 */
	private $upgrade;
	
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
	 * @return int
	 */
	public function getId() : int
	{
		return $this->id;
	}
	
	/**
	 * @return mixed
	 */
	public function getBusiness()
	{
		return $this->business;
	}
	
	/**
	 * @param mixed $business
	 */
	public function setBusiness($business) : void
	{
		$this->business = $business;
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
	 * @return int
	 */
	public function getUpgrade() : int
	{
		return $this->upgrade;
	}
	
	/**
	 * @param int $upgrade
	 */
	public function setUpgrade(int $upgrade) : void
	{
		$this->upgrade = $upgrade;
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
}