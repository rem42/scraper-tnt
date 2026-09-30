<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

/**
 * This class stands for fullAddress StructType.
 */
#[\AllowDynamicProperties]
class FullAddress extends Address
{
    /**
     * The country
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $country = null;

    /**
     * The department
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $department = null;

    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $name = null;

    /**
     * Constructor method for fullAddress.
     *
     * @uses FullAddress::setCountry()
     * @uses FullAddress::setDepartment()
     * @uses FullAddress::setName()
     */
    public function __construct(?string $country = null, ?string $department = null, ?string $name = null)
    {
        $this
            ->setCountry($country)
            ->setDepartment($department)
            ->setName($name)
        ;
    }

    /**
     * Get country value.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Set country value.
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;

        return $this;
    }

    /**
     * Get department value.
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }

    /**
     * Set department value.
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;

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
}
