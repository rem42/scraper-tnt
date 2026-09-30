<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickUpRequestCreationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:pickUpRequestCreationResponse.
 */
#[\AllowDynamicProperties]
class PickUpRequestCreationResponse extends AbstractStructBase
{
    /**
     * The pickUpNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pickUpNumber = null;

    /**
     * Constructor method for pickUpRequestCreationResponse.
     *
     * @uses PickUpRequestCreationResponse::setPickUpNumber()
     */
    public function __construct(?string $pickUpNumber = null)
    {
        $this
            ->setPickUpNumber($pickUpNumber)
        ;
    }

    /**
     * Get pickUpNumber value.
     */
    public function getPickUpNumber(): ?string
    {
        return $this->pickUpNumber;
    }

    /**
     * Set pickUpNumber value.
     */
    public function setPickUpNumber(?string $pickUpNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($pickUpNumber) && !is_string($pickUpNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickUpNumber, true), gettype($pickUpNumber)), __LINE__);
        }
        $this->pickUpNumber = $pickUpNumber;

        return $this;
    }
}
