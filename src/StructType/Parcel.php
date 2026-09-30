<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcel StructType.
 */
#[\AllowDynamicProperties]
class Parcel extends AbstractStructBase
{
    /**
     * The longStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<string>|null
     */
    protected ?array $longStatus = null;

    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accountNumber = null;

    /**
     * The consignmentNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $consignmentNumber = null;

    /**
     * The dropOffPoint
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DropOffPoint $dropOffPoint = null;

    /**
     * The events
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Event $events = null;

    /**
     * The hazardousMaterial
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hazardousMaterial = null;

    /**
     * The primaryPODUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $primaryPODUrl = null;

    /**
     * The receiver
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?FullAddress $receiver = null;

    /**
     * The reference
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $reference = null;

    /**
     * The secondaryPODUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $secondaryPODUrl = null;

    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?FullAddress $sender = null;

    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $service = null;

    /**
     * The shortStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shortStatus = null;

    /**
     * The statusCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $statusCode = null;

    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?float $weight = null;

    /**
     * Constructor method for parcel.
     *
     * @uses Parcel::setLongStatus()
     * @uses Parcel::setAccountNumber()
     * @uses Parcel::setConsignmentNumber()
     * @uses Parcel::setDropOffPoint()
     * @uses Parcel::setEvents()
     * @uses Parcel::setHazardousMaterial()
     * @uses Parcel::setPrimaryPODUrl()
     * @uses Parcel::setReceiver()
     * @uses Parcel::setReference()
     * @uses Parcel::setSecondaryPODUrl()
     * @uses Parcel::setSender()
     * @uses Parcel::setService()
     * @uses Parcel::setShortStatus()
     * @uses Parcel::setStatusCode()
     * @uses Parcel::setWeight()
     *
     * @param array<string> $longStatus
     */
    public function __construct(?array $longStatus = null, ?string $accountNumber = null, ?string $consignmentNumber = null, ?DropOffPoint $dropOffPoint = null, ?Event $events = null, ?string $hazardousMaterial = null, ?string $primaryPODUrl = null, ?FullAddress $receiver = null, ?string $reference = null, ?string $secondaryPODUrl = null, ?FullAddress $sender = null, ?string $service = null, ?string $shortStatus = null, ?string $statusCode = null, ?float $weight = null)
    {
        $this
            ->setLongStatus($longStatus)
            ->setAccountNumber($accountNumber)
            ->setConsignmentNumber($consignmentNumber)
            ->setDropOffPoint($dropOffPoint)
            ->setEvents($events)
            ->setHazardousMaterial($hazardousMaterial)
            ->setPrimaryPODUrl($primaryPODUrl)
            ->setReceiver($receiver)
            ->setReference($reference)
            ->setSecondaryPODUrl($secondaryPODUrl)
            ->setSender($sender)
            ->setService($service)
            ->setShortStatus($shortStatus)
            ->setStatusCode($statusCode)
            ->setWeight($weight)
        ;
    }

    /**
     * Get longStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<string>|null
     */
    public function getLongStatus(): ?array
    {
        return $this->longStatus ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLongStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLongStatus method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLongStatusForArrayConstraintFromSetLongStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $parcelLongStatusItem) {
            // validation for constraint: itemType
            if (!is_string($parcelLongStatusItem)) {
                $invalidValues[] = is_object($parcelLongStatusItem) ? get_class($parcelLongStatusItem) : sprintf('%s(%s)', gettype($parcelLongStatusItem), var_export($parcelLongStatusItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The longStatus property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set longStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<string> $longStatus
     *
     * @throws \InvalidArgumentException
     */
    public function setLongStatus(?array $longStatus = null): self
    {
        // validation for constraint: array
        if ('' !== ($longStatusArrayErrorMessage = self::validateLongStatusForArrayConstraintFromSetLongStatus($longStatus))) {
            throw new \InvalidArgumentException($longStatusArrayErrorMessage, __LINE__);
        }

        if (is_null($longStatus) || (is_array($longStatus) && empty($longStatus))) {
            unset($this->longStatus);
        } else {
            $this->longStatus = $longStatus;
        }

        return $this;
    }

    /**
     * Add item to longStatus value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToLongStatus(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The longStatus property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->longStatus[] = $item;

        return $this;
    }

    /**
     * Get accountNumber value.
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Set accountNumber value.
     */
    public function setAccountNumber(?string $accountNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNumber) && !is_string($accountNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNumber, true), gettype($accountNumber)), __LINE__);
        }
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * Get consignmentNumber value.
     */
    public function getConsignmentNumber(): ?string
    {
        return $this->consignmentNumber;
    }

    /**
     * Set consignmentNumber value.
     */
    public function setConsignmentNumber(?string $consignmentNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($consignmentNumber) && !is_string($consignmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($consignmentNumber, true), gettype($consignmentNumber)), __LINE__);
        }
        $this->consignmentNumber = $consignmentNumber;

