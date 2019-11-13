<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerFractionGangZone
 * @ORM\Table(name="server_fraction_gangzone")
 * @ORM\Entity(repositoryClass="App\Repository\ServerFractionGangZoneRepository")
 */
class ServerFractionGangZone
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerFraction", inversedBy="gang_zone")
	 */
	private $fraction;
	
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
}