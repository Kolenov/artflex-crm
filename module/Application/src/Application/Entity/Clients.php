<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="FK_manager", columns={"manager_id"}), @ORM\Index(name="FK_deputy", columns={"deputy_id"})})
 * @ORM\Entity
 */
class Clients
{
    /**
     * @var integer
     *
     * @ORM\Column(name="clients_id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clientsId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $street;

    /**
     * @var integer
     *
     * @ORM\Column(name="building", type="smallint", precision=0, scale=0, nullable=true, unique=false)
     */
    private $building;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, precision=0, scale=0, nullable=true, unique=false)
     */
    private $fax;

    /**
     * @var \Application\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manager_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $manager;

    /**
     * @var \Application\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deputy_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $deputy;


    /**
     * Get clientsId
     *
     * @return integer 
     */
    public function getClientsId()
    {
        return $this->clientsId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Clients
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
     * Set country
     *
     * @param string $country
     * @return Clients
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Clients
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set street
     *
     * @param string $street
     * @return Clients
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set building
     *
     * @param integer $building
     * @return Clients
     */
    public function setBuilding($building)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return integer 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Clients
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
     * Set fax
     *
     * @param string $fax
     * @return Clients
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set manager
     *
     * @param \Application\Entity\Users $manager
     * @return Clients
     */
    public function setManager(\Application\Entity\Users $manager = null)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return \Application\Entity\Users 
     */
    public function getManager()
    {
        return $this->manager;
    }

    /**
     * Set deputy
     *
     * @param \Application\Entity\Users $deputy
     * @return Clients
     */
    public function setDeputy(\Application\Entity\Users $deputy = null)
    {
        $this->deputy = $deputy;

        return $this;
    }

    /**
     * Get deputy
     *
     * @return \Application\Entity\Users 
     */
    public function getDeputy()
    {
        return $this->deputy;
    }
}
