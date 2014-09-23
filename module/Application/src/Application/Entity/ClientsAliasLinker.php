<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientsAliasLinker
 *
 * @ORM\Table(name="clients_alias_linker", indexes={@ORM\Index(name="IDX_1BD617F15E564AE2", columns={"alias_id"})})
 * @ORM\Entity
 */
class ClientsAliasLinker
{
    /**
     * @var \Application\Entity\Clients
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Application\Entity\Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="clients_id")
     * })
     */
    private $client;

    /**
     * @var \Application\Entity\Clients
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="alias_id", referencedColumnName="clients_id")
     * })
     */
    private $alias;


}
