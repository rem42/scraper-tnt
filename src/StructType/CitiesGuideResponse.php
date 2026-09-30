<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for citiesGuideResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:citiesGuideResponse.
 */
#[\AllowDynamicProperties]
class CitiesGuideResponse extends AbstractStructBase
{
    /**
     * The City
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<City>
     */
    protected ?array $City = null;

    /**
     * Constructor method for citiesGuideResponse.
     *
     * @uses CitiesGuideResponse::setCity()
     *
     * @param array<City> $city
     */
    public function __construct(?array $city = null)
    {
        $this
            ->setCity($city)
        ;
    }

    /**
     * Get City value.
     *
     * @return array<City>
     */
    public function getCity(): ?array
    {
        return $this->City;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCity method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCity method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCityForArrayConstraintFromSetCity(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $citiesGuideResponseCityItem) {
            // validation for constraint: itemType
            if (!$citiesGuideResponseCityItem instanceof City) {
                $invalidValues[] = is_object($citiesGuideResponseCityItem) ? get_class($citiesGuideResponseCityItem) : sprintf('%s(%s)', gettype($citiesGuideResponseCityItem), var_export($citiesGuideResponseCityItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The City property can only contain items of type \Scraper\ScraperTnt\StructType\City, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set City value.
     *
     * @param array<City> $city
     *
     * @throws \InvalidArgumentException
     */
    public function setCity(?array $city = null): self
    {
        // validation for constraint: array
        if ('' !== ($cityArrayErrorMessage = self::validateCityForArrayConstraintFromSetCity($city))) {
            throw new \InvalidArgumentException($cityArrayErrorMessage, __LINE__);
        }
        $this->City = $city;

        return $this;
    }

    /**
     * Add item to City value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToCity(City $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof City) {
            throw new \InvalidArgumentException(sprintf('The City property can only contain items of type \Scraper\ScraperTnt\StructType\City, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->City[] = $item;

        return $this;
    }
}
