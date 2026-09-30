<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for sender StructType.
 */
#[\AllowDynamicProperties]
class Sender extends AutoValidatedInput
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
     * The closingTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $closingTime = null;

    /**
     * The firstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $firstName = null;

    /**
     * The instructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $instructions = null;

    /**
     * The lastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $lastName = null;

    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $name = null;

    /**
     * The phoneNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $phoneNumber = null;

    /**
     * The service
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $service = null;

    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $zipCode = null;

    /**
     * The contactFirstName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $contactFirstName = null;

    /**
     * The contactLastName
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $contactLastName = null;

    /**
     * The emailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $emailAddress = null;

    /**
     * The faxNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $faxNumber = null;

    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $type = null;

    /**
     * The typeId
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $typeId = null;

    /**
     * Constructor method for sender.
     *
     * @uses Sender::setAddress1()
     * @uses Sender::setAddress2()
     * @uses Sender::setCity()
     * @uses Sender::setClosingTime()
     * @uses Sender::setFirstName()
     * @uses Sender::setInstructions()
     * @uses Sender::setLastName()
     * @uses Sender::setName()
     * @uses Sender::setPhoneNumber()
     * @uses Sender::setService()
     * @uses Sender::setZipCode()
     * @uses Sender::setContactFirstName()
     * @uses Sender::setContactLastName()
     * @uses Sender::setEmailAddress()
     * @uses Sender::setFaxNumber()
     * @uses Sender::setType()
     * @uses Sender::setTypeId()
     */
    public function __construct(?string $address1 = null, ?string $address2 = null, ?string $city = null, ?string $closingTime = null, ?string $firstName = null, ?string $instructions = null, ?string $lastName = null, ?string $name = null, ?string $phoneNumber = null, ?string $service = null, ?string $zipCode = null, ?string $contactFirstName = null, ?string $contactLastName = null, ?string $emailAddress = null, ?string $faxNumber = null, ?string $type = null, ?string $typeId = null)
    {
        $this
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setCity($city)
            ->setClosingTime($closingTime)
            ->setFirstName($firstName)
            ->setInstructions($instructions)
            ->setLastName($lastName)
            ->setName($name)
            ->setPhoneNumber($phoneNumber)
            ->setService($service)
            ->setZipCode($zipCode)
            ->setContactFirstName($contactFirstName)
            ->setContactLastName($contactLastName)
            ->setEmailAddress($emailAddress)
            ->setFaxNumber($faxNumber)
            ->setType($type)
            ->setTypeId($typeId)
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
     * Get closingTime value.
     */
    public function getClosingTime(): ?string
    {
        return $this->closingTime;
    }

    /**
     * Set closingTime value.
     */
    public function setClosingTime(?string $closingTime = null): self
    {
        // validation for constraint: string
        if (!is_null($closingTime) && !is_string($closingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closingTime, true), gettype($closingTime)), __LINE__);
        }
        $this->closingTime = $closingTime;

        return $this;
    }

    /**
     * Get firstName value.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Set firstName value.
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get instructions value.
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /**
     * Set instructions value.
     */
    public function setInstructions(?string $instructions = null): self
    {
        // validation for constraint: string
        if (!is_null($instructions) && !is_string($instructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instructions, true), gettype($instructions)), __LINE__);
        }
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * Get lastName value.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Set lastName value.
     */
    public function setLastName(?string $lastName = null): self
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastName, true), gettype($lastName)), __LINE__);
        }
        $this->lastName = $lastName;

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
     * Get phoneNumber value.
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Set phoneNumber value.
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get service value.
     */
    public function getService(): ?string
    {
        return $this->service;
    }

    /**
     * Set service value.
     */
    public function setService(?string $service = null): self
    {
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($service, true), gettype($service)), __LINE__);
        }
        $this->service = $service;

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

    /**
     * Get contactFirstName value.
     */
    public function getContactFirstName(): ?string
    {
        return $this->contactFirstName;
    }

    /**
     * Set contactFirstName value.
     */
    public function setContactFirstName(?string $contactFirstName = null): self
    {
        // validation for constraint: string
        if (!is_null($contactFirstName) && !is_string($contactFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactFirstName, true), gettype($contactFirstName)), __LINE__);
        }
        $this->contactFirstName = $contactFirstName;

        return $this;
    }

    /**
     * Get contactLastName value.
     */
    public function getContactLastName(): ?string
    {
        return $this->contactLastName;
    }

    /**
     * Set contactLastName value.
     */
    public function setContactLastName(?string $contactLastName = null): self
    {
        // validation for constraint: string
        if (!is_null($contactLastName) && !is_string($contactLastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactLastName, true), gettype($contactLastName)), __LINE__);
        }
        $this->contactLastName = $contactLastName;

        return $this;
    }

    /**
     * Get emailAddress value.
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Set emailAddress value.
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get faxNumber value.
     */
    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    /**
     * Set faxNumber value.
     */
    public function setFaxNumber(?string $faxNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($faxNumber) && !is_string($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faxNumber, true), gettype($faxNumber)), __LINE__);
        }
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Get type value.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set type value.
     *
     * @uses \Scraper\ScraperTnt\EnumType\AdresseType::valueIsValid()
     * @uses \Scraper\ScraperTnt\EnumType\AdresseType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperTnt\EnumType\AdresseType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperTnt\EnumType\AdresseType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperTnt\EnumType\AdresseType::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get typeId value.
     */
    public function getTypeId(): ?string
    {
        return $this->typeId;
    }

    /**
     * Set typeId value.
     */
    public function setTypeId(?string $typeId = null): self
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeId, true), gettype($typeId)), __LINE__);
        }
        $this->typeId = $typeId;

        return $this;
    }
}
