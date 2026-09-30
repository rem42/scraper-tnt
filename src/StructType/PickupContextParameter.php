<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for pickupContextParameter StructType.
 */
#[\AllowDynamicProperties]
class PickupContextParameter extends AutoValidatedInput
{
    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $city = null;

    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shippingDate = null;

    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $zipCode = null;

    /**
     * Constructor method for pickupContextParameter.
     *
     * @uses PickupContextParameter::setCity()
     * @uses PickupContextParameter::setShippingDate()
     * @uses PickupContextParameter::setZipCode()
     */
    public function __construct(?string $city = null, ?string $shippingDate = null, ?string $zipCode = null)
    {
        $this
            ->setCity($city)
            ->setShippingDate($shippingDate)
            ->setZipCode($zipCode)
        ;
    }

    /**
     * Get city value.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set city value.
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;

        return $this;
    }

    /**
     * Get shippingDate value.
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }

    /**
     * Set shippingDate value.
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;

        return $this;
    }

    /**
     * Get zipCode value.
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode value.
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;

        return $this;
    }
}
