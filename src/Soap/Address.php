<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Soap;

class Address
{
    public ?string $type             = null;
    public ?string $typeId           = null;
    public ?string $name             = null;
    public ?string $address1         = null;
    public ?string $address2         = null;
    public ?string $zipCode          = null;
    public ?string $city             = null;
    public ?string $contactLastName  = null;
    public ?string $contactFirstName = null;
    public ?string $emailAddress     = null;
    public ?string $phoneNumber      = null;

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function setTypeId(?string $typeId): self
    {
        $this->typeId = $typeId;
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

    public function setContactLastName(?string $contactLastName): self
    {
        $this->contactLastName = $contactLastName;
        return $this;
    }

    public function setContactFirstName(?string $contactFirstName): self
    {
        $this->contactFirstName = $contactFirstName;
        return $this;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
}
