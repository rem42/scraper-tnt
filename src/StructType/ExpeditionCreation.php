<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for expeditionCreation StructType
 * Meta information extracted from the WSDL
 * - type: tns:expeditionCreation.
 */
#[\AllowDynamicProperties]
class ExpeditionCreation extends AbstractStructBase
{
    /**
     * The parameters
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ExpeditionCreationParameter $parameters = null;

    /**
     * Constructor method for expeditionCreation.
     *
     * @uses ExpeditionCreation::setParameters()
     */
    public function __construct(?ExpeditionCreationParameter $parameters = null)
    {
        $this
            ->setParameters($parameters)
        ;
    }

    /**
     * Get parameters value.
     */
    public function getParameters(): ?ExpeditionCreationParameter
    {
        return $this->parameters;
    }

    /**
     * Set parameters value.
     */
    public function setParameters(?ExpeditionCreationParameter $parameters = null): self
    {
        $this->parameters = $parameters;

        return $this;
    }
}
