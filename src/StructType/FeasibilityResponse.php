<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for feasibilityResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:feasibilityResponse.
 */
#[\AllowDynamicProperties]
class FeasibilityResponse extends AbstractStructBase
{
    /**
     * The Service
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<Service>
     */
    protected ?array $Service = null;

    /**
     * Constructor method for feasibilityResponse.
     *
     * @uses FeasibilityResponse::setService()
     *
     * @param array<Service> $service
     */
    public function __construct(?array $service = null)
    {
        $this
            ->setService($service)
        ;
    }

    /**
     * Get Service value.
     *
     * @return array<Service>
     */
    public function getService(): ?array
    {
        return $this->Service;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setService method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceForArrayConstraintFromSetService(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $feasibilityResponseServiceItem) {
            // validation for constraint: itemType
            if (!$feasibilityResponseServiceItem instanceof Service) {
                $invalidValues[] = is_object($feasibilityResponseServiceItem) ? get_class($feasibilityResponseServiceItem) : sprintf('%s(%s)', gettype($feasibilityResponseServiceItem), var_export($feasibilityResponseServiceItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Service property can only contain items of type \Scraper\ScraperTnt\StructType\Service, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Service value.
     *
     * @param array<Service> $service
     *
     * @throws \InvalidArgumentException
     */
    public function setService(?array $service = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceArrayErrorMessage = self::validateServiceForArrayConstraintFromSetService($service))) {
            throw new \InvalidArgumentException($serviceArrayErrorMessage, __LINE__);
        }
        $this->Service = $service;

        return $this;
    }

    /**
     * Add item to Service value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToService(Service $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof Service) {
            throw new \InvalidArgumentException(sprintf('The Service property can only contain items of type \Scraper\ScraperTnt\StructType\Service, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Service[] = $item;

        return $this;
    }
}
