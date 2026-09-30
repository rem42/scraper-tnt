<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for paybackInfo StructType.
 */
#[\AllowDynamicProperties]
class PaybackInfo extends AutoValidatedInput
{
    /**
     * The address1
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $address1 = null;

    /**
     * The address2
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $address2 = null;

    /**
     * The city
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $city = null;

    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $name = null;

    /**
     * The paybackAmount
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $paybackAmount = null;

    /**
     * The useSenderAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $useSenderAddress = null;

    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $zipCode = null;

    /**
     * Constructor method for paybackInfo.
     *
     * @uses PaybackInfo::setAddress1()
     * @uses PaybackInfo::setAddress2()
     * @uses PaybackInfo::setCity()
     * @uses PaybackInfo::setName()
     * @uses PaybackInfo::setPaybackAmount()
     * @uses PaybackInfo::setUseSenderAddress()
     * @uses PaybackInfo::setZipCode()
     */
    public function __construct(?string $address1 = null, ?string $address2 = null, ?string $city = null, ?string $name = null, ?string $paybackAmount = null, ?string $useSenderAddress = null, ?string $zipCode = null)
    {
        $this
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setCity($city)
            ->setName($name)
            ->setPaybackAmount($paybackAmount)
            ->setUseSenderAddress($useSenderAddress)
            ->setZipCode($zipCode)
        ;
    }

    /**
     * Get address1 value.
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * Set address1 value.
     */
    public function setAddress1(?string $address1 = null): self
    {
        // validation for constraint: string
        if (!is_null($address1) && !is_string($address1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address1, true), gettype($address1)), __LINE__);
        }
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address2 value.
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * Set address2 value.
     */
    public function setAddress2(?string $address2 = null): self
    {
        // validation for constraint: string
        if (!is_null($address2) && !is_string($address2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address2, true), gettype($address2)), __LINE__);
        }
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get city value.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set city value.
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;

        return $this;
    }

    /**
     * Get name value.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name value.
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;

        return $this;
    }

    /**
     * Get paybackAmount value.
     */
    public function getPaybackAmount(): ?string
    {
        return $this->paybackAmount;
    }

    /**
     * Set paybackAmount value.
     */
    public function setPaybackAmount(?string $paybackAmount = null): self
    {
        // validation for constraint: string
        if (!is_null($paybackAmount) && !is_string($paybackAmount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paybackAmount, true), gettype($paybackAmount)), __LINE__);
        }
        $this->paybackAmount = $paybackAmount;

        return $this;
    }

    /**
     * Get useSenderAddress value.
     */
    public function getUseSenderAddress(): ?string
    {
        return $this->useSenderAddress;
    }

    /**
     * Set useSenderAddress value.
     */
    public function setUseSenderAddress(?string $useSenderAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($useSenderAddress) && !is_string($useSenderAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($useSenderAddress, true), gettype($useSenderAddress)), __LINE__);
        }
        $this->useSenderAddress = $useSenderAddress;

        return $this;
    }

    /**
     * Get zipCode value.
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode value.
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (!is_null($zipCode) && !is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;

        return $this;
    }
}
