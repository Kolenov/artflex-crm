<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="FK_calculation_order", columns={"calculation"}), @ORM\Index(name="FK_client_order_idx", columns={"client"}), @ORM\Index(name="FK_manager_order_idx", columns={"manager"})})
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="smallint", nullable=false, unique=false)
     */
    private $state;

    /**
     * @var \Application\Entity\Calculations
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Calculations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calculation", referencedColumnName="calculation_id", nullable=false)
     * })
     */
    private $calculation;

    /**
     * @var \Application\Entity\Clients
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client", referencedColumnName="clients_id", nullable=true)
     * })
     */
    private $client;

    /**
     * @var \User\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="User\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manager", referencedColumnName="id", nullable=true)
     * })
     */
    private $manager;


    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return Orders
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set calculation
     *
     * @param \Application\Entity\Calculations $calculation
     * @return Orders
     */
    public function setCalculation(\Application\Entity\Calculations $calculation = null)
    {
        $this->calculation = $calculation;

        return $this;
    }

    /**
     * Get calculation
     *
     * @return \Application\Entity\Calculations 
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Set client
     *
     * @param \Application\Entity\Clients $client
     * @return Orders
     */
    public function setClient(\Application\Entity\Clients $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Application\Entity\Clients 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set manager
     *
     * @param \User\Entity\Users $manager
     * @return Orders
     */
    public function setManager(\User\Entity\Users $manager = null)
    {
        $this->manager = $manager;

        return $this;
    }

    /**
     * Get manager
     *
     * @return \User\Entity\Users 
     */
    public function getManager()
    {
        return $this->manager;
    }
}
