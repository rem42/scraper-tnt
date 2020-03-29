<?php

namespace Scraper\ScraperTnt\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class Parameters
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $pickUpRequest;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'Y-m-d'>")
     */
    protected $shippingDate;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $accountNumber;
    /**
     * @var Sender
     * @Serializer\Type("Scraper\ScraperTnt\Soap\Sender")
     */
    protected $sender;
    /**
     * @var Receiver
     * @Serializer\Type("Scraper\ScraperTnt\Soap\Receiver")
     */
    protected $receiver;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $serviceCode;
    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    protected $quantity;
    /**
     * @var ArrayCollection|ParcelRequest[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperTnt\Soap\ParcelRequest>")
     */
    protected $parcelsRequest;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $saturdayDelivery;
    /**
     * @var string
     */
    protected $paybackInfo;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $labelFormat;
    /**
     * @var string
     */
    protected $hazardousMaterial;

    /**
     * Parameters constructor.
     */
    public function __construct()
    {
        $this->shippingDate   = new \DateTime();
        $this->sender         = new Sender();
        $this->receiver       = new Receiver();
        $this->parcelsRequest = new ArrayCollection();
    }

    /**
     * @param ParcelRequest $parcelRequest
     *
     * @return $this
     */
    public function addParcelRequest(ParcelRequest $parcelRequest)
    {
        $this->parcelsRequest->add($parcelRequest);
        return $this;
    }

    /**
     * @return string
     */
    public function getPickUpRequest(): ?string
    {
        return $this->pickUpRequest;
    }

    /**
     * @param string $pickUpRequest
     *
     * @return $this
     */
    public function setPickUpRequest(?string $pickUpRequest)
    {
        $this->pickUpRequest = $pickUpRequest;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShippingDate(): ?\DateTime
    {
        return $this->shippingDate;
    }

    /**
     * @param \DateTime $shippingDate
     *
     * @return $this
     */
    public function setShippingDate(?\DateTime $shippingDate)
    {
        $this->shippingDate = $shippingDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     *
     * @return $this
     */
    public function setAccountNumber(?string $accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return Sender
     */
    public function getSender(): ?Sender
    {
        return $this->sender;
    }

    /**
     * @param Sender $sender
     *
     * @return $this
     */
    public function setSender(?Sender $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @return Receiver
     */
    public function getReceiver(): ?Receiver
    {
        return $this->receiver;
    }

    /**
     * @param Receiver $receiver
     *
     * @return $this
     */
    public function setReceiver(?Receiver $receiver)
    {
        $this->receiver = $receiver;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * @param string $serviceCode
     *
     * @return $this
     */
    public function setServiceCode(?string $serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return $this
     */
    public function setQuantity(?int $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return string
     */
    public function getSaturdayDelivery(): ?string
    {
        return $this->saturdayDelivery;
    }

    /**
     * @param string $saturdayDelivery
     *
     * @return $this
     */
    public function setSaturdayDelivery(?string $saturdayDelivery): self
    {
        $this->saturdayDelivery = $saturdayDelivery;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaybackInfo(): ?string
    {
        return $this->paybackInfo;
    }

    /**
     * @param string $paybackInfo
     *
     * @return $this
     */
    public function setPaybackInfo(?string $paybackInfo)
    {
        $this->paybackInfo = $paybackInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabelFormat(): ?string
    {
        return $this->labelFormat;
    }

    /**
     * @param string $labelFormat
     *
     * @return $this
     */
    public function setLabelFormat(?string $labelFormat)
    {
        $this->labelFormat = $labelFormat;
        return $this;
    }

    /**
     * @return string
     */
    public function getHazardousMaterial(): ?string
    {
        return $this->hazardousMaterial;
    }

    /**
     * @param string $hazardousMaterial
     *
     * @return $this
     */
    public function setHazardousMaterial(?string $hazardousMaterial)
    {
        $this->hazardousMaterial = $hazardousMaterial;
        return $this;
    }

    /**
     * @return ArrayCollection|ParcelRequest[]
     */
    public function getParcelsRequest()
    {
        return $this->parcelsRequest;
    }

    /**
     * @param ArrayCollection|ParcelRequest[] $parcelsRequest
     *
     * @return $this
     */
    public function setParcelsRequest($parcelsRequest)
    {
        $this->parcelsRequest = $parcelsRequest;
        return $this;
    }
}
