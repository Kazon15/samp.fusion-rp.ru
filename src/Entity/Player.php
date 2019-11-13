<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Player
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="App\Repository\PlayerRepository")
 */
class Player implements UserInterface
{
	/**
	 * @var int
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @var string
	 * @ORM\Column(name="name", type="string", length=32, nullable=false)
	 */
	private $name;
	
	/**
	 * @var string
	 * @ORM\Column(name="password", type="string", length=64, nullable=false)
	 */
	private $password;
	
	/**
	 * @var string
	 * @ORM\Column(name="reg_ip", type="string", length=32, nullable=false)
	 */
	private $reg_ip;
	
	/**
	 * @var string
	 * @ORM\Column(name="now_ip", type="string", length=32, nullable=false)
	 */
	private $now_ip;
	
	/**
	 * @var string
	 * @ORM\Column(name="mail", type="string", length=64, nullable=true)
	 */
	private $mail;
	
	/**
	 * @var string
	 * @ORM\Column(name="reg_date", type="string", length=16, nullable=false)
	 */
	private $reg_date;
	
	/**
	 * @var bool
	 * @ORM\Column(name="sex", type="boolean", nullable=false)
	 */
	private $sex;
	
	/**
	 * @var int
	 * @ORM\Column(name="model", type="integer", nullable=false)
	 */
	private $model;
	
	/**
	 * @var float
	 * @ORM\Column(name="health", type="float", nullable=false)
	 */
	private $health;
	
	/**
	 * @var float
	 * @ORM\Column(name="armour", type="float", nullable=false)
	 */
	private $armour;
	
	/**
	 * @var int
	 * @ORM\Column(name="age", type="smallint", nullable=false)
	 */
	private $age;
	
	/**
	 * @var bool
	 * @ORM\Column(name="online", type="boolean", nullable=false)
	 */
	private $online;
	
	/**
	 * @var string
	 * @ORM\Column(name="secret_key", type="string", length=5, nullable=true)
	 */
	private $secret_key;
	
	/**
	 * @var int
	 * @ORM\Column(name="online_time", type="integer", nullable=false)
	 */
	private $online_time;
	
	/**
	 * @var int
	 * @ORM\Column(name="type", type="integer", nullable=false)
	 */
	private $type;
	
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
	 * @ORM\ManyToOne(targetEntity="App\Entity\Player", inversedBy="referral")
	 */
	private $invited;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\Player", mappedBy="invited")
	 */
	private $referral;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerAdmin", mappedBy="player")
	 */
	private $admin;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerCar", mappedBy="player")
	 */
	private $car;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerCrimes", mappedBy="player")
	 */
	private $crimes;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerDonate", mappedBy="player")
	 */
	private $donate;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerFine", mappedBy="player")
	 */
	private $fine;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerFraction", mappedBy="player")
	 */
	private $fraction;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\ServerFraction", mappedBy="player")
	 */
	private $leader;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerGpsPlayer", mappedBy="player")
	 */
	private $gps;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerGun", mappedBy="player")
	 */
	private $gun;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerInventory", mappedBy="player")
	 */
	private $inventory;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerJail", mappedBy="player")
	 */
	private $jail;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerJob", mappedBy="player")
	 */
	private $job;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerLevel", mappedBy="player")
	 */
	private $level;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerLic", mappedBy="player")
	 */
	private $lic;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerMoney", mappedBy="player")
	 */
	private $money;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerNeed", mappedBy="player")
	 */
	private $need;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerParty", mappedBy="player")
	 */
	private $party;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerPhone", mappedBy="player")
	 */
	private $phone;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerQuest", mappedBy="player")
	 */
	private $quest;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerSettings", mappedBy="player")
	 */
	private $settings;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerSkill", mappedBy="player")
	 */
	private $skill;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerWanted", mappedBy="player")
	 */
	private $wanted;
	
	/**
	 * @ORM\OneToOne(targetEntity="App\Entity\PlayerWarn", mappedBy="player")
	 */
	private $warn;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerHouse", mappedBy="player")
	 */
	private $house;
	
	/**
	 * @ORM\OneToMany(targetEntity="App\Entity\ServerBusiness", mappedBy="player")
	 */
	private $business;
	
	public function __construct()
	{
		$this->referral = new ArrayCollection();
		$this->gps      = new ArrayCollection();
		$this->house    = new ArrayCollection();
		$this->business = new ArrayCollection();
	}
	
	public function getId() : int
	{
		return $this->id;
	}
	
	public function setId(int $id) : void
	{
		$this->id = $id;
	}
	
	public function getName() : string
	{
		return $this->name;
	}
	
	public function setName(string $name) : void
	{
		$this->name = $name;
	}
	
