<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="fk_ticket_type_ticket1_idx", columns={"type_ticket_id"}), @ORM\Index(name="fk_ticket_order1_idx", columns={"order_id"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ticket_order_id", type="integer", nullable=false)
     */
    private $ticketOrderId;

    /**
     * @var string
     *
     * @ORM\Column(name="ticket_code", type="string", length=45, nullable=false)
     */
    private $ticketCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_checked", type="integer", nullable=false)
     */
    private $isChecked;

    /**
     * @var string
     *
     * @ORM\Column(name="q_code_link", type="string", length=200, nullable=true)
     */
    private $qCodeLink;

    /**
     * @var string
     *
     * @ORM\Column(name="attendee_name", type="string", length=45, nullable=true)
     */
    private $attendeeName;

    /**
     * @var string
     *
     * @ORM\Column(name="attendee_lastname", type="string", length=45, nullable=true)
     */
    private $attendeeLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="attendee_email", type="string", length=45, nullable=true)
     */
    private $attendeeEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AGR\IndexBundle\Entity\Order
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\Order")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     * })
     */
    private $order;

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
     * Set ticketOrderId
     *
     * @param integer $ticketOrderId
     * @return Ticket
     */
    public function setTicketOrderId($ticketOrderId)
    {
        $this->ticketOrderId = $ticketOrderId;

        return $this;
    }

    /**
     * Get ticketOrderId
     *
     * @return integer 
     */
    public function getTicketOrderId()
    {
        return $this->ticketOrderId;
    }

    /**
     * Set ticketCode
     *
     * @param string $ticketCode
     * @return Ticket
     */
    public function setTicketCode($ticketCode)
    {
        $this->ticketCode = $ticketCode;

        return $this;
    }

    /**
     * Get ticketCode
     *
     * @return string 
     */
    public function getTicketCode()
    {
        return $this->ticketCode;
    }

    /**
     * Set isChecked
     *
     * @param integer $isChecked
     * @return Ticket
     */
    public function setIsChecked($isChecked)
    {
        $this->isChecked = $isChecked;

        return $this;
    }

    /**
     * Get isChecked
     *
     * @return integer 
     */
    public function getIsChecked()
    {
        return $this->isChecked;
    }

    /**
     * Set qCodeLink
     *
     * @param string $qCodeLink
     * @return Ticket
     */
    public function setQCodeLink($qCodeLink)
    {
        $this->qCodeLink = $qCodeLink;

        return $this;
    }

    /**
     * Get qCodeLink
     *
     * @return string 
     */
    public function getQCodeLink()
    {
        return $this->qCodeLink;
    }

    /**
     * Set attendeeName
     *
     * @param string $attendeeName
     * @return Ticket
     */
    public function setAttendeeName($attendeeName)
    {
        $this->attendeeName = $attendeeName;

        return $this;
    }

    /**
     * Get attendeeName
     *
     * @return string 
     */
    public function getAttendeeName()
    {
        return $this->attendeeName;
    }

    /**
     * Set attendeeLastname
     *
     * @param string $attendeeLastname
     * @return Ticket
     */
    public function setAttendeeLastname($attendeeLastname)
    {
        $this->attendeeLastname = $attendeeLastname;

        return $this;
    }

    /**
     * Get attendeeLastname
     *
     * @return string 
     */
    public function getAttendeeLastname()
    {
        return $this->attendeeLastname;
    }

    /**
     * Set attendeeEmail
     *
     * @param string $attendeeEmail
     * @return Ticket
     */
    public function setAttendeeEmail($attendeeEmail)
    {
        $this->attendeeEmail = $attendeeEmail;

        return $this;
    }

    /**
     * Get attendeeEmail
     *
     * @return string 
     */
    public function getAttendeeEmail()
    {
        return $this->attendeeEmail;
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
     * Set order
     *
     * @param \AGR\IndexBundle\Entity\Order $order
     * @return Ticket
     */
    public function setOrder(\AGR\IndexBundle\Entity\Order $order = null)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * Get order
     *
     * @return \AGR\IndexBundle\Entity\Order 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set typeTicket
     *
     * @param \AGR\IndexBundle\Entity\TypeTicket $typeTicket
     * @return Ticket
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
}
