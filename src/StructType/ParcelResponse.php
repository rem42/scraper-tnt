<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for parcelResponse StructType.
 */
#[\AllowDynamicProperties]
class ParcelResponse extends AbstractStructBase
{
    /**
     * The parcelNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $parcelNumber = null;

    /**
     * The sequenceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $sequenceNumber = null;

    /**
     * The stickerNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $stickerNumber = null;

    /**
     * The trackingURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $trackingURL = null;

    /**
     * Constructor method for parcelResponse.
     *
     * @uses ParcelResponse::setParcelNumber()
     * @uses ParcelResponse::setSequenceNumber()
     * @uses ParcelResponse::setStickerNumber()
     * @uses ParcelResponse::setTrackingURL()
     */
    public function __construct(?string $parcelNumber = null, ?string $sequenceNumber = null, ?string $stickerNumber = null, ?string $trackingURL = null)
    {
        $this
            ->setParcelNumber($parcelNumber)
            ->setSequenceNumber($sequenceNumber)
            ->setStickerNumber($stickerNumber)
            ->setTrackingURL($trackingURL)
        ;
    }

    /**
     * Get parcelNumber value.
     */
    public function getParcelNumber(): ?string
    {
        return $this->parcelNumber;
    }

    /**
     * Set parcelNumber value.
     */
    public function setParcelNumber(?string $parcelNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($parcelNumber) && !is_string($parcelNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelNumber, true), gettype($parcelNumber)), __LINE__);
        }
        $this->parcelNumber = $parcelNumber;

        return $this;
    }

    /**
     * Get sequenceNumber value.
     */
    public function getSequenceNumber(): ?string
    {
        return $this->sequenceNumber;
    }

    /**
     * Set sequenceNumber value.
     */
    public function setSequenceNumber(?string $sequenceNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($sequenceNumber) && !is_string($sequenceNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sequenceNumber, true), gettype($sequenceNumber)), __LINE__);
        }
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Get stickerNumber value.
     */
    public function getStickerNumber(): ?string
    {
        return $this->stickerNumber;
    }

    /**
     * Set stickerNumber value.
     */
    public function setStickerNumber(?string $stickerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($stickerNumber) && !is_string($stickerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stickerNumber, true), gettype($stickerNumber)), __LINE__);
        }
        $this->stickerNumber = $stickerNumber;

        return $this;
    }

    /**
     * Get trackingURL value.
     */
    public function getTrackingURL(): ?string
    {
        return $this->trackingURL;
    }

    /**
     * Set trackingURL value.
     */
    public function setTrackingURL(?string $trackingURL = null): self
    {
        // validation for constraint: string
        if (!is_null($trackingURL) && !is_string($trackingURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($trackingURL, true), gettype($trackingURL)), __LINE__);
        }
        $this->trackingURL = $trackingURL;

        return $this;
    }
}
