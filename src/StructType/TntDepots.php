<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tntDepots StructType
 * Meta information extracted from the WSDL
 * - type: tns:tntDepots.
 */
#[\AllowDynamicProperties]
class TntDepots extends AbstractStructBase
{
    /**
     * The department
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $department = null;

    /**
     * Constructor method for tntDepots.
     *
     * @uses TntDepots::setDepartment()
     */
    public function __construct(?string $department = null)
    {
        $this
            ->setDepartment($department)
        ;
    }

    /**
     * Get department value.
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }

    /**
     * Set department value.
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;

        return $this;
    }
}
