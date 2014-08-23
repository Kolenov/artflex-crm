<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Knife
 *
 * @ORM\Table(name="knife", uniqueConstraints={@ORM\UniqueConstraint(name="id_knife_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="preview_path_UNIQUE", columns={"preview_path"})})
 * @ORM\Entity
 */
class Knife
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="preview_path", type="string", length=255, precision=0, scale=0, nullable=true, unique=false)
     */
    private $previewPath;

    /**
     * @var float
     *
     * @ORM\Column(name="cost", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $cost;


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
     * Set path
     *
     * @param string $path
     * @return Knife
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set previewPath
     *
     * @param string $previewPath
     * @return Knife
     */
    public function setPreviewPath($previewPath)
    {
        $this->previewPath = $previewPath;

        return $this;
    }

    /**
     * Get previewPath
     *
     * @return string 
     */
    public function getPreviewPath()
    {
        return $this->previewPath;
    }

    /**
     * Set cost
     *
     * @param float $cost
     * @return Knife
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return float 
     */
    public function getCost()
    {
        return $this->cost;
    }
}
