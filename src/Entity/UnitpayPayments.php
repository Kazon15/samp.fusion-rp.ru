<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnitpayPayments
 * @ORM\Table(name="unitpay_payments")
 * @ORM\Entity(repositoryClass="App\Repository\UnitpayPaymentsRepository")
 */
class UnitpayPayments
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
	 * @ORM\Column(name="unitpayId", type="string", length=255, nullable=false)
	 */
	private $unitpayid;
	
	/**
	 * @var string
	 * @ORM\Column(name="account", type="string", length=255, nullable=false)
	 */
	private $account;
	
	/**
	 * @var float
	 * @ORM\Column(name="sum", type="float", precision=10, scale=0, nullable=false)
	 */
	private $sum;
	
	/**
	 * @var int
	 * @ORM\Column(name="itemsCount", type="integer", nullable=false, options={"default"="1"})
	 */
	private $itemscount = '1';
	
	/**
	 * @var \DateTime
	 * @ORM\Column(name="dateCreate", type="datetime", nullable=false)
	 */
	private $datecreate;
	
	/**
	 * @var \DateTime|null
	 * @ORM\Column(name="dateComplete", type="datetime", nullable=true)
	 */
	private $datecomplete;
	
	/**
	 * @var bool
	 * @ORM\Column(name="status", type="boolean", nullable=false)
	 */
	private $status = '0';
	
	public function getId() : ?int
	{
		return $this->id;
	}
	
	public function getUnitpayid() : ?string
	{
		return $this->unitpayid;
	}
	
	public function setUnitpayid(string $unitpayid) : self
	{
		$this->unitpayid = $unitpayid;
		
		return $this;
	}
	
	public function getAccount() : ?string
	{
		return $this->account;
	}
	
	public function setAccount(string $account) : self
	{
		$this->account = $account;
		
		return $this;
	}
	
	public function getSum() : ?float
	{
		return $this->sum;
	}
	
	public function setSum(float $sum) : self
	{
		$this->sum = $sum;
		
		return $this;
	}
	
	public function getItemscount() : ?int
	{
		return $this->itemscount;
	}
	
	public function setItemscount(int $itemscount) : self
	{
		$this->itemscount = $itemscount;
		
		return $this;
	}
	
	public function getDatecreate() : ?\DateTimeInterface
	{
		return $this->datecreate;
	}
	
	public function setDatecreate(\DateTimeInterface $datecreate) : self
	{
		$this->datecreate = $datecreate;
		
		return $this;
	}
	
	public function getDatecomplete() : ?\DateTimeInterface
	{
		return $this->datecomplete;
	}
	
	public function setDatecomplete(?\DateTimeInterface $datecomplete) : self
	{
		$this->datecomplete = $datecomplete;
		
		return $this;
	}
	
	public function getStatus() : ?bool
	{
		return $this->status;
	}
	
	public function setStatus(bool $status) : self
	{
		$this->status = $status;
		
		return $this;
	}
}