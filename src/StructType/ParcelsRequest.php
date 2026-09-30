<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for parcelsRequest StructType.
 */
#[\AllowDynamicProperties]
class ParcelsRequest extends AutoValidatedInput
{
    /**
     * The parcelRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<ParcelRequest>|null
     */
    protected ?array $parcelRequest = null;

    /**
     * Constructor method for parcelsRequest.
     *
     * @uses ParcelsRequest::setParcelRequest()
     *
     * @param array<ParcelRequest> $parcelRequest
     */
    public function __construct(?array $parcelRequest = null)
    {
        $this
            ->setParcelRequest($parcelRequest)
        ;
    }

    /**
     * Get parcelRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<ParcelRequest>|null
     */
    public function getParcelRequest(): ?array
    {
        return $this->parcelRequest ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setParcelRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelRequest method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelRequestForArrayConstraintFromSetParcelRequest(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $parcelsRequestParcelRequestItem) {
            // validation for constraint: itemType
            if (!$parcelsRequestParcelRequestItem instanceof ParcelRequest) {
                $invalidValues[] = is_object($parcelsRequestParcelRequestItem) ? get_class($parcelsRequestParcelRequestItem) : sprintf('%s(%s)', gettype($parcelsRequestParcelRequestItem), var_export($parcelsRequestParcelRequestItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The parcelRequest property can only contain items of type \Scraper\ScraperTnt\StructType\ParcelRequest, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set parcelRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<ParcelRequest> $parcelRequest
     *
     * @throws \InvalidArgumentException
     */
    public function setParcelRequest(?array $parcelRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelRequestArrayErrorMessage = self::validateParcelRequestForArrayConstraintFromSetParcelRequest($parcelRequest))) {
            throw new \InvalidArgumentException($parcelRequestArrayErrorMessage, __LINE__);
        }

        if (is_null($parcelRequest) || (is_array($parcelRequest) && empty($parcelRequest))) {
            unset($this->parcelRequest);
        } else {
            $this->parcelRequest = $parcelRequest;
        }

        return $this;
    }

    /**
     * Add item to parcelRequest value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToParcelRequest(ParcelRequest $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ParcelRequest) {
            throw new \InvalidArgumentException(sprintf('The parcelRequest property can only contain items of type \Scraper\ScraperTnt\StructType\ParcelRequest, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelRequest[] = $item;

        return $this;
    }
}
