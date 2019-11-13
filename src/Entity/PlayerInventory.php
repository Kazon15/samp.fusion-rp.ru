<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerInventory
 * @ORM\Table(name="player_inventory")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerInventoryRepository")
 */
class PlayerInventory
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="inventory")
	 */
	private $player;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerStorage", inversedBy="inventory")
	 */
	private $storage;
	
	/**
	 * @var int
	 * @ORM\Column(name="count", type="integer", nullable=false)
	 */
	private $count;
	
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
	 * @return mixed
	 */
	public function getStorage()
	{
		return $this->storage;
	}
	
	/**
	 * @param mixed $storage
	 */
	public function setStorage($storage) : void
	{
		$this->storage = $storage;
	}
	
	/**
	 * @return int
	 */
	public function getCount() : int
	{
		return $this->count;
	}
	
	/**
	 * @param int $count
	 */
	public function setCount(int $count) : void
	{
		$this->count = $count;
	}
}