<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for parcelRequest StructType.
 */
#[\AllowDynamicProperties]
class ParcelRequest extends AutoValidatedInput
{
    /**
     * The comment
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $comment = null;

    /**
     * The customerReference
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $customerReference = null;

    /**
     * The insuranceAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $insuranceAmount = null;

    /**
     * The priorityGuarantee
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $priorityGuarantee = null;

    /**
     * The sequenceNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $sequenceNumber = null;

    /**
     * The weight
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $weight = null;

    /**
     * Constructor method for parcelRequest.
     *
     * @uses ParcelRequest::setComment()
     * @uses ParcelRequest::setCustomerReference()
     * @uses ParcelRequest::setInsuranceAmount()
     * @uses ParcelRequest::setPriorityGuarantee()
     * @uses ParcelRequest::setSequenceNumber()
     * @uses ParcelRequest::setWeight()
     */
    public function __construct(?string $comment = null, ?string $customerReference = null, ?string $insuranceAmount = null, ?string $priorityGuarantee = null, ?string $sequenceNumber = null, ?string $weight = null)
    {
        $this
            ->setComment($comment)
            ->setCustomerReference($customerReference)
            ->setInsuranceAmount($insuranceAmount)
            ->setPriorityGuarantee($priorityGuarantee)
            ->setSequenceNumber($sequenceNumber)
            ->setWeight($weight)
        ;
    }

    /**
     * Get comment value.
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * Set comment value.
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (!is_null($comment) && !is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), gettype($comment)), __LINE__);
        }
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get customerReference value.
     */
    public function getCustomerReference(): ?string
    {
        return $this->customerReference;
    }

    /**
     * Set customerReference value.
     */
    public function setCustomerReference(?string $customerReference = null): self
    {
        // validation for constraint: string
        if (!is_null($customerReference) && !is_string($customerReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerReference, true), gettype($customerReference)), __LINE__);
        }
        $this->customerReference = $customerReference;

        return $this;
    }

    /**
     * Get insuranceAmount value.
     */
    public function getInsuranceAmount(): ?string
    {
        return $this->insuranceAmount;
    }

    /**
     * Set insuranceAmount value.
     */
    public function setInsuranceAmount(?string $insuranceAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($insuranceAmount) && !is_string($insuranceAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insuranceAmount, true), gettype($insuranceAmount)), __LINE__);
        }
        $this->insuranceAmount = $insuranceAmount;

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
     *
     * @uses \Scraper\ScraperTnt\EnumType\Option::valueIsValid()
     * @uses \Scraper\ScraperTnt\EnumType\Option::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setPriorityGuarantee(?string $priorityGuarantee = null): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperTnt\EnumType\Option::valueIsValid($priorityGuarantee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperTnt\EnumType\Option', is_array($priorityGuarantee) ? implode(', ', $priorityGuarantee) : var_export($priorityGuarantee, true), implode(', ', \Scraper\ScraperTnt\EnumType\Option::getValidValues())), __LINE__);
        }
        $this->priorityGuarantee = $priorityGuarantee;

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
     * Get weight value.
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * Set weight value.
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (!is_null($weight) && !is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), gettype($weight)), __LINE__);
        }
        $this->weight = $weight;

        return $this;
    }
}
