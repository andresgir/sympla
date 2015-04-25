<?php

namespace AGR\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemplateDetails
 *
 * @ORM\Table(name="template_details", indexes={@ORM\Index(name="fk_template_details_template1_idx", columns={"template_id"})})
 * @ORM\Entity
 */
class TemplateDetails
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=45, nullable=true)
     */
    private $value;

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
     * Set name
     *
     * @param string $name
     * @return TemplateDetails
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
     * Set value
     *
     * @param string $value
     * @return TemplateDetails
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
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
     * @return TemplateDetails
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
}
