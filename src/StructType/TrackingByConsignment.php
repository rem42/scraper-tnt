<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackingByConsignment StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackingByConsignment.
 */
#[\AllowDynamicProperties]
class TrackingByConsignment extends AbstractStructBase
{
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $parcelNumber = null;

    /**
     * Constructor method for trackingByConsignment.
     *
     * @uses TrackingByConsignment::setParcelNumber()
     */
    public function __construct(?string $parcelNumber = null)
    {
        $this
            ->setParcelNumber($parcelNumber)
        ;
    }

    /**
     * Get parcelNumber value.
     */
    public function getParcelNumber(): ?string
    {
        return $this->parcelNumber;
    }

    /**
     * Set parcelNumber value.
     */
    public function setParcelNumber(?string $parcelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;

        return $this;
    }
}
