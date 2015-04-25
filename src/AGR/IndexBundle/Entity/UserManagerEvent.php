<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserManagerEvent
 *
 * @ORM\Table(name="user_manager_event", indexes={@ORM\Index(name="fk_user_manager_event_template1_idx", columns={"template_id"}), @ORM\Index(name="fk_user_manager_event_permission1_idx", columns={"permission_id"}), @ORM\Index(name="fk_user_manager_event_event1_idx", columns={"event_id"}), @ORM\Index(name="fk_user_manager_event_user1_idx", columns={"user_id"})})
 * @ORM\Entity
 */
class UserManagerEvent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="is_purchase_confirmation", type="integer", nullable=false)
     */
    private $isPurchaseConfirmation;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_getting_news", type="integer", nullable=true)
     */
    private $isGettingNews;

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
     * @var \AGR\IndexBundle\Entity\Template
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\Template")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="template_id", referencedColumnName="id")
     * })
     */
    private $template;

    /**
     * @var \AGR\IndexBundle\Entity\Permission
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\Permission")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;

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
     * Set isPurchaseConfirmation
     *
     * @param integer $isPurchaseConfirmation
     * @return UserManagerEvent
     */
    public function setIsPurchaseConfirmation($isPurchaseConfirmation)
    {
        $this->isPurchaseConfirmation = $isPurchaseConfirmation;

        return $this;
    }

    /**
     * Get isPurchaseConfirmation
     *
     * @return integer 
     */
    public function getIsPurchaseConfirmation()
    {
        return $this->isPurchaseConfirmation;
    }

    /**
     * Set isGettingNews
     *
     * @param integer $isGettingNews
     * @return UserManagerEvent
     */
    public function setIsGettingNews($isGettingNews)
    {
        $this->isGettingNews = $isGettingNews;

        return $this;
    }

    /**
     * Get isGettingNews
     *
     * @return integer 
     */
    public function getIsGettingNews()
    {
        return $this->isGettingNews;
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
     * @return UserManagerEvent
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

    /**
     * Set template
     *
     * @param \AGR\IndexBundle\Entity\Template $template
     * @return UserManagerEvent
     */
    public function setTemplate(\AGR\IndexBundle\Entity\Template $template = null)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return \AGR\IndexBundle\Entity\Template 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set permission
     *
     * @param \AGR\IndexBundle\Entity\Permission $permission
     * @return UserManagerEvent
     */
    public function setPermission(\AGR\IndexBundle\Entity\Permission $permission = null)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return \AGR\IndexBundle\Entity\Permission 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set event
     *
     * @param \AGR\IndexBundle\Entity\Event $event
     * @return UserManagerEvent
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
