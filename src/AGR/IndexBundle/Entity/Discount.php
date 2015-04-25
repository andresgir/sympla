<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discount
 *
 * @ORM\Table(name="discount")
 * @ORM\Entity
 */
class Discount
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_name", type="string", length=45, nullable=false)
     */
    private $codeName;

    /**
     * @var string
     *
     * @ORM\Column(name="value_percentage", type="string", length=45, nullable=true)
     */
    private $valuePercentage;

    /**
     * @var string
     *
     * @ORM\Column(name="value_fixed", type="string", length=45, nullable=true)
     */
    private $valueFixed;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity_left", type="integer", nullable=true)
     */
    private $quantityLeft;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_unlimited", type="integer", nullable=false)
     */
    private $isUnlimited;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set codeName
     *
     * @param string $codeName
     * @return Discount
     */
    public function setCodeName($codeName)
    {
        $this->codeName = $codeName;

        return $this;
    }

    /**
     * Get codeName
     *
     * @return string 
     */
    public function getCodeName()
    {
        return $this->codeName;
    }

    /**
     * Set valuePercentage
     *
     * @param string $valuePercentage
     * @return Discount
     */
    public function setValuePercentage($valuePercentage)
    {
        $this->valuePercentage = $valuePercentage;

        return $this;
    }

    /**
     * Get valuePercentage
     *
     * @return string 
     */
    public function getValuePercentage()
    {
        return $this->valuePercentage;
    }

    /**
     * Set valueFixed
     *
     * @param string $valueFixed
     * @return Discount
     */
    public function setValueFixed($valueFixed)
    {
        $this->valueFixed = $valueFixed;

        return $this;
    }

    /**
     * Get valueFixed
     *
     * @return string 
     */
    public function getValueFixed()
    {
        return $this->valueFixed;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Discount
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set quantityLeft
     *
     * @param integer $quantityLeft
     * @return Discount
     */
    public function setQuantityLeft($quantityLeft)
    {
        $this->quantityLeft = $quantityLeft;

        return $this;
    }

    /**
     * Get quantityLeft
     *
     * @return integer 
     */
    public function getQuantityLeft()
    {
        return $this->quantityLeft;
    }

    /**
     * Set isUnlimited
     *
     * @param integer $isUnlimited
     * @return Discount
     */
    public function setIsUnlimited($isUnlimited)
    {
        $this->isUnlimited = $isUnlimited;

        return $this;
    }

    /**
     * Get isUnlimited
     *
     * @return integer 
     */
    public function getIsUnlimited()
    {
        return $this->isUnlimited;
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
}
