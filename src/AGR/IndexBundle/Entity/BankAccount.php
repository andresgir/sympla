<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankAccount
 *
 * @ORM\Table(name="bank_account", indexes={@ORM\Index(name="fk_bank_account_bank1_idx", columns={"bank_id"}), @ORM\Index(name="fk_bank_account_account_type1_idx", columns={"account_type_id"})})
 * @ORM\Entity
 */
class BankAccount
{
    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=45, nullable=false)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="holder_name", type="string", length=45, nullable=false)
     */
    private $holderName;

    /**
     * @var string
     *
     * @ORM\Column(name="holder_identificator", type="string", length=45, nullable=false)
     */
    private $holderIdentificator;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AGR\IndexBundle\Entity\AccountType
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\AccountType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_type_id", referencedColumnName="id")
     * })
     */
    private $accountType;

    /**
     * @var \AGR\IndexBundle\Entity\Bank
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\Bank")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_id", referencedColumnName="id")
     * })
     */
    private $bank;



    /**
     * Set number
     *
     * @param string $number
     * @return BankAccount
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set holderName
     *
     * @param string $holderName
     * @return BankAccount
     */
    public function setHolderName($holderName)
    {
        $this->holderName = $holderName;

        return $this;
    }

    /**
     * Get holderName
     *
     * @return string 
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * Set holderIdentificator
     *
     * @param string $holderIdentificator
     * @return BankAccount
     */
    public function setHolderIdentificator($holderIdentificator)
    {
        $this->holderIdentificator = $holderIdentificator;

        return $this;
    }

    /**
     * Get holderIdentificator
     *
     * @return string 
     */
    public function getHolderIdentificator()
    {
        return $this->holderIdentificator;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set accountType
     *
     * @param \AGR\IndexBundle\Entity\AccountType $accountType
     * @return BankAccount
     */
    public function setAccountType(\AGR\IndexBundle\Entity\AccountType $accountType = null)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return \AGR\IndexBundle\Entity\AccountType 
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set bank
     *
     * @param \AGR\IndexBundle\Entity\Bank $bank
     * @return BankAccount
     */
    public function setBank(\AGR\IndexBundle\Entity\Bank $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return \AGR\IndexBundle\Entity\Bank 
     */
    public function getBank()
    {
        return $this->bank;
    }
}
