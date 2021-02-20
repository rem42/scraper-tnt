<?php

namespace Scraper\ScraperTnt\Soap;

class PaybackInfo
{
    protected ?bool $useSenderAddress = null;

    protected ?int $paybackAmount = null;

    protected ?string $name = null;

    protected ?string $address1 = null;

    protected ?string $address2 = null;

    protected ?string $zipCode = null;

    protected ?string $city = null;

    public function getUseSenderAddress(): ?bool
    {
        return $this->useSenderAddress;
    }

    public function setUseSenderAddress(?bool $useSenderAddress): self
    {
        $this->useSenderAddress = $useSenderAddress;

        return $this;
    }

    public function getPaybackAmount(): ?int
    {
        return $this->paybackAmount;
    }

    public function setPaybackAmount(?int $paybackAmount): self
    {
        $this->paybackAmount = $paybackAmount;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }
}
