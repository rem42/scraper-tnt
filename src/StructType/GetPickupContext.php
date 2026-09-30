<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPickupContext StructType
 * Meta information extracted from the WSDL
 * - type: tns:getPickupContext.
 */
#[\AllowDynamicProperties]
class GetPickupContext extends AbstractStructBase
{
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?PickupContextParameter $parameters = null;

    /**
     * Constructor method for getPickupContext.
     *
     * @uses GetPickupContext::setParameters()
     */
    public function __construct(?PickupContextParameter $parameters = null)
    {
        $this
            ->setParameters($parameters)
        ;
    }

    /**
     * Get parameters value.
     */
    public function getParameters(): ?PickupContextParameter
    {
        return $this->parameters;
    }

    /**
     * Set parameters value.
     */
    public function setParameters(?PickupContextParameter $parameters = null): self
    {
        $this->parameters = $parameters;

        return $this;
    }
}
