<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ServerFractionRang
 * @ORM\Table(name="server_fraction_rang")
 * @ORM\Entity(repositoryClass="App\Repository\ServerFractionRangRepository")
 */
class ServerFractionRang
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="App\Entity\ServerFraction", inversedBy="rang")
	 */
	private $fraction;
	
	/**
	 * @var string
	 * @ORM\Column(name="name", type="string", nullable=false)
	 */
	private $name;
	
	/**
	 * @var int
	 * @ORM\Column(name="model", type="integer", nullable=false)
	 */
	private $model;
	
	/**
	 * @var int
	 * @ORM\Column(name="salary", type="integer", nullable=false)
	 */
	private $salary;
	
	/**
	 * @var bool
	 * @ORM\Column(name="access", type="boolean", nullable=false)
	 */
	private $access;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\PlayerFraction", mappedBy="fraction")
	 */
	private $players;
	
	public function __construct()
	{
		$this->players = new ArrayCollection();
	}
	
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
	public function getFraction()
	{
		return $this->fraction;
	}
	
	/**
	 * @param mixed $fraction
	 */
	public function setFraction($fraction) : void
	{
		$this->fraction = $fraction;
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
	 * @return int
	 */
	public function getModel() : int
	{
		return $this->model;
	}
	
	/**
	 * @param int $model
	 */
	public function setModel(int $model) : void
	{
		$this->model = $model;
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
	 * @return bool
	 */
	public function isAccess() : bool
	{
		return $this->access;
	}
	
	/**
	 * @param bool $access
	 */
	public function setAccess(bool $access) : void
	{
		$this->access = $access;
	}
	
	/**
	 * @return mixed
	 */
	public function getPlayers()
	{
		return $this->players;
	}
	
	/**
	 * @param mixed $players
	 */
	public function setPlayers($players) : void
	{
		$this->players = $players;
	}
}