<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for feasibility StructType
 * Meta information extracted from the WSDL
 * - type: tns:feasibility.
 */
#[\AllowDynamicProperties]
class Feasibility extends AbstractStructBase
{
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?FeasibilityParameter $parameters = null;

    /**
     * Constructor method for feasibility.
     *
     * @uses Feasibility::setParameters()
     */
    public function __construct(?FeasibilityParameter $parameters = null)
    {
        $this
            ->setParameters($parameters)
        ;
    }

    /**
     * Get parameters value.
     */
    public function getParameters(): ?FeasibilityParameter
    {
        return $this->parameters;
    }

    /**
     * Set parameters value.
     */
    public function setParameters(?FeasibilityParameter $parameters = null): self
    {
        $this->parameters = $parameters;

        return $this;
    }
}
