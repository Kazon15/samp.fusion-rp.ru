<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServerSecurity
 * @ORM\Table(name="server_security")
 * @ORM\Entity(repositoryClass="App\Repository\ServerSecurityRepository")
 */
class ServerSecurity
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var integer
	 * @ORM\Column(name="code", type="smallint", nullable=false, unique=true)
	 */
	private $code;
	
	/**
	 * @var integer
	 * @ORM\Column(name="type", type="smallint", nullable=false)
	 */
	private $type;
	
	public function getId() : ?int
	{
		return $this->id;
	}
	
	/**
	 * @return int
	 */
	public function getCode() : int
	{
		return $this->code;
	}
	
	/**
	 * @param int $code
	 */
	public function setCode(int $code) : void
	{
		$this->code = $code;
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
}
