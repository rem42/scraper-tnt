<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for expeditionCreationParameter StructType.
 */
#[\AllowDynamicProperties]
class ExpeditionCreationParameter extends AutoValidatedInput
{
    /**
     * The pickUpRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?PickUpRequest $pickUpRequest = null;

    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shippingDate = null;

    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accountNumber = null;

    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Sender $sender = null;

    /**
     * The receiver
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Receiver $receiver = null;

    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $serviceCode = null;

    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $quantity = null;

    /**
     * The parcelsRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?ParcelsRequest $parcelsRequest = null;

    /**
     * The saturdayDelivery
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $saturdayDelivery = null;

    /**
     * The paybackInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?PaybackInfo $paybackInfo = null;

    /**
     * The labelFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $labelFormat = null;

    /**
     * The hazardousMaterial
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hazardousMaterial = null;

    /**
     * Constructor method for expeditionCreationParameter.
     *
     * @uses ExpeditionCreationParameter::setPickUpRequest()
     * @uses ExpeditionCreationParameter::setShippingDate()
     * @uses ExpeditionCreationParameter::setAccountNumber()
     * @uses ExpeditionCreationParameter::setSender()
     * @uses ExpeditionCreationParameter::setReceiver()
     * @uses ExpeditionCreationParameter::setServiceCode()
     * @uses ExpeditionCreationParameter::setQuantity()
     * @uses ExpeditionCreationParameter::setParcelsRequest()
     * @uses ExpeditionCreationParameter::setSaturdayDelivery()
     * @uses ExpeditionCreationParameter::setPaybackInfo()
     * @uses ExpeditionCreationParameter::setLabelFormat()
     * @uses ExpeditionCreationParameter::setHazardousMaterial()
     */
    public function __construct(?PickUpRequest $pickUpRequest = null, ?string $shippingDate = null, ?string $accountNumber = null, ?Sender $sender = null, ?Receiver $receiver = null, ?string $serviceCode = null, ?string $quantity = null, ?ParcelsRequest $parcelsRequest = null, ?string $saturdayDelivery = null, ?PaybackInfo $paybackInfo = null, ?string $labelFormat = null, ?string $hazardousMaterial = null)
    {
        $this
            ->setPickUpRequest($pickUpRequest)
            ->setShippingDate($shippingDate)
            ->setAccountNumber($accountNumber)
            ->setSender($sender)
            ->setReceiver($receiver)
            ->setServiceCode($serviceCode)
            ->setQuantity($quantity)
            ->setParcelsRequest($parcelsRequest)
            ->setSaturdayDelivery($saturdayDelivery)
            ->setPaybackInfo($paybackInfo)
            ->setLabelFormat($labelFormat)
            ->setHazardousMaterial($hazardousMaterial)
        ;
    }

    /**
     * Get pickUpRequest value.
     */
    public function getPickUpRequest(): ?PickUpRequest
    {
        return $this->pickUpRequest;
    }

    /**
     * Set pickUpRequest value.
     */
    public function setPickUpRequest(?PickUpRequest $pickUpRequest = null): self
    {
        $this->pickUpRequest = $pickUpRequest;

        return $this;
    }

    /**
     * Get shippingDate value.
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }

    /**
     * Set shippingDate value.
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDate) && !is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), gettype($shippingDate)), __LINE__);
        }
        $this->shippingDate = $shippingDate;

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
     * Get sender value.
     */
    public function getSender(): ?Sender
    {
        return $this->sender;
    }

    /**
     * Set sender value.
     */
    public function setSender(?Sender $sender = null): self
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get receiver value.
     */
    public function getReceiver(): ?Receiver
    {
        return $this->receiver;
    }

    /**
     * Set receiver value.
     */
    public function setReceiver(?Receiver $receiver = null): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get serviceCode value.
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * Set serviceCode value.
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceCode) && !is_string($serviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;

        return $this;
    }

    /**
     * Get quantity value.
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * Set quantity value.
     */
    public function setQuantity(?string $quantity = null): self
    {
        // validation for constraint: string
        if (!is_null($quantity) && !is_string($quantity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get parcelsRequest value.
     */
    public function getParcelsRequest(): ?ParcelsRequest
    {
        return $this->parcelsRequest;
    }

    /**
     * Set parcelsRequest value.
     */
    public function setParcelsRequest(?ParcelsRequest $parcelsRequest = null): self
    {
        $this->parcelsRequest = $parcelsRequest;

        return $this;
    }

    /**
     * Get saturdayDelivery value.
     */
    public function getSaturdayDelivery(): ?string
    {
        return $this->saturdayDelivery;
    }

    /**
     * Set saturdayDelivery value.
     */
    public function setSaturdayDelivery(?string $saturdayDelivery = null): self
    {
        // validation for constraint: string
        if (!is_null($saturdayDelivery) && !is_string($saturdayDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saturdayDelivery, true), gettype($saturdayDelivery)), __LINE__);
        }
        $this->saturdayDelivery = $saturdayDelivery;

        return $this;
    }

    /**
     * Get paybackInfo value.
     */
    public function getPaybackInfo(): ?PaybackInfo
    {
        return $this->paybackInfo;
    }

    /**
     * Set paybackInfo value.
     */
    public function setPaybackInfo(?PaybackInfo $paybackInfo = null): self
    {
        $this->paybackInfo = $paybackInfo;

        return $this;
    }

    /**
     * Get labelFormat value.
     */
    public function getLabelFormat(): ?string
    {
        return $this->labelFormat;
    }

    /**
     * Set labelFormat value.
     */
    public function setLabelFormat(?string $labelFormat = null): self
    {
        // validation for constraint: string
        if (!is_null($labelFormat) && !is_string($labelFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelFormat, true), gettype($labelFormat)), __LINE__);
        }
        $this->labelFormat = $labelFormat;

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
     */
    public function setHazardousMaterial(?string $hazardousMaterial = null): self
    {
        // validation for constraint: string
        if (!is_null($hazardousMaterial) && !is_string($hazardousMaterial)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hazardousMaterial, true), gettype($hazardousMaterial)), __LINE__);
        }
        $this->hazardousMaterial = $hazardousMaterial;

        return $this;
    }
}
