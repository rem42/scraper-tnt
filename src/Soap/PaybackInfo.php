<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Soap;

class PaybackInfo
{
    public ?bool $useSenderAddress = null;
    public ?int $paybackAmount     = null;
    public ?string $name           = null;
    public ?string $address1       = null;
    public ?string $address2       = null;
    public ?string $zipCode        = null;
    public ?string $city           = null;

    public function setUseSenderAddress(?bool $useSenderAddress): self
    {
        $this->useSenderAddress = $useSenderAddress;
        return $this;
    }

    public function setPaybackAmount(?int $paybackAmount): self
    {
        $this->paybackAmount = $paybackAmount;
        return $this;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setAddress1(?string $address1): self
    {
        $this->address1 = $address1;
        return $this;
    }

    public function setAddress2(?string $address2): self
    {
        $this->address2 = $address2;
        return $this;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }
}
