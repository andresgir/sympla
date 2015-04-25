<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeTicket
 *
 * @ORM\Table(name="type_ticket", indexes={@ORM\Index(name="fk_type_ticket_event1_idx", columns={"event_id"}), @ORM\Index(name="fk_type_ticket_type_ticket1_idx", columns={"start_sale_after_type_ticket_id"})})
 * @ORM\Entity
 */
class TypeTicket
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=45, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity", type="string", length=45, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="quantity_left", type="string", length=45, nullable=false)
     */
    private $quantityLeft;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_free", type="integer", nullable=false)
     */
    private $isFree;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_point_sale", type="integer", nullable=false)
     */
    private $isPointSale;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start_sale", type="datetime", nullable=true)
     */
    private $dateStartSale;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end_sale", type="datetime", nullable=true)
     */
    private $dateEndSale;

    /**
     * @var integer
     *
     * @ORM\Column(name="minimum_quantity", type="integer", nullable=false)
     */
    private $minimumQuantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="maximum_quantity", type="integer", nullable=false)
     */
    private $maximumQuantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_charging_rate", type="integer", nullable=false)
     */
    private $isChargingRate;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AGR\IndexBundle\Entity\TypeTicket
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\TypeTicket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="start_sale_after_type_ticket_id", referencedColumnName="id")
     * })
     */
    private $startSaleAfterTypeTicket;

    /**
     * @var \AGR\IndexBundle\Entity\Event
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     * })
     */
    private $event;



    /**
     * Set name
     *
     * @param string $name
     * @return TypeTicket
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
     * Set price
     *
     * @param string $price
     * @return TypeTicket
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return TypeTicket
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantityLeft
     *
     * @param string $quantityLeft
     * @return TypeTicket
     */
    public function setQuantityLeft($quantityLeft)
    {
        $this->quantityLeft = $quantityLeft;

        return $this;
    }

    /**
     * Get quantityLeft
     *
     * @return string 
     */
    public function getQuantityLeft()
    {
        return $this->quantityLeft;
    }

    /**
     * Set isFree
     *
     * @param integer $isFree
     * @return TypeTicket
     */
    public function setIsFree($isFree)
    {
        $this->isFree = $isFree;

        return $this;
    }

    /**
     * Get isFree
     *
     * @return integer 
     */
    public function getIsFree()
    {
        return $this->isFree;
    }

    /**
     * Set isPointSale
     *
     * @param integer $isPointSale
     * @return TypeTicket
     */
    public function setIsPointSale($isPointSale)
    {
        $this->isPointSale = $isPointSale;

        return $this;
    }

    /**
     * Get isPointSale
     *
     * @return integer 
     */
    public function getIsPointSale()
    {
        return $this->isPointSale;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TypeTicket
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateStartSale
     *
     * @param \DateTime $dateStartSale
     * @return TypeTicket
     */
    public function setDateStartSale($dateStartSale)
    {
        $this->dateStartSale = $dateStartSale;

        return $this;
    }

    /**
     * Get dateStartSale
     *
     * @return \DateTime 
     */
    public function getDateStartSale()
    {
        return $this->dateStartSale;
    }

    /**
     * Set dateEndSale
     *
     * @param \DateTime $dateEndSale
     * @return TypeTicket
     */
    public function setDateEndSale($dateEndSale)
    {
        $this->dateEndSale = $dateEndSale;

        return $this;
    }

    /**
     * Get dateEndSale
     *
     * @return \DateTime 
     */
    public function getDateEndSale()
    {
        return $this->dateEndSale;
    }

    /**
     * Set minimumQuantity
     *
     * @param integer $minimumQuantity
     * @return TypeTicket
     */
    public function setMinimumQuantity($minimumQuantity)
    {
        $this->minimumQuantity = $minimumQuantity;

        return $this;
    }

    /**
     * Get minimumQuantity
     *
     * @return integer 
     */
    public function getMinimumQuantity()
    {
        return $this->minimumQuantity;
    }

    /**
     * Set maximumQuantity
     *
     * @param integer $maximumQuantity
     * @return TypeTicket
     */
    public function setMaximumQuantity($maximumQuantity)
    {
        $this->maximumQuantity = $maximumQuantity;

        return $this;
    }

    /**
     * Get maximumQuantity
     *
     * @return integer 
     */
    public function getMaximumQuantity()
    {
        return $this->maximumQuantity;
    }

    /**
     * Set isChargingRate
     *
     * @param integer $isChargingRate
     * @return TypeTicket
     */
    public function setIsChargingRate($isChargingRate)
    {
        $this->isChargingRate = $isChargingRate;

        return $this;
    }

    /**
     * Get isChargingRate
     *
     * @return integer 
     */
    public function getIsChargingRate()
    {
        return $this->isChargingRate;
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
     * Set startSaleAfterTypeTicket
     *
     * @param \AGR\IndexBundle\Entity\TypeTicket $startSaleAfterTypeTicket
     * @return TypeTicket
     */
    public function setStartSaleAfterTypeTicket(\AGR\IndexBundle\Entity\TypeTicket $startSaleAfterTypeTicket = null)
    {
        $this->startSaleAfterTypeTicket = $startSaleAfterTypeTicket;

        return $this;
    }

    /**
     * Get startSaleAfterTypeTicket
     *
     * @return \AGR\IndexBundle\Entity\TypeTicket 
     */
    public function getStartSaleAfterTypeTicket()
    {
        return $this->startSaleAfterTypeTicket;
    }

    /**
     * Set event
     *
     * @param \AGR\IndexBundle\Entity\Event $event
     * @return TypeTicket
     */
    public function setEvent(\AGR\IndexBundle\Entity\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \AGR\IndexBundle\Entity\Event 
     */
    public function getEvent()
    {
        return $this->event;
    }
}