        return $this;
    }

    /**
     * Get dropOffPoint value.
     */
    public function getDropOffPoint(): ?DropOffPoint
    {
        return $this->dropOffPoint;
    }

    /**
     * Set dropOffPoint value.
     */
    public function setDropOffPoint(?DropOffPoint $dropOffPoint = null): self
    {
        $this->dropOffPoint = $dropOffPoint;

        return $this;
    }

    /**
     * Get events value.
     */
    public function getEvents(): ?Event
    {
        return $this->events;
    }

    /**
     * Set events value.
     */
    public function setEvents(?Event $events = null): self
    {
        $this->events = $events;

        return $this;
    }

    /**
     * Get hazardousMaterial value.
     */
    public function getHazardousMaterial(): ?string
    {
        return $this->hazardousMaterial;
    }

    /**
     * Set hazardousMaterial value.
     *
     * @uses \Scraper\ScraperTnt\EnumType\TypeMatiereDangereuse::valueIsValid()
     * @uses \Scraper\ScraperTnt\EnumType\TypeMatiereDangereuse::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setHazardousMaterial(?string $hazardousMaterial = null): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperTnt\EnumType\TypeMatiereDangereuse::valueIsValid($hazardousMaterial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperTnt\EnumType\TypeMatiereDangereuse', is_array($hazardousMaterial) ? implode(', ', $hazardousMaterial) : var_export($hazardousMaterial, true), implode(', ', \Scraper\ScraperTnt\EnumType\TypeMatiereDangereuse::getValidValues())), __LINE__);
        }
        $this->hazardousMaterial = $hazardousMaterial;

        return $this;
    }

    /**
     * Get primaryPODUrl value.
     */
    public function getPrimaryPODUrl(): ?string
    {
        return $this->primaryPODUrl;
    }

    /**
     * Set primaryPODUrl value.
     */
    public function setPrimaryPODUrl(?string $primaryPODUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($primaryPODUrl) && !is_string($primaryPODUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primaryPODUrl, true), gettype($primaryPODUrl)), __LINE__);
        }
        $this->primaryPODUrl = $primaryPODUrl;

        return $this;
    }

    /**
     * Get receiver value.
     */
    public function getReceiver(): ?FullAddress
    {
        return $this->receiver;
    }

    /**
     * Set receiver value.
     */
    public function setReceiver(?FullAddress $receiver = null): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get reference value.
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Set reference value.
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get secondaryPODUrl value.
     */
    public function getSecondaryPODUrl(): ?string
    {
        return $this->secondaryPODUrl;
    }

    /**
     * Set secondaryPODUrl value.
     */
    public function setSecondaryPODUrl(?string $secondaryPODUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($secondaryPODUrl) && !is_string($secondaryPODUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondaryPODUrl, true), gettype($secondaryPODUrl)), __LINE__);
        }
        $this->secondaryPODUrl = $secondaryPODUrl;

        return $this;
    }

    /**
     * Get sender value.
     */
    public function getSender(): ?FullAddress
    {
        return $this->sender;
    }

    /**
     * Set sender value.
     */
    public function setSender(?FullAddress $sender = null): self
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get service value.
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * Set service value.
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;

        return $this;
    }

    /**
     * Get shortStatus value.
     */
    public function getShortStatus(): ?string
    {
        return $this->shortStatus;
    }

    /**
     * Set shortStatus value.
     */
    public function setShortStatus(?string $shortStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($shortStatus) && !is_string($shortStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shortStatus, true), gettype($shortStatus)), __LINE__);
        }
        $this->shortStatus = $shortStatus;

        return $this;
    }

    /**
     * Get statusCode value.
     */
    public function getStatusCode(): ?string
    {
        return $this->statusCode;
    }

    /**
     * Set statusCode value.
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Get weight value.
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * Set weight value.
     */
    public function setWeight(?float $weight = null): self
    {
        // validation for constraint: float
        if (!is_null($weight) && !(is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;

        return $this;
    }
}
