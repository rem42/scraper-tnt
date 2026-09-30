<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for dropOffPoint StructType.
 */
#[\AllowDynamicProperties]
class DropOffPoint extends FullAddressPlusInfo
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $address = null;

    /**
     * The deliveryFlag
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $deliveryFlag = null;

    /**
     * The xETTCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $xETTCode = null;

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
     * Constructor method for dropOffPoint.
     *
     * @uses DropOffPoint::setAddress()
     * @uses DropOffPoint::setDeliveryFlag()
     * @uses DropOffPoint::setXETTCode()
     * @uses DropOffPoint::setLatitude()
     * @uses DropOffPoint::setLongitude()
     */
    public function __construct(?string $address = null, ?string $deliveryFlag = null, ?string $xETTCode = null, ?float $latitude = null, ?float $longitude = null)
    {
        $this
            ->setAddress($address)
            ->setDeliveryFlag($deliveryFlag)
            ->setXETTCode($xETTCode)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
        ;
    }

    /**
     * Get address value.
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * Set address value.
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->address = $address;

        return $this;
    }

    /**
     * Get deliveryFlag value.
     */
    public function getDeliveryFlag(): ?string
    {
        return $this->deliveryFlag;
    }

    /**
     * Set deliveryFlag value.
     */
    public function setDeliveryFlag(?string $deliveryFlag = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryFlag) && !is_string($deliveryFlag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryFlag, true), gettype($deliveryFlag)), __LINE__);
        }
        $this->deliveryFlag = $deliveryFlag;

        return $this;
    }

    /**
     * Get xETTCode value.
     */
    public function getXETTCode(): ?string
    {
        return $this->xETTCode;
    }

    /**
     * Set xETTCode value.
     */
    public function setXETTCode(?string $xETTCode = null): self
    {
        // validation for constraint: string
        if (!is_null($xETTCode) && !is_string($xETTCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xETTCode, true), gettype($xETTCode)), __LINE__);
        }
        $this->xETTCode = $xETTCode;

        return $this;
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
}
