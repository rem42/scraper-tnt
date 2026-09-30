<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for trackingByReferenceResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:trackingByReferenceResponse.
 */
#[\AllowDynamicProperties]
class TrackingByReferenceResponse extends AbstractStructBase
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<Parcel>
     */
    protected ?array $Parcel = null;

    /**
     * Constructor method for trackingByReferenceResponse.
     *
     * @uses TrackingByReferenceResponse::setParcel()
     *
     * @param array<Parcel> $parcel
     */
    public function __construct(?array $parcel = null)
    {
        $this
            ->setParcel($parcel)
        ;
    }

    /**
     * Get Parcel value.
     *
     * @return array<Parcel>
     */
    public function getParcel(): ?array
    {
        return $this->Parcel;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcel method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelForArrayConstraintFromSetParcel(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $trackingByReferenceResponseParcelItem) {
            // validation for constraint: itemType
            if (!$trackingByReferenceResponseParcelItem instanceof Parcel) {
                $invalidValues[] = is_object($trackingByReferenceResponseParcelItem) ? get_class($trackingByReferenceResponseParcelItem) : sprintf('%s(%s)', gettype($trackingByReferenceResponseParcelItem), var_export($trackingByReferenceResponseParcelItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Parcel property can only contain items of type \Scraper\ScraperTnt\StructType\Parcel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Parcel value.
     *
     * @param array<Parcel> $parcel
     *
     * @throws \InvalidArgumentException
     */
    public function setParcel(?array $parcel = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelArrayErrorMessage = self::validateParcelForArrayConstraintFromSetParcel($parcel))) {
            throw new \InvalidArgumentException($parcelArrayErrorMessage, __LINE__);
        }
        $this->Parcel = $parcel;

        return $this;
    }

    /**
     * Add item to Parcel value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToParcel(Parcel $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Parcel) {
            throw new \InvalidArgumentException(sprintf('The Parcel property can only contain items of type \Scraper\ScraperTnt\StructType\Parcel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Parcel[] = $item;

        return $this;
    }
}
