<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackingByConsignmentResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackingByConsignmentResponse.
 */
#[\AllowDynamicProperties]
class TrackingByConsignmentResponse extends AbstractStructBase
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Parcel $Parcel = null;

    /**
     * Constructor method for trackingByConsignmentResponse.
     *
     * @uses TrackingByConsignmentResponse::setParcel()
     */
    public function __construct(?Parcel $parcel = null)
    {
        $this
            ->setParcel($parcel)
        ;
    }

    /**
     * Get Parcel value.
     */
    public function getParcel(): ?Parcel
    {
        return $this->Parcel;
    }

    /**
     * Set Parcel value.
     */
    public function setParcel(?Parcel $parcel = null): self
    {
        $this->Parcel = $parcel;

        return $this;
    }
}
