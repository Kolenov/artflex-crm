<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materials
 *
 * @ORM\Table(name="materials")
 * @ORM\Entity
 */
class Materials
{
    /**
     * @var integer
     *
     * @ORM\Column(name="material_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $materialId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $vendor;

    /**
     * @var integer
     *
     * @ORM\Column(name="state", type="smallint", precision=0, scale=0, nullable=true, unique=false)
     */
    private $state;


    /**
     * Get materialId
     *
     * @return boolean 
     */
    public function getMaterialId()
    {
        return $this->materialId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Materials
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
     * Set type
     *
     * @param string $type
     * @return Materials
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     * @return Materials
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return string 
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return Materials
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }
}
