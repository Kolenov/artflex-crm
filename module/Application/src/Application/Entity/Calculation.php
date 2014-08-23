<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calculation
 *
 * @ORM\Table(name="calculation", indexes={@ORM\Index(name="FK_material_idx", columns={"material"}), @ORM\Index(name="FK_knife_calculation_idx", columns={"knife_id"})})
 * @ORM\Entity
 */
class Calculation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="calculation_id", type="integer", precision=0, scale=0, nullable=false, unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $calculationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sticker_quantity", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $stickerQuantity;

    /**
     * @var float
     *
     * @ORM\Column(name="sticker_width", type="float", precision=0, scale=0, nullable=false, unique=false)
     */
    private $stickerWidth;

    /**
     * @var float
     *
     * @ORM\Column(name="sticker_height", type="float", precision=0, scale=0, nullable=false, unique=false)
     */
    private $stickerHeight;

    /**
     * @var float
     *
     * @ORM\Column(name="material_width", type="float", precision=0, scale=0, nullable=false, unique=false)
     */
    private $materialWidth;

    /**
     * @var float
     *
     * @ORM\Column(name="material_height", type="float", precision=0, scale=0, nullable=true, unique=false)
     */
    private $materialHeight;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_quantity", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateQuantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_new", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateNew;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_cyan", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateCyan;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_magenta", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateMagenta;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_yellow", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateYellow;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_black", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateBlack;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_pantone", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $platePantone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_varnish_uv", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateVarnishUv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_varnish_uv_selective", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateVarnishUvSelective;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_white", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateWhite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="trafaret_white", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $trafaretWhite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="trafaret_varnish", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $trafaretVarnish;

    /**
     * @var boolean
     *
     * @ORM\Column(name="trafaret_pantone", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $trafaretPantone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lamination", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $lamination;

    /**
     * @var boolean
     *
     * @ORM\Column(name="knife_new", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $knifeNew;

    /**
     * @var boolean
     *
     * @ORM\Column(name="plate_foil", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $plateFoil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hot_foil", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $hotFoil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="embossing", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $embossing;

    /**
     * @var float
     *
     * @ORM\Column(name="embossing_width", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $embossingWidth;

    /**
     * @var float
     *
     * @ORM\Column(name="embossing_height", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $embossingHeight;

    /**
     * @var boolean
     *
     * @ORM\Column(name="embossing_sticker_quantity", type="boolean", precision=0, scale=0, nullable=true, unique=false)
     */
    private $embossingStickerQuantity;

    /**
     * @var float
     *
     * @ORM\Column(name="discount", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $discount;

    /**
     * @var float
     *
     * @ORM\Column(name="exchange_rates", type="float", precision=10, scale=0, nullable=true, unique=false)
     */
    private $exchangeRates;

    /**
     * @var \Application\Entity\Knife
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Knife")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="knife_id", referencedColumnName="id", nullable=true)
     * })
     */
    private $knife;

    /**
     * @var \Application\Entity\Material
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Material")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="material", referencedColumnName="material_id", nullable=true)
     * })
     */
    private $material;


    /**
     * Get calculationId
     *
     * @return integer 
     */
    public function getCalculationId()
    {
        return $this->calculationId;
    }

    /**
     * Set stickerQuantity
     *
     * @param integer $stickerQuantity
     * @return Calculation
     */
    public function setStickerQuantity($stickerQuantity)
    {
        $this->stickerQuantity = $stickerQuantity;

        return $this;
    }

    /**
     * Get stickerQuantity
     *
     * @return integer 
     */
    public function getStickerQuantity()
    {
        return $this->stickerQuantity;
    }

    /**
     * Set stickerWidth
     *
     * @param float $stickerWidth
     * @return Calculation
     */
    public function setStickerWidth($stickerWidth)
    {
        $this->stickerWidth = $stickerWidth;

        return $this;
    }

    /**
     * Get stickerWidth
     *
     * @return float 
     */
    public function getStickerWidth()
    {
        return $this->stickerWidth;
    }

    /**
     * Set stickerHeight
     *
     * @param float $stickerHeight
     * @return Calculation
     */
    public function setStickerHeight($stickerHeight)
    {
        $this->stickerHeight = $stickerHeight;

        return $this;
    }

    /**
     * Get stickerHeight
     *
     * @return float 
     */
    public function getStickerHeight()
    {
        return $this->stickerHeight;
    }

    /**
     * Set materialWidth
     *
     * @param float $materialWidth
     * @return Calculation
     */
    public function setMaterialWidth($materialWidth)
    {
        $this->materialWidth = $materialWidth;

        return $this;
    }

    /**
     * Get materialWidth
     *
     * @return float 
     */
    public function getMaterialWidth()
    {
        return $this->materialWidth;
    }

    /**
     * Set materialHeight
     *
     * @param float $materialHeight
     * @return Calculation
     */
    public function setMaterialHeight($materialHeight)
    {
        $this->materialHeight = $materialHeight;

        return $this;
    }

    /**
     * Get materialHeight
     *
     * @return float 
     */
    public function getMaterialHeight()
    {
        return $this->materialHeight;
    }

    /**
     * Set plateQuantity
     *
     * @param boolean $plateQuantity
     * @return Calculation
     */
    public function setPlateQuantity($plateQuantity)
    {
        $this->plateQuantity = $plateQuantity;

        return $this;
    }

    /**
     * Get plateQuantity
     *
     * @return boolean 
     */
    public function getPlateQuantity()
    {
        return $this->plateQuantity;
    }

    /**
     * Set plateNew
     *
     * @param boolean $plateNew
     * @return Calculation
     */
    public function setPlateNew($plateNew)
    {
        $this->plateNew = $plateNew;

        return $this;
    }

    /**
     * Get plateNew
     *
     * @return boolean 
     */
    public function getPlateNew()
    {
        return $this->plateNew;
    }

    /**
     * Set plateCyan
     *
     * @param boolean $plateCyan
     * @return Calculation
     */
    public function setPlateCyan($plateCyan)
    {
        $this->plateCyan = $plateCyan;

        return $this;
    }

    /**
     * Get plateCyan
     *
     * @return boolean 
     */
    public function getPlateCyan()
    {
        return $this->plateCyan;
    }

    /**
     * Set plateMagenta
     *
     * @param boolean $plateMagenta
     * @return Calculation
     */
    public function setPlateMagenta($plateMagenta)
    {
        $this->plateMagenta = $plateMagenta;

        return $this;
    }

    /**
     * Get plateMagenta
     *
     * @return boolean 
     */
    public function getPlateMagenta()
    {
        return $this->plateMagenta;
    }

    /**
     * Set plateYellow
     *
     * @param boolean $plateYellow
     * @return Calculation
     */
    public function setPlateYellow($plateYellow)
    {
        $this->plateYellow = $plateYellow;

        return $this;
    }

    /**
     * Get plateYellow
     *
     * @return boolean 
     */
    public function getPlateYellow()
    {
        return $this->plateYellow;
    }

    /**
     * Set plateBlack
     *
     * @param boolean $plateBlack
     * @return Calculation
     */
    public function setPlateBlack($plateBlack)
    {
        $this->plateBlack = $plateBlack;

        return $this;
    }

    /**
     * Get plateBlack
     *
     * @return boolean 
     */
    public function getPlateBlack()
    {
        return $this->plateBlack;
    }

    /**
     * Set platePantone
     *
     * @param boolean $platePantone
     * @return Calculation
     */
    public function setPlatePantone($platePantone)
    {
        $this->platePantone = $platePantone;

        return $this;
    }

    /**
     * Get platePantone
     *
     * @return boolean 
     */
    public function getPlatePantone()
    {
        return $this->platePantone;
    }

    /**
     * Set plateVarnishUv
     *
     * @param boolean $plateVarnishUv
     * @return Calculation
     */
    public function setPlateVarnishUv($plateVarnishUv)
    {
        $this->plateVarnishUv = $plateVarnishUv;

        return $this;
    }

    /**
     * Get plateVarnishUv
     *
     * @return boolean 
     */
    public function getPlateVarnishUv()
    {
        return $this->plateVarnishUv;
    }

    /**
     * Set plateVarnishUvSelective
     *
     * @param boolean $plateVarnishUvSelective
     * @return Calculation
     */
    public function setPlateVarnishUvSelective($plateVarnishUvSelective)
    {
        $this->plateVarnishUvSelective = $plateVarnishUvSelective;

        return $this;
    }

    /**
     * Get plateVarnishUvSelective
     *
     * @return boolean 
     */
    public function getPlateVarnishUvSelective()
    {
        return $this->plateVarnishUvSelective;
    }

    /**
     * Set plateWhite
     *
     * @param boolean $plateWhite
     * @return Calculation
     */
    public function setPlateWhite($plateWhite)
    {
        $this->plateWhite = $plateWhite;

        return $this;
    }

    /**
     * Get plateWhite
     *
     * @return boolean 
     */
    public function getPlateWhite()
    {
        return $this->plateWhite;
    }

    /**
     * Set trafaretWhite
     *
     * @param boolean $trafaretWhite
     * @return Calculation
     */
    public function setTrafaretWhite($trafaretWhite)
    {
        $this->trafaretWhite = $trafaretWhite;

        return $this;
    }

    /**
     * Get trafaretWhite
     *
     * @return boolean 
     */
    public function getTrafaretWhite()
    {
        return $this->trafaretWhite;
    }

    /**
     * Set trafaretVarnish
     *
     * @param boolean $trafaretVarnish
     * @return Calculation
     */
    public function setTrafaretVarnish($trafaretVarnish)
    {
        $this->trafaretVarnish = $trafaretVarnish;

        return $this;
    }

    /**
     * Get trafaretVarnish
     *
     * @return boolean 
     */
    public function getTrafaretVarnish()
    {
        return $this->trafaretVarnish;
    }

    /**
     * Set trafaretPantone
     *
     * @param boolean $trafaretPantone
     * @return Calculation
     */
    public function setTrafaretPantone($trafaretPantone)
    {
        $this->trafaretPantone = $trafaretPantone;

        return $this;
    }

    /**
     * Get trafaretPantone
     *
     * @return boolean 
     */
    public function getTrafaretPantone()
    {
        return $this->trafaretPantone;
    }

    /**
     * Set lamination
     *
     * @param boolean $lamination
     * @return Calculation
     */
    public function setLamination($lamination)
    {
        $this->lamination = $lamination;

        return $this;
    }

    /**
     * Get lamination
     *
     * @return boolean 
     */
    public function getLamination()
    {
        return $this->lamination;
    }

    /**
     * Set knifeNew
     *
     * @param boolean $knifeNew
     * @return Calculation
     */
    public function setKnifeNew($knifeNew)
    {
        $this->knifeNew = $knifeNew;

        return $this;
    }

    /**
     * Get knifeNew
     *
     * @return boolean 
     */
    public function getKnifeNew()
    {
        return $this->knifeNew;
    }

    /**
     * Set plateFoil
     *
     * @param boolean $plateFoil
     * @return Calculation
     */
    public function setPlateFoil($plateFoil)
    {
        $this->plateFoil = $plateFoil;

        return $this;
    }

    /**
     * Get plateFoil
     *
     * @return boolean 
     */
    public function getPlateFoil()
    {
        return $this->plateFoil;
    }

    /**
     * Set hotFoil
     *
     * @param boolean $hotFoil
     * @return Calculation
     */
    public function setHotFoil($hotFoil)
    {
        $this->hotFoil = $hotFoil;

        return $this;
    }

    /**
     * Get hotFoil
     *
     * @return boolean 
     */
    public function getHotFoil()
    {
        return $this->hotFoil;
    }

    /**
     * Set embossing
     *
     * @param boolean $embossing
     * @return Calculation
     */
    public function setEmbossing($embossing)
    {
        $this->embossing = $embossing;

        return $this;
    }

    /**
     * Get embossing
     *
     * @return boolean 
     */
    public function getEmbossing()
    {
        return $this->embossing;
    }

    /**
     * Set embossingWidth
     *
     * @param float $embossingWidth
     * @return Calculation
     */
    public function setEmbossingWidth($embossingWidth)
    {
        $this->embossingWidth = $embossingWidth;

        return $this;
    }

    /**
     * Get embossingWidth
     *
     * @return float 
     */
    public function getEmbossingWidth()
    {
        return $this->embossingWidth;
    }

    /**
     * Set embossingHeight
     *
     * @param float $embossingHeight
     * @return Calculation
     */
    public function setEmbossingHeight($embossingHeight)
    {
        $this->embossingHeight = $embossingHeight;

        return $this;
    }

    /**
     * Get embossingHeight
     *
     * @return float 
     */
    public function getEmbossingHeight()
    {
        return $this->embossingHeight;
    }

    /**
     * Set embossingStickerQuantity
     *
     * @param boolean $embossingStickerQuantity
     * @return Calculation
     */
    public function setEmbossingStickerQuantity($embossingStickerQuantity)
    {
        $this->embossingStickerQuantity = $embossingStickerQuantity;

        return $this;
    }

    /**
     * Get embossingStickerQuantity
     *
     * @return boolean 
     */
    public function getEmbossingStickerQuantity()
    {
        return $this->embossingStickerQuantity;
    }

    /**
     * Set discount
     *
     * @param float $discount
     * @return Calculation
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return float 
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set exchangeRates
     *
     * @param float $exchangeRates
     * @return Calculation
     */
    public function setExchangeRates($exchangeRates)
    {
        $this->exchangeRates = $exchangeRates;

        return $this;
    }

    /**
     * Get exchangeRates
     *
     * @return float 
     */
    public function getExchangeRates()
    {
        return $this->exchangeRates;
    }

    /**
     * Set knife
     *
     * @param \Application\Entity\Knife $knife
     * @return Calculation
     */
    public function setKnife(\Application\Entity\Knife $knife = null)
    {
        $this->knife = $knife;

        return $this;
    }

    /**
     * Get knife
     *
     * @return \Application\Entity\Knife 
     */
    public function getKnife()
    {
        return $this->knife;
    }

    /**
     * Set material
     *
     * @param \Application\Entity\Material $material
     * @return Calculation
     */
    public function setMaterial(\Application\Entity\Material $material = null)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return \Application\Entity\Material 
     */
    public function getMaterial()
    {
        return $this->material;
    }
}
