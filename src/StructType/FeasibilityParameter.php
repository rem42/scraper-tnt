<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for feasibilityParameter StructType.
 */
#[\AllowDynamicProperties]
class FeasibilityParameter extends AutoValidatedInput
{
    /**
     * The accountNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accountNumber = null;

    /**
     * The receiver
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Receiver $receiver = null;

    /**
     * The sender
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?Sender $sender = null;

    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shippingDate = null;

    /**
     * The shippingDelay
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shippingDelay = null;

    /**
     * Constructor method for feasibilityParameter.
     *
     * @uses FeasibilityParameter::setAccountNumber()
     * @uses FeasibilityParameter::setReceiver()
     * @uses FeasibilityParameter::setSender()
     * @uses FeasibilityParameter::setShippingDate()
     * @uses FeasibilityParameter::setShippingDelay()
     */
    public function __construct(?string $accountNumber = null, ?Receiver $receiver = null, ?Sender $sender = null, ?string $shippingDate = null, ?string $shippingDelay = null)
    {
        $this
            ->setAccountNumber($accountNumber)
            ->setReceiver($receiver)
            ->setSender($sender)
            ->setShippingDate($shippingDate)
            ->setShippingDelay($shippingDelay)
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
     * Get shippingDelay value.
     */
    public function getShippingDelay(): ?string
    {
        return $this->shippingDelay;
    }

    /**
     * Set shippingDelay value.
     */
    public function setShippingDelay(?string $shippingDelay = null): self
    {
        // validation for constraint: string
        if (!is_null($shippingDelay) && !is_string($shippingDelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDelay, true), gettype($shippingDelay)), __LINE__);
        }
        $this->shippingDelay = $shippingDelay;

        return $this;
    }
}
