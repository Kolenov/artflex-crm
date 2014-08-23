<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsAliasLinker
 *
 * @ORM\Table(name="clients_alias_linker", indexes={@ORM\Index(name="alias_id", columns={"alias_id"})})
 * @ORM\Entity
 */
class ClientsAliasLinker
{
    /**
     * @var \Application\Entity\Clients
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alias_id", referencedColumnName="clients_id", nullable=true)
     * })
     */
    private $alias;

    /**
     * @var \Application\Entity\Clients
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Application\Entity\Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="clients_id", nullable=true)
     * })
     */
    private $client;


    /**
     * Set alias
     *
     * @param \Application\Entity\Clients $alias
     * @return ClientsAliasLinker
     */
    public function setAlias(\Application\Entity\Clients $alias = null)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return \Application\Entity\Clients 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set client
     *
     * @param \Application\Entity\Clients $client
     * @return ClientsAliasLinker
     */
    public function setClient(\Application\Entity\Clients $client)
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
}
