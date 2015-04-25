<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order", indexes={@ORM\Index(name="fk_pedido_usuario1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class Order
{
    /**
     * @var string
     *
     * @ORM\Column(name="holder_name", type="string", length=45, nullable=false)
     */
    private $holderName;

    /**
     * @var string
     *
     * @ORM\Column(name="holder_lastname", type="string", length=45, nullable=false)
     */
    private $holderLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="holder_email", type="string", length=45, nullable=false)
     */
    private $holderEmail;

    /**
     * @var float
     *
     * @ORM\Column(name="total_purchase", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalPurchase;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AGR\IndexBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Set holderName
     *
     * @param string $holderName
     * @return Order
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
     * Set holderLastname
     *
     * @param string $holderLastname
     * @return Order
     */
    public function setHolderLastname($holderLastname)
    {
        $this->holderLastname = $holderLastname;

        return $this;
    }

    /**
     * Get holderLastname
     *
     * @return string 
     */
    public function getHolderLastname()
    {
        return $this->holderLastname;
    }

    /**
     * Set holderEmail
     *
     * @param string $holderEmail
     * @return Order
     */
    public function setHolderEmail($holderEmail)
    {
        $this->holderEmail = $holderEmail;

        return $this;
    }

    /**
     * Get holderEmail
     *
     * @return string 
     */
    public function getHolderEmail()
    {
        return $this->holderEmail;
    }

    /**
     * Set totalPurchase
     *
     * @param float $totalPurchase
     * @return Order
     */
    public function setTotalPurchase($totalPurchase)
    {
        $this->totalPurchase = $totalPurchase;

        return $this;
    }

    /**
     * Get totalPurchase
     *
     * @return float 
     */
    public function getTotalPurchase()
    {
        return $this->totalPurchase;
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
     * Set user
     *
     * @param \AGR\IndexBundle\Entity\User $user
     * @return Order
     */
    public function setUser(\AGR\IndexBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AGR\IndexBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