	public function getRegIp() : string
	{
		return $this->reg_ip;
	}
	
	public function setRegIp(string $reg_ip) : void
	{
		$this->reg_ip = $reg_ip;
	}
	
	public function getNowIp() : string
	{
		return $this->now_ip;
	}
	
	public function setNowIp(string $now_ip) : void
	{
		$this->now_ip = $now_ip;
	}
	
	public function getMail() : string
	{
		return $this->mail;
	}
	
	public function setMail(string $mail) : void
	{
		$this->mail = $mail;
	}
	
	public function getRegDate() : string
	{
		return $this->reg_date;
	}
	
	public function setRegDate(string $reg_date) : void
	{
		$this->reg_date = $reg_date;
	}
	
	public function isSex() : bool
	{
		return $this->sex;
	}
	
	public function setSex(bool $sex) : void
	{
		$this->sex = $sex;
	}
	
	public function getModel() : int
	{
		return $this->model;
	}
	
	public function setModel(int $model) : void
	{
		$this->model = $model;
	}
	
	public function getHealth() : float
	{
		return $this->health;
	}
	
	public function setHealth(float $health) : void
	{
		$this->health = $health;
	}
	
	public function getArmour() : float
	{
		return $this->armour;
	}
	
	public function setArmour(float $armour) : void
	{
		$this->armour = $armour;
	}
	
	public function getAge() : int
	{
		return $this->age;
	}
	
	public function setAge(int $age) : void
	{
		$this->age = $age;
	}
	
	public function isOnline() : bool
	{
		return $this->online;
	}
	
	public function setOnline(bool $online) : void
	{
		$this->online = $online;
	}
	
	public function getSecretKey() : int
	{
		return $this->secret_key;
	}
	
	public function setSecretKey(int $secret_key) : void
	{
		$this->secret_key = $secret_key;
	}
	
	public function getOnlineTime() : int
	{
		return $this->online_time;
	}
	
	public function setOnlineTime(int $online_time) : void
	{
		$this->online_time = $online_time;
	}
	
	public function getInvited() : ?Player
	{
		return $this->invited;
	}
	
	public function setInvited(?Player $invited) : self
	{
		$this->invited = $invited;
		
		return $this;
	}
	
	/**
	 * @return int
	 */
	public function getType() : int
	{
		return $this->type;
	}
	
	public function setType(int $type) : void
	{
		$this->type = $type;
	}
	
	public function getPosX() : float
	{
		return $this->pos_x;
	}
	
	public function setPosX(float $pos_x) : void
	{
		$this->pos_x = $pos_x;
	}
	
	public function getPosY() : float
	{
		return $this->pos_y;
	}
	
	public function setPosY(float $pos_y) : void
	{
		$this->pos_y = $pos_y;
	}
	
	public function getPosZ() : float
	{
		return $this->pos_z;
	}
	
	public function setPosZ(float $pos_z) : void
	{
		$this->pos_z = $pos_z;
	}
	
	public function getPosFa() : float
	{
		return $this->pos_fa;
	}
	
	public function setPosFa(float $pos_fa) : void
	{
		$this->pos_fa = $pos_fa;
	}
	
	public function getReferral() : Collection
	{
		return $this->referral;
	}
	
	public function getAdmin() : ?PlayerAdmin
	{
		return $this->admin;
	}
	
	public function setAdmin(?PlayerAdmin $admin) : self
	{
		$this->admin = $admin;
		
		return $this;
	}
	
	public function getCar() : ?PlayerCar
	{
		return $this->car;
	}
	
	public function setCar(?PlayerCar $car) : self
	{
		$this->car = $car;
		
		return $this;
	}
	
	public function getCrimes() : ?PlayerCrimes
	{
		return $this->crimes;
	}
	
	public function setCrimes(?PlayerCrimes $crimes) : self
	{
		$this->crimes = $crimes;
		
		return $this;
	}
	
	public function getDonate() : ?PlayerDonate
	{
		return $this->donate;
	}
	
	public function setDonate(?PlayerDonate $donate) : self
	{
		$this->donate = $donate;
		
		return $this;
	}
	
	public function getFine() : ?PlayerFine
	{
		return $this->fine;
	}
	
	public function setFine(?PlayerFine $fine) : self
	{
		$this->fine = $fine;
		
		return $this;
	}
	
	public function getFraction() : ?PlayerFraction
	{
		return $this->fraction;
	}
	
	public function setFraction(?PlayerFraction $fraction) : self
	{
		$this->fraction = $fraction;
		
		return $this;
	}
	
	public function getLeader()
	{
		return $this->leader;
	}
	
