<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for expeditionResponse StructType.
 */
#[\AllowDynamicProperties]
class ExpeditionResponse extends AbstractStructBase
{
    /**
     * The parcelResponses
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<ParcelResponse>|null
     */
    protected ?array $parcelResponses = null;

    /**
     * The PDFLabels
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $PDFLabels = null;

    /**
     * The pickUpNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pickUpNumber = null;

    /**
     * Constructor method for expeditionResponse.
     *
     * @uses ExpeditionResponse::setParcelResponses()
     * @uses ExpeditionResponse::setPDFLabels()
     * @uses ExpeditionResponse::setPickUpNumber()
     *
     * @param array<ParcelResponse> $parcelResponses
     */
    public function __construct(?array $parcelResponses = null, ?string $pDFLabels = null, ?string $pickUpNumber = null)
    {
        $this
            ->setParcelResponses($parcelResponses)
            ->setPDFLabels($pDFLabels)
            ->setPickUpNumber($pickUpNumber)
        ;
    }

    /**
     * Get parcelResponses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<ParcelResponse>|null
     */
    public function getParcelResponses(): ?array
    {
        return $this->parcelResponses ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setParcelResponses method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelResponses method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateParcelResponsesForArrayConstraintFromSetParcelResponses(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $expeditionResponseParcelResponsesItem) {
            // validation for constraint: itemType
            if (!$expeditionResponseParcelResponsesItem instanceof ParcelResponse) {
                $invalidValues[] = is_object($expeditionResponseParcelResponsesItem) ? get_class($expeditionResponseParcelResponsesItem) : sprintf('%s(%s)', gettype($expeditionResponseParcelResponsesItem), var_export($expeditionResponseParcelResponsesItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The parcelResponses property can only contain items of type \Scraper\ScraperTnt\StructType\ParcelResponse, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set parcelResponses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<ParcelResponse> $parcelResponses
     *
     * @throws \InvalidArgumentException
     */
    public function setParcelResponses(?array $parcelResponses = null): self
    {
        // validation for constraint: array
        if ('' !== ($parcelResponsesArrayErrorMessage = self::validateParcelResponsesForArrayConstraintFromSetParcelResponses($parcelResponses))) {
            throw new \InvalidArgumentException($parcelResponsesArrayErrorMessage, __LINE__);
        }

        if (is_null($parcelResponses) || (is_array($parcelResponses) && empty($parcelResponses))) {
            unset($this->parcelResponses);
        } else {
            $this->parcelResponses = $parcelResponses;
        }

        return $this;
    }

    /**
     * Add item to parcelResponses value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToParcelResponses(ParcelResponse $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof ParcelResponse) {
            throw new \InvalidArgumentException(sprintf('The parcelResponses property can only contain items of type \Scraper\ScraperTnt\StructType\ParcelResponse, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->parcelResponses[] = $item;

        return $this;
    }

    /**
     * Get PDFLabels value.
     */
    public function getPDFLabels(): ?string
    {
        return $this->PDFLabels;
    }

    /**
     * Set PDFLabels value.
     */
    public function setPDFLabels(?string $pDFLabels = null): self
    {
        // validation for constraint: string
        if (!is_null($pDFLabels) && !is_string($pDFLabels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pDFLabels, true), gettype($pDFLabels)), __LINE__);
        }
        $this->PDFLabels = $pDFLabels;

        return $this;
    }

    /**
     * Get pickUpNumber value.
     */
    public function getPickUpNumber(): ?string
    {
        return $this->pickUpNumber;
    }

    /**
     * Set pickUpNumber value.
     */
    public function setPickUpNumber(?string $pickUpNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($pickUpNumber) && !is_string($pickUpNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickUpNumber, true), gettype($pickUpNumber)), __LINE__);
        }
        $this->pickUpNumber = $pickUpNumber;

        return $this;
    }
}
