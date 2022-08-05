<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Soap;

class Parameters
{
    public ?string $pickUpRequest = null;
    public ?\DateTime $shippingDate;
    public ?string $accountNumber = null;
    public Sender $sender;
    public Receiver $receiver;
    public ?string $serviceCode = null;
    public ?int $quantity = null;
    public ParcelsRequest $parcelsRequest;
    public ?string $saturdayDelivery = null;
    public ?string $paybackInfo = null;
    public ?string $labelFormat = null;
    public ?string $hazardousMaterial = null;

    public function __construct()
    {
        $this->shippingDate = new \DateTime();
        $this->sender = new Sender();
        $this->receiver = new Receiver();
        $this->parcelsRequest = new ParcelsRequest();
    }

    public function setPickUpRequest(?string $pickUpRequest): self
    {
        $this->pickUpRequest = $pickUpRequest;
        return $this;
    }

    public function setShippingDate(?\DateTime $shippingDate): self
    {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    public function setSender(Sender $sender): self
    {
        $this->sender = $sender;
        return $this;
    }

    public function setReceiver(Receiver $receiver): self
    {
        $this->receiver = $receiver;
        return $this;
    }

    public function setServiceCode(?string $serviceCode): self
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function setParcelsRequest(ParcelsRequest $parcelsRequest): self
    {
        $this->parcelsRequest = $parcelsRequest;
        return $this;
    }

    public function setSaturdayDelivery(?string $saturdayDelivery): self
    {
        $this->saturdayDelivery = $saturdayDelivery;
        return $this;
    }

    public function setPaybackInfo(?string $paybackInfo): self
    {
        $this->paybackInfo = $paybackInfo;
        return $this;
    }

    public function setLabelFormat(?string $labelFormat): self
    {
        $this->labelFormat = $labelFormat;
        return $this;
    }

    public function setHazardousMaterial(?string $hazardousMaterial): self
    {
        $this->hazardousMaterial = $hazardousMaterial;
        return $this;
    }
}
