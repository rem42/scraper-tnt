<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for notification StructType.
 */
#[\AllowDynamicProperties]
class Notification extends AutoValidatedInput
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
     * The faxNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $faxNumber = null;

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
     * Constructor method for notification.
     *
     * @uses Notification::setEmailAddress()
     * @uses Notification::setFaxNumber()
     * @uses Notification::setMedia()
     * @uses Notification::setNotifySuccess()
     *
     * @param array<string> $emailAddress
     */
    public function __construct(?array $emailAddress = null, ?string $faxNumber = null, ?string $media = null, ?string $notifySuccess = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setFaxNumber($faxNumber)
            ->setMedia($media)
            ->setNotifySuccess($notifySuccess)
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

        foreach ($values as $notificationEmailAddressItem) {
            // validation for constraint: itemType
            if (!is_string($notificationEmailAddressItem)) {
                $invalidValues[] = is_object($notificationEmailAddressItem) ? get_class($notificationEmailAddressItem) : sprintf('%s(%s)', gettype($notificationEmailAddressItem), var_export($notificationEmailAddressItem, true));
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
}
