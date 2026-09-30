<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for receiver StructType.
 */
#[\AllowDynamicProperties]
class Receiver extends AutoValidatedInput
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
     * The zipCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $zipCode = null;

    /**
     * The accessCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $accessCode = null;

    /**
     * The buldingId
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $buldingId = null;

    /**
     * The emailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $emailAddress = null;

    /**
     * The floorNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $floorNumber = null;

    /**
     * The instructions
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $instructions = null;

    /**
     * The sendNotification
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $sendNotification = null;

    /**
     * Constructor method for receiver.
     *
     * @uses Receiver::setAddress1()
     * @uses Receiver::setAddress2()
     * @uses Receiver::setCity()
     * @uses Receiver::setContactFirstName()
     * @uses Receiver::setContactLastName()
     * @uses Receiver::setName()
     * @uses Receiver::setPhoneNumber()
     * @uses Receiver::setType()
     * @uses Receiver::setTypeId()
     * @uses Receiver::setZipCode()
     * @uses Receiver::setAccessCode()
     * @uses Receiver::setBuldingId()
     * @uses Receiver::setEmailAddress()
     * @uses Receiver::setFloorNumber()
     * @uses Receiver::setInstructions()
     * @uses Receiver::setSendNotification()
     */
    public function __construct(?string $address1 = null, ?string $address2 = null, ?string $city = null, ?string $contactFirstName = null, ?string $contactLastName = null, ?string $name = null, ?string $phoneNumber = null, ?string $type = null, ?string $typeId = null, ?string $zipCode = null, ?string $accessCode = null, ?string $buldingId = null, ?string $emailAddress = null, ?string $floorNumber = null, ?string $instructions = null, ?string $sendNotification = null)
    {
        $this
            ->setAddress1($address1)
            ->setAddress2($address2)
            ->setCity($city)
            ->setContactFirstName($contactFirstName)
            ->setContactLastName($contactLastName)
            ->setName($name)
            ->setPhoneNumber($phoneNumber)
            ->setType($type)
            ->setTypeId($typeId)
            ->setZipCode($zipCode)
            ->setAccessCode($accessCode)
            ->setBuldingId($buldingId)
            ->setEmailAddress($emailAddress)
            ->setFloorNumber($floorNumber)
            ->setInstructions($instructions)
            ->setSendNotification($sendNotification)
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
     * Get accessCode value.
     */
    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    /**
     * Set accessCode value.
     */
    public function setAccessCode(?string $accessCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accessCode) && !is_string($accessCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessCode, true), gettype($accessCode)), __LINE__);
        }
        $this->accessCode = $accessCode;

        return $this;
    }

    /**
     * Get buldingId value.
     */
    public function getBuldingId(): ?string
    {
        return $this->buldingId;
    }

    /**
     * Set buldingId value.
     */
    public function setBuldingId(?string $buldingId = null): self
    {
        // validation for constraint: string
        if (!is_null($buldingId) && !is_string($buldingId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buldingId, true), gettype($buldingId)), __LINE__);
        }
        $this->buldingId = $buldingId;

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
     * Get floorNumber value.
     */
    public function getFloorNumber(): ?string
    {
        return $this->floorNumber;
    }

    /**
     * Set floorNumber value.
     */
    public function setFloorNumber(?string $floorNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($floorNumber) && !is_string($floorNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floorNumber, true), gettype($floorNumber)), __LINE__);
        }
        $this->floorNumber = $floorNumber;

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
     * Get sendNotification value.
     */
    public function getSendNotification(): ?string
    {
        return $this->sendNotification;
    }

    /**
     * Set sendNotification value.
     */
    public function setSendNotification(?string $sendNotification = null): self
    {
        // validation for constraint: string
        if (!is_null($sendNotification) && !is_string($sendNotification)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendNotification, true), gettype($sendNotification)), __LINE__);
        }
        $this->sendNotification = $sendNotification;

        return $this;
    }
}
