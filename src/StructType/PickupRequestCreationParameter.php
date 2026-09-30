<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for pickupRequestCreationParameter StructType.
 */
#[\AllowDynamicProperties]
class PickupRequestCreationParameter extends AutoValidatedInput
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accountNumber = null;

    /**
     * The customerReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $customerReference = null;

    /**
     * The hazardousMaterial
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $hazardousMaterial = null;

    /**
     * The labelsProvided
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $labelsProvided = null;

    /**
     * The notification
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Notification $notification = null;

    /**
     * The quantity
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $quantity = null;

    /**
     * The receiver
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Receiver $receiver = null;

    /**
     * The saturdayDelivery
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $saturdayDelivery = null;

    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Sender $sender = null;

    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $serviceCode = null;

    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shippingDate = null;

    /**
     * Constructor method for pickupRequestCreationParameter.
     *
     * @uses PickupRequestCreationParameter::setAccountNumber()
     * @uses PickupRequestCreationParameter::setCustomerReference()
     * @uses PickupRequestCreationParameter::setHazardousMaterial()
     * @uses PickupRequestCreationParameter::setLabelsProvided()
     * @uses PickupRequestCreationParameter::setNotification()
     * @uses PickupRequestCreationParameter::setQuantity()
     * @uses PickupRequestCreationParameter::setReceiver()
     * @uses PickupRequestCreationParameter::setSaturdayDelivery()
     * @uses PickupRequestCreationParameter::setSender()
     * @uses PickupRequestCreationParameter::setServiceCode()
     * @uses PickupRequestCreationParameter::setShippingDate()
     */
    public function __construct(?string $accountNumber = null, ?string $customerReference = null, ?string $hazardousMaterial = null, ?string $labelsProvided = null, ?Notification $notification = null, ?string $quantity = null, ?Receiver $receiver = null, ?string $saturdayDelivery = null, ?Sender $sender = null, ?string $serviceCode = null, ?string $shippingDate = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setCustomerReference($customerReference)
            ->setHazardousMaterial($hazardousMaterial)
            ->setLabelsProvided($labelsProvided)
            ->setNotification($notification)
            ->setQuantity($quantity)
            ->setReceiver($receiver)
            ->setSaturdayDelivery($saturdayDelivery)
            ->setSender($sender)
            ->setServiceCode($serviceCode)
            ->setShippingDate($shippingDate)
        ;
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
     * Get customerReference value.
     */
    public function getCustomerReference(): ?string
    {
        return $this->customerReference;
    }

    /**
     * Set customerReference value.
     */
    public function setCustomerReference(?string $customerReference = null): self
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerReference, true), gettype($customerReference)), __LINE__);
        }
        $this->customerReference = $customerReference;

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

    /**
     * Get labelsProvided value.
     */
    public function getLabelsProvided(): ?string
    {
        return $this->labelsProvided;
    }

    /**
     * Set labelsProvided value.
     */
    public function setLabelsProvided(?string $labelsProvided = null): self
    {
        // validation for constraint: string
        if (!is_null($labelsProvided) && !is_string($labelsProvided)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelsProvided, true), gettype($labelsProvided)), __LINE__);
        }
        $this->labelsProvided = $labelsProvided;

        return $this;
    }

    /**
     * Get notification value.
     */
    public function getNotification(): ?Notification
    {
        return $this->notification;
    }

    /**
     * Set notification value.
     */
    public function setNotification(?Notification $notification = null): self
    {
        $this->notification = $notification;

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
}
