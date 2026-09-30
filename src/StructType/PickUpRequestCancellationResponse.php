<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for pickUpRequestCancellationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:pickUpRequestCancellationResponse.
 */
#[\AllowDynamicProperties]
class PickUpRequestCancellationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Cancellation $return = null;

    /**
     * Constructor method for pickUpRequestCancellationResponse.
     *
     * @uses PickUpRequestCancellationResponse::setReturn()
     */
    public function __construct(?Cancellation $return = null)
    {
        $this
            ->setReturn($return)
        ;
    }

    /**
     * Get return value.
     */
    public function getReturn(): ?Cancellation
    {
        return $this->return;
    }

    /**
     * Set return value.
     */
    public function setReturn(?Cancellation $return = null): self
    {
        $this->return = $return;

        return $this;
    }
}
