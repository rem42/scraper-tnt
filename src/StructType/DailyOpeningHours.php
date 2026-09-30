<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dailyOpeningHours StructType.
 */
#[\AllowDynamicProperties]
class DailyOpeningHours extends AbstractStructBase
{
    /**
     * The am
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $am = null;

    /**
     * The pm
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $pm = null;

    /**
     * Constructor method for dailyOpeningHours.
     *
     * @uses DailyOpeningHours::setAm()
     * @uses DailyOpeningHours::setPm()
     */
    public function __construct(?string $am = null, ?string $pm = null)
    {
        $this
            ->setAm($am)
            ->setPm($pm)
        ;
    }

    /**
     * Get am value.
     */
    public function getAm(): ?string
    {
        return $this->am;
    }

    /**
     * Set am value.
     */
    public function setAm(?string $am = null): self
    {
        // validation for constraint: string
        if (!is_null($am) && !is_string($am)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($am, true), gettype($am)), __LINE__);
        }
        $this->am = $am;

        return $this;
    }

    /**
     * Get pm value.
     */
    public function getPm(): ?string
    {
        return $this->pm;
    }

    /**
     * Set pm value.
     */
    public function setPm(?string $pm = null): self
    {
        // validation for constraint: string
        if (!is_null($pm) && !is_string($pm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pm, true), gettype($pm)), __LINE__);
        }
        $this->pm = $pm;

        return $this;
    }
}
