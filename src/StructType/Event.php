<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for event StructType.
 */
#[\AllowDynamicProperties]
class Event extends AbstractStructBase
{
    /**
     * The arrivalCenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $arrivalCenter = null;

    /**
     * The arrivalCenterPEX
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $arrivalCenterPEX = null;

    /**
     * The arrivalDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $arrivalDate = null;

    /**
     * The deliveryDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $deliveryDate = null;

    /**
     * The deliveryDepartureCenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $deliveryDepartureCenter = null;

    /**
     * The deliveryDepartureCenterPEX
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $deliveryDepartureCenterPEX = null;

    /**
     * The deliveryDepartureDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $deliveryDepartureDate = null;

    /**
     * The notAtHomeDOPDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $notAtHomeDOPDate = null;

    /**
     * The processCenter
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $processCenter = null;

    /**
     * The processCenterPEX
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $processCenterPEX = null;

    /**
     * The processDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $processDate = null;

    /**
     * The requestDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $requestDate = null;

    /**
     * Constructor method for event.
     *
     * @uses Event::setArrivalCenter()
     * @uses Event::setArrivalCenterPEX()
     * @uses Event::setArrivalDate()
     * @uses Event::setDeliveryDate()
     * @uses Event::setDeliveryDepartureCenter()
     * @uses Event::setDeliveryDepartureCenterPEX()
     * @uses Event::setDeliveryDepartureDate()
     * @uses Event::setNotAtHomeDOPDate()
     * @uses Event::setProcessCenter()
     * @uses Event::setProcessCenterPEX()
     * @uses Event::setProcessDate()
     * @uses Event::setRequestDate()
     */
    public function __construct(?string $arrivalCenter = null, ?string $arrivalCenterPEX = null, ?string $arrivalDate = null, ?string $deliveryDate = null, ?string $deliveryDepartureCenter = null, ?string $deliveryDepartureCenterPEX = null, ?string $deliveryDepartureDate = null, ?string $notAtHomeDOPDate = null, ?string $processCenter = null, ?string $processCenterPEX = null, ?string $processDate = null, ?string $requestDate = null)
    {
        $this
            ->setArrivalCenter($arrivalCenter)
            ->setArrivalCenterPEX($arrivalCenterPEX)
            ->setArrivalDate($arrivalDate)
            ->setDeliveryDate($deliveryDate)
            ->setDeliveryDepartureCenter($deliveryDepartureCenter)
            ->setDeliveryDepartureCenterPEX($deliveryDepartureCenterPEX)
            ->setDeliveryDepartureDate($deliveryDepartureDate)
            ->setNotAtHomeDOPDate($notAtHomeDOPDate)
            ->setProcessCenter($processCenter)
            ->setProcessCenterPEX($processCenterPEX)
            ->setProcessDate($processDate)
            ->setRequestDate($requestDate)
        ;
    }

    /**
     * Get arrivalCenter value.
     */
    public function getArrivalCenter(): ?string
    {
        return $this->arrivalCenter;
    }

