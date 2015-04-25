<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event", indexes={@ORM\Index(name="fk_event_template1_idx", columns={"template_id"}), @ORM\Index(name="fk_event_bank_acount1_idx", columns={"bank_account_id"}), @ORM\Index(name="fk_event_category1_idx", columns={"category_main_id"}), @ORM\Index(name="fk_event_category2_idx", columns={"category_secondary_id"}), @ORM\Index(name="fk_event_event_status1_idx", columns={"event_status_id"})})
 * @ORM\Entity
 */
class Event
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=100, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="banner", type="string", length=100, nullable=true)
     */
    private $banner;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_start", type="datetime", nullable=false)
     */
    private $dateStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_end", type="datetime", nullable=false)
     */
    private $dateEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_place", type="string", length=45, nullable=true)
     */
    private $adressPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_street", type="string", length=45, nullable=true)
     */
    private $adressStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_number", type="string", length=45, nullable=true)
     */
    private $adressNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="adress_neighbourhood", type="string", length=100, nullable=true)
     */
    private $adressNeighbourhood;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=2000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=200, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

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
     * @var \AGR\IndexBundle\Entity\EventStatus
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\EventStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_status_id", referencedColumnName="id")
     * })
     */
    private $eventStatus;

    /**
     * @var \AGR\IndexBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_secondary_id", referencedColumnName="id")
     * })
     */
    private $categorySecondary;

    /**
     * @var \AGR\IndexBundle\Entity\Category
     *
     * @ORM\ManyToOne(targetEntity="AGR\IndexBundle\Entity\Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_main_id", referencedColumnName="id")
     * })
     */
    private $categoryMain;

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
     * Set name
     *
     * @param string $name
     * @return Event
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
     * Set image
     *
     * @param string $image
     * @return Event
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set banner
     *
     * @param string $banner
     * @return Event
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    /**
     * Get banner
     *
     * @return string 
     */
    public function getBanner()
    {
        return $this->banner;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     * @return Event
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime 
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     * @return Event
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime 
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set adressPlace
     *
     * @param string $adressPlace
     * @return Event
     */
    public function setAdressPlace($adressPlace)
    {
        $this->adressPlace = $adressPlace;

        return $this;
    }

    /**
     * Get adressPlace
     *
     * @return string 
     */
    public function getAdressPlace()
    {
        return $this->adressPlace;
    }

    /**
     * Set adressStreet
     *
     * @param string $adressStreet
     * @return Event
     */
    public function setAdressStreet($adressStreet)
    {
        $this->adressStreet = $adressStreet;

        return $this;
    }

    /**
     * Get adressStreet
     *
     * @return string 
     */
    public function getAdressStreet()
    {
        return $this->adressStreet;
    }

    /**
     * Set adressNumber
     *
     * @param string $adressNumber
     * @return Event
     */
    public function setAdressNumber($adressNumber)
    {
        $this->adressNumber = $adressNumber;

        return $this;
    }

    /**
     * Get adressNumber
     *
     * @return string 
     */
    public function getAdressNumber()
    {
        return $this->adressNumber;
    }

    /**
     * Set adressNeighbourhood
     *
     * @param string $adressNeighbourhood
     * @return Event
     */
    public function setAdressNeighbourhood($adressNeighbourhood)
    {
        $this->adressNeighbourhood = $adressNeighbourhood;

        return $this;
    }

    /**
     * Get adressNeighbourhood
     *
     * @return string 
     */
    public function getAdressNeighbourhood()
    {
        return $this->adressNeighbourhood;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
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
     * Set url
     *
     * @param string $url
     * @return Event
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
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
     * Set template
     *
     * @param \AGR\IndexBundle\Entity\Template $template
     * @return Event
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
     * Set eventStatus
     *
     * @param \AGR\IndexBundle\Entity\EventStatus $eventStatus
     * @return Event
     */
    public function setEventStatus(\AGR\IndexBundle\Entity\EventStatus $eventStatus = null)
    {
        $this->eventStatus = $eventStatus;

        return $this;
    }

    /**
     * Get eventStatus
     *
     * @return \AGR\IndexBundle\Entity\EventStatus 
     */
    public function getEventStatus()
    {
        return $this->eventStatus;
    }

    /**
     * Set categorySecondary
     *
     * @param \AGR\IndexBundle\Entity\Category $categorySecondary
     * @return Event
     */
    public function setCategorySecondary(\AGR\IndexBundle\Entity\Category $categorySecondary = null)
    {
        $this->categorySecondary = $categorySecondary;

        return $this;
    }

    /**
     * Get categorySecondary
     *
     * @return \AGR\IndexBundle\Entity\Category 
     */
    public function getCategorySecondary()
    {
        return $this->categorySecondary;
    }

    /**
     * Set categoryMain
     *
     * @param \AGR\IndexBundle\Entity\Category $categoryMain
     * @return Event
     */
    public function setCategoryMain(\AGR\IndexBundle\Entity\Category $categoryMain = null)
    {
        $this->categoryMain = $categoryMain;

        return $this;
    }

    /**
     * Get categoryMain
     *
     * @return \AGR\IndexBundle\Entity\Category 
     */
    public function getCategoryMain()
    {
        return $this->categoryMain;
    }

    /**
     * Set bankAccount
     *
     * @param \AGR\IndexBundle\Entity\BankAccount $bankAccount
     * @return Event
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
