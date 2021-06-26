<?php

namespace Scraper\ScraperTnt\Soap;

class Parameters
{
    protected ?string $pickUpRequest = null;

    protected ?\DateTime $shippingDate;

    protected ?string $accountNumber = null;

    protected Sender $sender;

    protected Receiver $receiver;

    protected ?string $serviceCode = null;

    protected ?int $quantity = null;

    protected ParcelsRequest $parcelsRequest;

    protected ?string $saturdayDelivery = null;

    protected ?string $paybackInfo = null;

    protected ?string $labelFormat = null;

    protected ?string $hazardousMaterial = null;

    public function __construct()
    {
        $this->shippingDate   = new \DateTime();
        $this->sender         = new Sender();
        $this->receiver       = new Receiver();
        $this->parcelsRequest = new ParcelsRequest();
    }

    public function getPickUpRequest(): ?string
    {
        return $this->pickUpRequest;
    }

    public function setPickUpRequest(?string $pickUpRequest): self
    {
        $this->pickUpRequest = $pickUpRequest;

        return $this;
    }

    public function getShippingDate(): ?\DateTime
    {
        return $this->shippingDate;
    }

    public function setShippingDate(?\DateTime $shippingDate): self
    {
        $this->shippingDate = $shippingDate;

        return $this;
    }

    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    public function getSender(): Sender
    {
        return $this->sender;
    }

    public function setSender(Sender $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReceiver(): Receiver
    {
        return $this->receiver;
    }

    public function setReceiver(Receiver $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    public function setServiceCode(?string $serviceCode): self
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getParcelsRequest(): ParcelsRequest
    {
        return $this->parcelsRequest;
    }

    public function setParcelsRequest(ParcelsRequest $parcelsRequest): self
    {
        $this->parcelsRequest = $parcelsRequest;

        return $this;
    }

    public function getSaturdayDelivery(): ?string
    {
        return $this->saturdayDelivery;
    }

    public function setSaturdayDelivery(?string $saturdayDelivery): self
    {
        $this->saturdayDelivery = $saturdayDelivery;

        return $this;
    }

    public function getPaybackInfo(): ?string
    {
        return $this->paybackInfo;
    }

    public function setPaybackInfo(?string $paybackInfo): self
    {
        $this->paybackInfo = $paybackInfo;

        return $this;
    }

    public function getLabelFormat(): ?string
    {
        return $this->labelFormat;
    }

    public function setLabelFormat(?string $labelFormat): self
    {
        $this->labelFormat = $labelFormat;

        return $this;
    }

    public function getHazardousMaterial(): ?string
    {
        return $this->hazardousMaterial;
    }

    public function setHazardousMaterial(?string $hazardousMaterial): self
    {
        $this->hazardousMaterial = $hazardousMaterial;

        return $this;
    }
}
