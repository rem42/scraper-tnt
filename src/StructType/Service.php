<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for service StructType.
 */
#[\AllowDynamicProperties]
class Service extends AbstractStructBase
{
    /**
     * The afternoonDelivery
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $afternoonDelivery = null;

    /**
     * The dueDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $dueDate = null;

    /**
     * The insurance
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $insurance = null;

    /**
     * The priorityGuarantee
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $priorityGuarantee = null;

    /**
     * The saturdayDelivery
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $saturdayDelivery = null;

    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $serviceCode = null;

    /**
     * The serviceLabel
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $serviceLabel = null;

    /**
     * The shippingDate
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $shippingDate = null;

    /**
     * Constructor method for service.
     *
     * @uses Service::setAfternoonDelivery()
     * @uses Service::setDueDate()
     * @uses Service::setInsurance()
     * @uses Service::setPriorityGuarantee()
     * @uses Service::setSaturdayDelivery()
     * @uses Service::setServiceCode()
     * @uses Service::setServiceLabel()
     * @uses Service::setShippingDate()
     */
    public function __construct(?string $afternoonDelivery = null, ?string $dueDate = null, ?string $insurance = null, ?string $priorityGuarantee = null, ?string $saturdayDelivery = null, ?string $serviceCode = null, ?string $serviceLabel = null, ?string $shippingDate = null)
    {
        $this
            ->setAfternoonDelivery($afternoonDelivery)
            ->setDueDate($dueDate)
            ->setInsurance($insurance)
            ->setPriorityGuarantee($priorityGuarantee)
            ->setSaturdayDelivery($saturdayDelivery)
            ->setServiceCode($serviceCode)
            ->setServiceLabel($serviceLabel)
            ->setShippingDate($shippingDate)
        ;
    }

    /**
     * Get afternoonDelivery value.
     */
    public function getAfternoonDelivery(): ?string
    {
        return $this->afternoonDelivery;
    }

    /**
     * Set afternoonDelivery value.
     */
    public function setAfternoonDelivery(?string $afternoonDelivery = null): self
    {
        // validation for constraint: string
        if (!is_null($afternoonDelivery) && !is_string($afternoonDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($afternoonDelivery, true), gettype($afternoonDelivery)), __LINE__);
        }
        $this->afternoonDelivery = $afternoonDelivery;

        return $this;
    }

    /**
     * Get dueDate value.
     */
    public function getDueDate(): ?string
    {
        return $this->dueDate;
    }

    /**
     * Set dueDate value.
     */
    public function setDueDate(?string $dueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($dueDate) && !is_string($dueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dueDate, true), gettype($dueDate)), __LINE__);
        }
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get insurance value.
     */
    public function getInsurance(): ?string
    {
        return $this->insurance;
    }

    /**
     * Set insurance value.
     */
    public function setInsurance(?string $insurance = null): self
    {
        // validation for constraint: string
        if (!is_null($insurance) && !is_string($insurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insurance, true), gettype($insurance)), __LINE__);
        }
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * Get priorityGuarantee value.
     */
    public function getPriorityGuarantee(): ?string
    {
        return $this->priorityGuarantee;
    }

    /**
     * Set priorityGuarantee value.
     */
    public function setPriorityGuarantee(?string $priorityGuarantee = null): self
    {
        // validation for constraint: string
        if (!is_null($priorityGuarantee) && !is_string($priorityGuarantee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($priorityGuarantee, true), gettype($priorityGuarantee)), __LINE__);
        }
        $this->priorityGuarantee = $priorityGuarantee;

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
     * Get serviceLabel value.
     */
    public function getServiceLabel(): ?string
    {
        return $this->serviceLabel;
    }

    /**
     * Set serviceLabel value.
     */
    public function setServiceLabel(?string $serviceLabel = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceLabel) && !is_string($serviceLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceLabel, true), gettype($serviceLabel)), __LINE__);
        }
        $this->serviceLabel = $serviceLabel;

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
