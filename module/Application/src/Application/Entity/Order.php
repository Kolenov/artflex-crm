<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 *
 * @ORM\Table(name="order", indexes={@ORM\Index(name="FK_calculation_order", columns={"calculation"}), @ORM\Index(name="FK_client_order_idx", columns={"client"}), @ORM\Index(name="FK_manager_order_idx", columns={"manager"})})
 * @ORM\Entity
 */
class Order
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;

    /**
     * @var \Application\Entity\Calculation
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Calculation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="calculation", referencedColumnName="calculation_id")
     * })
     */
    private $calculation;

    /**
     * @var \Application\Entity\Clients
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client", referencedColumnName="clients_id")
     * })
     */
    private $client;

    /**
     * @var \Application\Entity\Users
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Users")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manager", referencedColumnName="id")
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
     * @return Order
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
     * @param \Application\Entity\Calculation $calculation
     * @return Order
     */
    public function setCalculation(\Application\Entity\Calculation $calculation = null)
    {
        $this->calculation = $calculation;

        return $this;
    }

    /**
     * Get calculation
     *
     * @return \Application\Entity\Calculation 
     */
    public function getCalculation()
    {
        return $this->calculation;
    }

    /**
     * Set client
     *
     * @param \Application\Entity\Clients $client
     * @return Order
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
     * @param \Application\Entity\Users $manager
     * @return Order
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
}