	public function setLeader($leader) : void
	{
		$this->leader = $leader;
	}
	
	public function getGps() : Collection
	{
		return $this->gps;
	}
	
	public function getGun() : ?PlayerGun
	{
		return $this->gun;
	}
	
	public function setGun(?PlayerGun $gun) : self
	{
		$this->gun = $gun;
		
		return $this;
	}
	
	public function getInventory() : ?PlayerInventory
	{
		return $this->inventory;
	}
	
	public function setInventory(?PlayerInventory $inventory) : self
	{
		$this->inventory = $inventory;
		
		return $this;
	}
	
	public function getJail() : ?PlayerJail
	{
		return $this->jail;
	}
	
	public function setJail(?PlayerJail $jail) : self
	{
		$this->jail = $jail;
		
		return $this;
	}
	
	public function getJob() : ?PlayerJob
	{
		return $this->job;
	}
	
	public function setJob(?PlayerJob $job) : self
	{
		$this->job = $job;
		
		return $this;
	}
	
	public function getLevel() : ?PlayerLevel
	{
		return $this->level;
	}
	
	public function setLevel(?PlayerLevel $level) : self
	{
		$this->level = $level;
		
		return $this;
	}
	
	public function getLic() : ?PlayerLic
	{
		return $this->lic;
	}
	
	public function setLic(?PlayerLic $lic) : self
	{
		$this->lic = $lic;
		
		return $this;
	}
	
	public function getMoney() : ?PlayerMoney
	{
		return $this->money;
	}
	
	public function setMoney(?PlayerMoney $money) : self
	{
		$this->money = $money;
		
		return $this;
	}
	
	public function getNeed() : ?PlayerNeed
	{
		return $this->need;
	}
	
	public function setNeed(?PlayerNeed $need) : self
	{
		$this->need = $need;
		
		return $this;
	}
	
	public function getParty() : ?PlayerParty
	{
		return $this->party;
	}
	
	public function setParty(?PlayerParty $party) : self
	{
		$this->party = $party;
		
		return $this;
	}
	
	public function getPhone() : ?PlayerPhone
	{
		return $this->phone;
	}
	
	public function setPhone(?PlayerPhone $phone) : self
	{
		$this->phone = $phone;
		
		return $this;
	}
	
	public function getQuest() : ?PlayerQuest
	{
		return $this->quest;
	}
	
	public function setQuest(?PlayerQuest $quest) : self
	{
		$this->quest = $quest;
		
		return $this;
	}
	
	public function getSettings() : ?PlayerSettings
	{
		return $this->settings;
	}
	
	public function setSettings(?PlayerSettings $settings) : self
	{
		$this->settings = $settings;
		
		return $this;
	}
	
	public function getSkill() : ?PlayerSkill
	{
		return $this->skill;
	}
	
	public function setSkill(?PlayerSkill $skill) : self
	{
		$this->skill = $skill;
		
		return $this;
	}
	
	public function getWanted() : ?PlayerWanted
	{
		return $this->wanted;
	}
	
	public function setWanted(?PlayerWanted $wanted) : self
	{
		$this->wanted = $wanted;
		
		return $this;
	}
	
	public function getWarn() : ?PlayerWarn
	{
		return $this->warn;
	}
	
	public function setWarn(?PlayerWarn $warn) : self
	{
		$this->warn = $warn;
		
		return $this;
	}
	
	public function getHouse() : Collection
	{
		return $this->house;
	}
	
	public function getBusiness() : Collection
	{
		return $this->business;
	}
	
	public function getRoles()
	{
		$role = null;
		
		/*switch($this->admin)
		{
			case 10:
				$role = ['ROLE_ADMIN'];
				break;
			default:
				$role = ['ROLE_USER'];
				break;
		}*/
		return $role;
	}
	
	public function getSalt()
	{
	
	}
	
	public function getUsername()
	{
		return $this->name;
	}
	
	public function eraseCredentials()
	{
		//$this->plainPassword = null;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function setPassword(string $password) : self
	{
		$this->password = $password;
		
		return $this;
	}
	
	public function getSex() : ?bool
	{
		return $this->sex;
	}
	
	public function getOnline() : ?bool
	{
		return $this->online;
	}
	
	public function addReferral(Player $referral) : self
	{
		if(!$this->referral->contains($referral))
		{
			$this->referral[] = $referral;
			$referral->setInvited($this);
		}
		
		return $this;
	}
	
	public function removeReferral(Player $referral) : self
	{
		if($this->referral->contains($referral))
		{
			$this->referral->removeElement($referral);
			if($referral->getInvited() === $this)
			{
				$referral->setInvited(null);
			}
		}
		
		return $this;
	}
}