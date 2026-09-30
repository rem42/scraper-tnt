<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for depotInfo StructType.
 */
#[\AllowDynamicProperties]
class DepotInfo extends FullAddressPlusInfo
{
    /**
     * The latitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $latitude = null;

    /**
     * The longitude
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $longitude = null;

    /**
     * The pexCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pexCode = null;

    /**
     * Constructor method for depotInfo.
     *
     * @uses DepotInfo::setLatitude()
     * @uses DepotInfo::setLongitude()
     * @uses DepotInfo::setPexCode()
     */
    public function __construct(?float $latitude = null, ?float $longitude = null, ?string $pexCode = null)
    {
        $this
            ->setLatitude($latitude)
            ->setLongitude($longitude)
            ->setPexCode($pexCode)
        ;
    }

    /**
     * Get latitude value.
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * Set latitude value.
     */
    public function setLatitude(?float $latitude = null): self
    {
        // validation for constraint: float
        if (!is_null($latitude) && !(is_float($latitude) || is_numeric($latitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), gettype($latitude)), __LINE__);
        }
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get longitude value.
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * Set longitude value.
     */
    public function setLongitude(?float $longitude = null): self
    {
        // validation for constraint: float
        if (!is_null($longitude) && !(is_float($longitude) || is_numeric($longitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), gettype($longitude)), __LINE__);
        }
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get pexCode value.
     */
    public function getPexCode(): ?string
    {
        return $this->pexCode;
    }

    /**
     * Set pexCode value.
     */
    public function setPexCode(?string $pexCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pexCode) && !is_string($pexCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pexCode, true), gettype($pexCode)), __LINE__);
        }
        $this->pexCode = $pexCode;

        return $this;
    }
}
