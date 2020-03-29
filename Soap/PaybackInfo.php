<?php

namespace Scraper\ScraperTnt\Soap;

use JMS\Serializer\Annotation as Serializer;

class PaybackInfo
{
    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    protected $useSenderAddress;
    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    protected $paybackAmount;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $name;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $address1;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $address2;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $zipCode;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    protected $city;

    /**
     * @return bool
     */
    public function isUseSenderAddress(): ?bool
    {
        return $this->useSenderAddress;
    }

    /**
     * @param bool $useSenderAddress
     *
     * @return $this
     */
    public function setUseSenderAddress(?bool $useSenderAddress)
    {
        $this->useSenderAddress = $useSenderAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getPaybackAmount(): ?int
    {
        return $this->paybackAmount;
    }

    /**
     * @param int $paybackAmount
     *
     * @return $this
     */
    public function setPaybackAmount(?int $paybackAmount)
    {
        $this->paybackAmount = $paybackAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(?string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     *
     * @return $this
     */
    public function setAddress1(?string $address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     *
     * @return $this
     */
    public function setAddress2(?string $address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     *
     * @return $this
     */
    public function setZipCode(?string $zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity(?string $city)
    {
        $this->city = $city;
        return $this;
    }
}
