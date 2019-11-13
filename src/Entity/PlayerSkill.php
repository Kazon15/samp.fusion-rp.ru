<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerSkill
 * @ORM\Table(name="player_skill")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerSkillRepository")
 */
class PlayerSkill
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\Player", inversedBy="skill")
	 */
	private $player;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_0", type="integer", nullable=false)
	 */
	private $skill_0;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_1", type="integer", nullable=false)
	 */
	private $skill_1;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_2", type="integer", nullable=false)
	 */
	private $skill_2;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_3", type="integer", nullable=false)
	 */
	private $skill_3;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_4", type="integer", nullable=false)
	 */
	private $skill_4;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_5", type="integer", nullable=false)
	 */
	private $skill_5;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_6", type="integer", nullable=false)
	 */
	private $skill_6;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_7", type="integer", nullable=false)
	 */
	private $skill_7;
	
	/**
	 * @var int
	 * @ORM\Column(name="skill_8", type="integer", nullable=false)
	 */
	private $skill_8;
	
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
	public function getSkill0() : int
	{
		return $this->skill_0;
	}
	
	/**
	 * @param int $skill_0
	 */
	public function setSkill0(int $skill_0) : void
	{
		$this->skill_0 = $skill_0;
	}
	
	/**
	 * @return int
	 */
	public function getSkill1() : int
	{
		return $this->skill_1;
	}
	
	/**
	 * @param int $skill_1
	 */
	public function setSkill1(int $skill_1) : void
	{
		$this->skill_1 = $skill_1;
	}
	
	/**
	 * @return int
	 */
	public function getSkill2() : int
	{
		return $this->skill_2;
	}
	
	/**
	 * @param int $skill_2
	 */
	public function setSkill2(int $skill_2) : void
	{
		$this->skill_2 = $skill_2;
	}
	
	/**
	 * @return int
	 */
	public function getSkill3() : int
	{
		return $this->skill_3;
	}
	
	/**
	 * @param int $skill_3
	 */
	public function setSkill3(int $skill_3) : void
	{
		$this->skill_3 = $skill_3;
	}
	
	/**
	 * @return int
	 */
	public function getSkill4() : int
	{
		return $this->skill_4;
	}
	
	/**
	 * @param int $skill_4
	 */
	public function setSkill4(int $skill_4) : void
	{
		$this->skill_4 = $skill_4;
	}
	
	/**
	 * @return int
	 */
	public function getSkill5() : int
	{
		return $this->skill_5;
	}
	
	/**
	 * @param int $skill_5
	 */
	public function setSkill5(int $skill_5) : void
	{
		$this->skill_5 = $skill_5;
	}
	
	/**
	 * @return int
	 */
	public function getSkill6() : int
	{
		return $this->skill_6;
	}
	
	/**
	 * @param int $skill_6
	 */
	public function setSkill6(int $skill_6) : void
	{
		$this->skill_6 = $skill_6;
	}
	
	/**
	 * @return int
	 */
	public function getSkill7() : int
	{
		return $this->skill_7;
	}
	
	/**
	 * @param int $skill_7
	 */
	public function setSkill7(int $skill_7) : void
	{
		$this->skill_7 = $skill_7;
	}
	
	/**
	 * @return int
	 */
	public function getSkill8() : int
	{
		return $this->skill_8;
	}
	
	/**
	 * @param int $skill_8
	 */
	public function setSkill8(int $skill_8) : void
	{
		$this->skill_8 = $skill_8;
	}
}