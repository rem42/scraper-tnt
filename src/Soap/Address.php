<?php

namespace Scraper\ScraperTnt\Soap;

class Address
{
    private ?string $type             = null;
    private ?string $typeId           = null;
    private ?string $name             = null;
    private ?string $address1         = null;
    private ?string $address2         = null;
    private ?string $zipCode          = null;
    private ?string $city             = null;
    private ?string $contactLastName  = null;
    private ?string $contactFirstName = null;
    private ?string $emailAddress     = null;
    private ?string $phoneNumber      = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): object
    {
        $this->type = $type;

        return $this;
    }

    public function getTypeId(): ?string
    {
        return $this->typeId;
    }

    public function setTypeId(?string $typeId): object
    {
        $this->typeId = $typeId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): object
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    public function setAddress1(?string $address1): object
    {
        $this->address1 = $address1;

        return $this;
    }

    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    public function setAddress2(?string $address2): object
    {
        $this->address2 = $address2;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): object
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): object
    {
        $this->city = $city;

        return $this;
    }

    public function getContactLastName(): ?string
    {
        return $this->contactLastName;
    }

    public function setContactLastName(?string $contactLastName): object
    {
        $this->contactLastName = $contactLastName;

        return $this;
    }

    public function getContactFirstName(): ?string
    {
        return $this->contactFirstName;
    }

    public function setContactFirstName(?string $contactFirstName): object
    {
        $this->contactFirstName = $contactFirstName;

        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): object
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): object
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }
}
