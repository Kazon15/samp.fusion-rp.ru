<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerBusinessJob
 * @ORM\Table(name="server_business_job")
 * @ORM\Entity(repositoryClass="App\Repository\ServerBusinessJobRepository")
 */
class ServerBusinessJob
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerBusiness", inversedBy="job")
	 */
	private $business;
	
	/**
	 * @var int
	 * @ORM\Column(name="salary", type="integer", nullable=false)
	 */
	private $salary;
	
	/**
	 * @var float
	 * @ORM\Column(name="menu_x", type="float", nullable=false)
	 */
	private $menu_x;
	
	/**
	 * @var float
	 * @ORM\Column(name="menu_y", type="float", nullable=false)
	 */
	private $menu_y;
	
	/**
	 * @var float
	 * @ORM\Column(name="menu_z", type="float", nullable=false)
	 */
	private $menu_z;
	
	/**
	 * @return int
	 */
	public function getId() : int
	{
		return $this->id;
	}
	
	/**
	 * @param int $id
	 */
	public function setId(int $id) : void
	{
		$this->id = $id;
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
	public function getSalary() : int
	{
		return $this->salary;
	}
	
	/**
	 * @param int $salary
	 */
	public function setSalary(int $salary) : void
	{
		$this->salary = $salary;
	}
	
	/**
	 * @return float
	 */
	public function getMenuX() : float
	{
		return $this->menu_x;
	}
	
	/**
	 * @param float $menu_x
	 */
	public function setMenuX(float $menu_x) : void
	{
		$this->menu_x = $menu_x;
	}
	
	/**
	 * @return float
	 */
	public function getMenuY() : float
	{
		return $this->menu_y;
	}
	
	/**
	 * @param float $menu_y
	 */
	public function setMenuY(float $menu_y) : void
	{
		$this->menu_y = $menu_y;
	}
	
	/**
	 * @return float
	 */
	public function getMenuZ() : float
	{
		return $this->menu_z;
	}
	
	/**
	 * @param float $menu_z
	 */
	public function setMenuZ(float $menu_z) : void
	{
		$this->menu_z = $menu_z;
	}
}