    /**
     * Set arrivalCenter value.
     */
    public function setArrivalCenter(?string $arrivalCenter = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalCenter) && !is_string($arrivalCenter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalCenter, true), gettype($arrivalCenter)), __LINE__);
        }
        $this->arrivalCenter = $arrivalCenter;

        return $this;
    }

    /**
     * Get arrivalCenterPEX value.
     */
    public function getArrivalCenterPEX(): ?string
    {
        return $this->arrivalCenterPEX;
    }

    /**
     * Set arrivalCenterPEX value.
     */
    public function setArrivalCenterPEX(?string $arrivalCenterPEX = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalCenterPEX) && !is_string($arrivalCenterPEX)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalCenterPEX, true), gettype($arrivalCenterPEX)), __LINE__);
        }
        $this->arrivalCenterPEX = $arrivalCenterPEX;

        return $this;
    }

    /**
     * Get arrivalDate value.
     */
    public function getArrivalDate(): ?string
    {
        return $this->arrivalDate;
    }

    /**
     * Set arrivalDate value.
     */
    public function setArrivalDate(?string $arrivalDate = null): self
    {
        // validation for constraint: string
        if (!is_null($arrivalDate) && !is_string($arrivalDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arrivalDate, true), gettype($arrivalDate)), __LINE__);
        }
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * Get deliveryDate value.
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * Set deliveryDate value.
     */
    public function setDeliveryDate(?string $deliveryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), gettype($deliveryDate)), __LINE__);
        }
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDepartureCenter value.
     */
    public function getDeliveryDepartureCenter(): ?string
    {
        return $this->deliveryDepartureCenter;
    }

    /**
     * Set deliveryDepartureCenter value.
     */
    public function setDeliveryDepartureCenter(?string $deliveryDepartureCenter = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDepartureCenter) && !is_string($deliveryDepartureCenter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDepartureCenter, true), gettype($deliveryDepartureCenter)), __LINE__);
        }
        $this->deliveryDepartureCenter = $deliveryDepartureCenter;

        return $this;
    }

    /**
     * Get deliveryDepartureCenterPEX value.
     */
    public function getDeliveryDepartureCenterPEX(): ?string
    {
        return $this->deliveryDepartureCenterPEX;
    }

    /**
     * Set deliveryDepartureCenterPEX value.
     */
    public function setDeliveryDepartureCenterPEX(?string $deliveryDepartureCenterPEX = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDepartureCenterPEX) && !is_string($deliveryDepartureCenterPEX)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDepartureCenterPEX, true), gettype($deliveryDepartureCenterPEX)), __LINE__);
        }
        $this->deliveryDepartureCenterPEX = $deliveryDepartureCenterPEX;

        return $this;
    }

    /**
     * Get deliveryDepartureDate value.
     */
    public function getDeliveryDepartureDate(): ?string
    {
        return $this->deliveryDepartureDate;
    }

    /**
     * Set deliveryDepartureDate value.
     */
    public function setDeliveryDepartureDate(?string $deliveryDepartureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryDepartureDate) && !is_string($deliveryDepartureDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDepartureDate, true), gettype($deliveryDepartureDate)), __LINE__);
        }
        $this->deliveryDepartureDate = $deliveryDepartureDate;

        return $this;
    }

    /**
     * Get notAtHomeDOPDate value.
     */
    public function getNotAtHomeDOPDate(): ?string
    {
        return $this->notAtHomeDOPDate;
    }

    /**
     * Set notAtHomeDOPDate value.
     */
    public function setNotAtHomeDOPDate(?string $notAtHomeDOPDate = null): self
    {
        // validation for constraint: string
        if (!is_null($notAtHomeDOPDate) && !is_string($notAtHomeDOPDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notAtHomeDOPDate, true), gettype($notAtHomeDOPDate)), __LINE__);
        }
        $this->notAtHomeDOPDate = $notAtHomeDOPDate;

        return $this;
    }

    /**
     * Get processCenter value.
     */
    public function getProcessCenter(): ?string
    {
        return $this->processCenter;
    }

    /**
     * Set processCenter value.
     */
    public function setProcessCenter(?string $processCenter = null): self
    {
        // validation for constraint: string
        if (!is_null($processCenter) && !is_string($processCenter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processCenter, true), gettype($processCenter)), __LINE__);
        }
        $this->processCenter = $processCenter;

        return $this;
    }

    /**
     * Get processCenterPEX value.
     */
    public function getProcessCenterPEX(): ?string
    {
        return $this->processCenterPEX;
    }

    /**
     * Set processCenterPEX value.
     */
    public function setProcessCenterPEX(?string $processCenterPEX = null): self
    {
        // validation for constraint: string
        if (!is_null($processCenterPEX) && !is_string($processCenterPEX)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processCenterPEX, true), gettype($processCenterPEX)), __LINE__);
        }
        $this->processCenterPEX = $processCenterPEX;

        return $this;
    }

    /**
     * Get processDate value.
     */
    public function getProcessDate(): ?string
    {
        return $this->processDate;
    }

    /**
     * Set processDate value.
     */
    public function setProcessDate(?string $processDate = null): self
    {
        // validation for constraint: string
        if (!is_null($processDate) && !is_string($processDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($processDate, true), gettype($processDate)), __LINE__);
        }
        $this->processDate = $processDate;

        return $this;
    }

    /**
     * Get requestDate value.
     */
    public function getRequestDate(): ?string
    {
        return $this->requestDate;
    }

    /**
     * Set requestDate value.
     */
    public function setRequestDate(?string $requestDate = null): self
    {
        // validation for constraint: string
        if (!is_null($requestDate) && !is_string($requestDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($requestDate, true), gettype($requestDate)), __LINE__);
        }
        $this->requestDate = $requestDate;

        return $this;
    }
}
