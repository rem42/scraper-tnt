<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for expeditionCreationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:expeditionCreationResponse.
 */
#[\AllowDynamicProperties]
class ExpeditionCreationResponse extends AbstractStructBase
{
    /**
     * The Expedition
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ExpeditionResponse $Expedition = null;

    /**
     * Constructor method for expeditionCreationResponse.
     *
     * @uses ExpeditionCreationResponse::setExpedition()
     */
    public function __construct(?ExpeditionResponse $expedition = null)
    {
        $this
            ->setExpedition($expedition)
        ;
    }

    /**
     * Get Expedition value.
     */
    public function getExpedition(): ?ExpeditionResponse
    {
        return $this->Expedition;
    }

    /**
     * Set Expedition value.
     */
    public function setExpedition(?ExpeditionResponse $expedition = null): self
    {
        $this->Expedition = $expedition;

        return $this;
    }
}
