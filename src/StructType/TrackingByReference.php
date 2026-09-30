<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackingByReference StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackingByReference.
 */
#[\AllowDynamicProperties]
class TrackingByReference extends AbstractStructBase
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accountNumber = null;

    /**
     * The reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $reference = null;

    /**
     * Constructor method for trackingByReference.
     *
     * @uses TrackingByReference::setAccountNumber()
     * @uses TrackingByReference::setReference()
     */
    public function __construct(?string $accountNumber = null, ?string $reference = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setReference($reference)
        ;
    }

    /**
     * Get accountNumber value.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Set accountNumber value.
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get reference value.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Set reference value.
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->reference = $reference;

        return $this;
    }
}
