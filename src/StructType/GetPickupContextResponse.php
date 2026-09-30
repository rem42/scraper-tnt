<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getPickupContextResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getPickupContextResponse.
 */
#[\AllowDynamicProperties]
class GetPickupContextResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?PickupContext $return = null;

    /**
     * Constructor method for getPickupContextResponse.
     *
     * @uses GetPickupContextResponse::setReturn()
     */
    public function __construct(?PickupContext $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?PickupContext
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?PickupContext $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
