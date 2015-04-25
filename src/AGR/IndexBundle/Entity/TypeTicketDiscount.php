<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeTicketDiscount
 *
 * @ORM\Table(name="type_ticket_discount", indexes={@ORM\Index(name="fk_type_ticket_discount_discount1_idx", columns={"discount_id"}), @ORM\Index(name="fk_type_ticket_discount_type_ticket1_idx", columns={"type_ticket_id"})})
 * @ORM\Entity
 */
class TypeTicketDiscount
{
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
     *   @ORM\JoinColumn(name="type_ticket_id", referencedColumnName="id")
     * })
     */
    private $typeTicket;

    /**
     * @var \AGR\IndexBundle\Entity\Discount
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\Discount")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="discount_id", referencedColumnName="id")
     * })
     */
    private $discount;



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
     * Set typeTicket
     *
     * @param \AGR\IndexBundle\Entity\TypeTicket $typeTicket
     * @return TypeTicketDiscount
     */
    public function setTypeTicket(\AGR\IndexBundle\Entity\TypeTicket $typeTicket = null)
    {
        $this->typeTicket = $typeTicket;

        return $this;
    }

    /**
     * Get typeTicket
     *
     * @return \AGR\IndexBundle\Entity\TypeTicket 
     */
    public function getTypeTicket()
    {
        return $this->typeTicket;
    }

    /**
     * Set discount
     *
     * @param \AGR\IndexBundle\Entity\Discount $discount
     * @return TypeTicketDiscount
     */
    public function setDiscount(\AGR\IndexBundle\Entity\Discount $discount = null)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return \AGR\IndexBundle\Entity\Discount 
     */
    public function getDiscount()
    {
        return $this->discount;
    }
}
