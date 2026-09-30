<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for openingHours StructType.
 */
#[\AllowDynamicProperties]
class OpeningHours extends AbstractStructBase
{
    /**
     * The friday
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DailyOpeningHours $friday = null;

    /**
     * The monday
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DailyOpeningHours $monday = null;

    /**
     * The saturday
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DailyOpeningHours $saturday = null;

    /**
     * The sunday
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DailyOpeningHours $sunday = null;

    /**
     * The thursday
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DailyOpeningHours $thursday = null;

    /**
     * The tuesday
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DailyOpeningHours $tuesday = null;

    /**
     * The wednesday
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?DailyOpeningHours $wednesday = null;

    /**
     * Constructor method for openingHours.
     *
     * @uses OpeningHours::setFriday()
     * @uses OpeningHours::setMonday()
     * @uses OpeningHours::setSaturday()
     * @uses OpeningHours::setSunday()
     * @uses OpeningHours::setThursday()
     * @uses OpeningHours::setTuesday()
     * @uses OpeningHours::setWednesday()
     */
    public function __construct(?DailyOpeningHours $friday = null, ?DailyOpeningHours $monday = null, ?DailyOpeningHours $saturday = null, ?DailyOpeningHours $sunday = null, ?DailyOpeningHours $thursday = null, ?DailyOpeningHours $tuesday = null, ?DailyOpeningHours $wednesday = null)
    {
        $this
            ->setFriday($friday)
            ->setMonday($monday)
            ->setSaturday($saturday)
            ->setSunday($sunday)
            ->setThursday($thursday)
            ->setTuesday($tuesday)
            ->setWednesday($wednesday)
        ;
    }

    /**
     * Get friday value.
     */
    public function getFriday(): ?DailyOpeningHours
    {
        return $this->friday;
    }

    /**
     * Set friday value.
     */
    public function setFriday(?DailyOpeningHours $friday = null): self
    {
        $this->friday = $friday;

        return $this;
    }

    /**
     * Get monday value.
     */
    public function getMonday(): ?DailyOpeningHours
    {
        return $this->monday;
    }

    /**
     * Set monday value.
     */
    public function setMonday(?DailyOpeningHours $monday = null): self
    {
        $this->monday = $monday;

        return $this;
    }

    /**
     * Get saturday value.
     */
    public function getSaturday(): ?DailyOpeningHours
    {
        return $this->saturday;
    }

    /**
     * Set saturday value.
     */
    public function setSaturday(?DailyOpeningHours $saturday = null): self
    {
        $this->saturday = $saturday;

        return $this;
    }

    /**
     * Get sunday value.
     */
    public function getSunday(): ?DailyOpeningHours
    {
        return $this->sunday;
    }

    /**
     * Set sunday value.
     */
    public function setSunday(?DailyOpeningHours $sunday = null): self
    {
        $this->sunday = $sunday;

        return $this;
    }

    /**
     * Get thursday value.
     */
    public function getThursday(): ?DailyOpeningHours
    {
        return $this->thursday;
    }

    /**
     * Set thursday value.
     */
    public function setThursday(?DailyOpeningHours $thursday = null): self
    {
        $this->thursday = $thursday;

        return $this;
    }

    /**
     * Get tuesday value.
     */
    public function getTuesday(): ?DailyOpeningHours
    {
        return $this->tuesday;
    }

    /**
     * Set tuesday value.
     */
    public function setTuesday(?DailyOpeningHours $tuesday = null): self
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    /**
     * Get wednesday value.
     */
    public function getWednesday(): ?DailyOpeningHours
    {
        return $this->wednesday;
    }

    /**
     * Set wednesday value.
     */
    public function setWednesday(?DailyOpeningHours $wednesday = null): self
    {
        $this->wednesday = $wednesday;

        return $this;
    }
}
