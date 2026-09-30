<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickUpRequestCreation StructType
 * Meta information extracted from the WSDL
 * - type: tns:pickUpRequestCreation.
 */
#[\AllowDynamicProperties]
class PickUpRequestCreation extends AbstractStructBase
{
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?PickupRequestCreationParameter $parameters = null;

    /**
     * Constructor method for pickUpRequestCreation.
     *
     * @uses PickUpRequestCreation::setParameters()
     */
    public function __construct(?PickupRequestCreationParameter $parameters = null)
    {
        $this
            ->setParameters($parameters)
        ;
    }

    /**
     * Get parameters value.
     */
    public function getParameters(): ?PickupRequestCreationParameter
    {
        return $this->parameters;
    }

    /**
     * Set parameters value.
     */
    public function setParameters(?PickupRequestCreationParameter $parameters = null): self
    {
        $this->parameters = $parameters;

        return $this;
    }
}
