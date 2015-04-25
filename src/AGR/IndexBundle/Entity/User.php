<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="fk_user_bank_account1_idx", columns={"bank_account_id"}), @ORM\Index(name="fk_user_user_type1_idx", columns={"user_type_id"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var string
     *
     * @ORM\Column(name="page_name", type="string", length=45, nullable=true)
     */
    private $pageName;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AGR\IndexBundle\Entity\UserType
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\UserType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_type_id", referencedColumnName="id")
     * })
     */
    private $userType;

    /**
     * @var \AGR\IndexBundle\Entity\BankAccount
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\BankAccount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bank_account_id", referencedColumnName="id")
     * })
     */
    private $bankAccount;



    /**
     * Set pageName
     *
     * @param string $pageName
     * @return User
     */
    public function setPageName($pageName)
    {
        $this->pageName = $pageName;

        return $this;
    }

    /**
     * Get pageName
     *
     * @return string 
     */
    public function getPageName()
    {
        return $this->pageName;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
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
     * Set userType
     *
     * @param \AGR\IndexBundle\Entity\UserType $userType
     * @return User
     */
    public function setUserType(\AGR\IndexBundle\Entity\UserType $userType = null)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return \AGR\IndexBundle\Entity\UserType 
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set bankAccount
     *
     * @param \AGR\IndexBundle\Entity\BankAccount $bankAccount
     * @return User
     */
    public function setBankAccount(\AGR\IndexBundle\Entity\BankAccount $bankAccount = null)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }

    /**
     * Get bankAccount
     *
     * @return \AGR\IndexBundle\Entity\BankAccount 
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }
}
