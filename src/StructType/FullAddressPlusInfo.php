<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for fullAddressPlusInfo StructType.
 */
#[\AllowDynamicProperties]
class FullAddressPlusInfo extends FullAddress
{
    /**
     * The geolocalisationUrl
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $geolocalisationUrl = null;

    /**
     * The message
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $message = null;

    /**
     * The openingHours
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?OpeningHours $openingHours = null;

    /**
     * Constructor method for fullAddressPlusInfo.
     *
     * @uses FullAddressPlusInfo::setGeolocalisationUrl()
     * @uses FullAddressPlusInfo::setMessage()
     * @uses FullAddressPlusInfo::setOpeningHours()
     */
    public function __construct(?string $geolocalisationUrl = null, ?string $message = null, ?OpeningHours $openingHours = null)
    {
        $this
            ->setGeolocalisationUrl($geolocalisationUrl)
            ->setMessage($message)
            ->setOpeningHours($openingHours)
        ;
    }

    /**
     * Get geolocalisationUrl value.
     */
    public function getGeolocalisationUrl(): ?string
    {
        return $this->geolocalisationUrl;
    }

    /**
     * Set geolocalisationUrl value.
     */
    public function setGeolocalisationUrl(?string $geolocalisationUrl = null): self
    {
        // validation for constraint: string
        if (!is_null($geolocalisationUrl) && !is_string($geolocalisationUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geolocalisationUrl, true), gettype($geolocalisationUrl)), __LINE__);
        }
        $this->geolocalisationUrl = $geolocalisationUrl;

        return $this;
    }

    /**
     * Get message value.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Set message value.
     */
    public function setMessage(?string $message = null): self
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        $this->message = $message;

        return $this;
    }

    /**
     * Get openingHours value.
     */
    public function getOpeningHours(): ?OpeningHours
    {
        return $this->openingHours;
    }

    /**
     * Set openingHours value.
     */
    public function setOpeningHours(?OpeningHours $openingHours = null): self
    {
        $this->openingHours = $openingHours;

        return $this;
    }
}
