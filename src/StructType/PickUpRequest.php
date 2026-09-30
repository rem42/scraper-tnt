<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for pickUpRequest StructType.
 */
#[\AllowDynamicProperties]
class PickUpRequest extends AutoValidatedInput
{
    /**
     * The emailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true.
     *
     * @var array<string>|null
     */
    protected ?array $emailAddress = null;

    /**
     * The closingTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $closingTime = null;

    /**
     * The faxNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $faxNumber = null;

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
     * The media
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $media = null;

    /**
     * The notifySuccess
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $notifySuccess = null;

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
     * Constructor method for pickUpRequest.
     *
     * @uses PickUpRequest::setEmailAddress()
     * @uses PickUpRequest::setClosingTime()
     * @uses PickUpRequest::setFaxNumber()
     * @uses PickUpRequest::setFirstName()
     * @uses PickUpRequest::setInstructions()
     * @uses PickUpRequest::setLastName()
     * @uses PickUpRequest::setMedia()
     * @uses PickUpRequest::setNotifySuccess()
     * @uses PickUpRequest::setPhoneNumber()
     * @uses PickUpRequest::setService()
     *
     * @param array<string> $emailAddress
     */
    public function __construct(?array $emailAddress = null, ?string $closingTime = null, ?string $faxNumber = null, ?string $firstName = null, ?string $instructions = null, ?string $lastName = null, ?string $media = null, ?string $notifySuccess = null, ?string $phoneNumber = null, ?string $service = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setClosingTime($closingTime)
            ->setFaxNumber($faxNumber)
            ->setFirstName($firstName)
            ->setInstructions($instructions)
            ->setLastName($lastName)
            ->setMedia($media)
            ->setNotifySuccess($notifySuccess)
            ->setPhoneNumber($phoneNumber)
            ->setService($service)
        ;
    }

    /**
     * Get emailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0).
     *
     * @return array<string>|null
     */
    public function getEmailAddress(): ?array
    {
        return $this->emailAddress ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setEmailAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailAddress method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailAddressForArrayConstraintFromSetEmailAddress(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $pickUpRequestEmailAddressItem) {
            // validation for constraint: itemType
            if (!is_string($pickUpRequestEmailAddressItem)) {
                $invalidValues[] = is_object($pickUpRequestEmailAddressItem) ? get_class($pickUpRequestEmailAddressItem) : sprintf('%s(%s)', gettype($pickUpRequestEmailAddressItem), var_export($pickUpRequestEmailAddressItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The emailAddress property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set emailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object.
     *
     * @param array<string> $emailAddress
     *
     * @throws \InvalidArgumentException
     */
    public function setEmailAddress(?array $emailAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($emailAddressArrayErrorMessage = self::validateEmailAddressForArrayConstraintFromSetEmailAddress($emailAddress))) {
            throw new \InvalidArgumentException($emailAddressArrayErrorMessage, __LINE__);
        }

        if (is_null($emailAddress) || (is_array($emailAddress) && empty($emailAddress))) {
            unset($this->emailAddress);
        } else {
            $this->emailAddress = $emailAddress;
        }

        return $this;
    }

    /**
     * Add item to emailAddress value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToEmailAddress(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The emailAddress property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->emailAddress[] = $item;

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
     * Get media value.
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }

    /**
     * Set media value.
     *
     * @uses \Scraper\ScraperTnt\EnumType\MediaType::valueIsValid()
     * @uses \Scraper\ScraperTnt\EnumType\MediaType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperTnt\EnumType\MediaType::valueIsValid($media)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperTnt\EnumType\MediaType', is_array($media) ? implode(', ', $media) : var_export($media, true), implode(', ', \Scraper\ScraperTnt\EnumType\MediaType::getValidValues())), __LINE__);
        }
        $this->media = $media;

        return $this;
    }

    /**
     * Get notifySuccess value.
     */
    public function getNotifySuccess(): ?string
    {
        return $this->notifySuccess;
    }

    /**
     * Set notifySuccess value.
     */
    public function setNotifySuccess(?string $notifySuccess = null): self
    {
        // validation for constraint: string
        if (!is_null($notifySuccess) && !is_string($notifySuccess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notifySuccess, true), gettype($notifySuccess)), __LINE__);
        }
        $this->notifySuccess = $notifySuccess;

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
}
