<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickupContext StructType.
 */
#[\AllowDynamicProperties]
class PickupContext extends AbstractStructBase
{
    /**
     * The cutOffTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $cutOffTime = null;

    /**
     * The pickupOnMorning
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pickupOnMorning = null;

    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shippingDate = null;

    /**
     * Constructor method for pickupContext.
     *
     * @uses PickupContext::setCutOffTime()
     * @uses PickupContext::setPickupOnMorning()
     * @uses PickupContext::setShippingDate()
     */
    public function __construct(?string $cutOffTime = null, ?string $pickupOnMorning = null, ?string $shippingDate = null)
    {
        $this
            ->setCutOffTime($cutOffTime)
            ->setPickupOnMorning($pickupOnMorning)
            ->setShippingDate($shippingDate)
        ;
    }

    /**
     * Get cutOffTime value.
     */
    public function getCutOffTime(): ?string
    {
        return $this->cutOffTime;
    }

    /**
     * Set cutOffTime value.
     */
    public function setCutOffTime(?string $cutOffTime = null): self
    {
        // validation for constraint: string
        if (!is_null($cutOffTime) && !is_string($cutOffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cutOffTime, true), gettype($cutOffTime)), __LINE__);
        }
        $this->cutOffTime = $cutOffTime;

        return $this;
    }

    /**
     * Get pickupOnMorning value.
     */
    public function getPickupOnMorning(): ?string
    {
        return $this->pickupOnMorning;
    }

    /**
     * Set pickupOnMorning value.
     */
    public function setPickupOnMorning(?string $pickupOnMorning = null): self
    {
        // validation for constraint: string
        if (!is_null($pickupOnMorning) && !is_string($pickupOnMorning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupOnMorning, true), gettype($pickupOnMorning)), __LINE__);
        }
        $this->pickupOnMorning = $pickupOnMorning;

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
}
