<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for dropOffPointsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:dropOffPointsResponse.
 */
#[\AllowDynamicProperties]
class DropOffPointsResponse extends AbstractStructBase
{
    /**
     * The DropOffPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<DropOffPoint>
     */
    protected ?array $DropOffPoint = null;

    /**
     * Constructor method for dropOffPointsResponse.
     *
     * @uses DropOffPointsResponse::setDropOffPoint()
     *
     * @param array<DropOffPoint> $dropOffPoint
     */
    public function __construct(?array $dropOffPoint = null)
    {
        $this
            ->setDropOffPoint($dropOffPoint)
        ;
    }

    /**
     * Get DropOffPoint value.
     *
     * @return array<DropOffPoint>
     */
    public function getDropOffPoint(): ?array
    {
        return $this->DropOffPoint;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setDropOffPoint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDropOffPoint method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDropOffPointForArrayConstraintFromSetDropOffPoint(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $dropOffPointsResponseDropOffPointItem) {
            // validation for constraint: itemType
            if (!$dropOffPointsResponseDropOffPointItem instanceof DropOffPoint) {
                $invalidValues[] = is_object($dropOffPointsResponseDropOffPointItem) ? get_class($dropOffPointsResponseDropOffPointItem) : sprintf('%s(%s)', gettype($dropOffPointsResponseDropOffPointItem), var_export($dropOffPointsResponseDropOffPointItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The DropOffPoint property can only contain items of type \Scraper\ScraperTnt\StructType\DropOffPoint, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set DropOffPoint value.
     *
     * @param array<DropOffPoint> $dropOffPoint
     *
     * @throws \InvalidArgumentException
     */
    public function setDropOffPoint(?array $dropOffPoint = null): self
    {
        // validation for constraint: array
        if ('' !== ($dropOffPointArrayErrorMessage = self::validateDropOffPointForArrayConstraintFromSetDropOffPoint($dropOffPoint))) {
            throw new \InvalidArgumentException($dropOffPointArrayErrorMessage, __LINE__);
        }
        $this->DropOffPoint = $dropOffPoint;

        return $this;
    }

    /**
     * Add item to DropOffPoint value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToDropOffPoint(DropOffPoint $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof DropOffPoint) {
            throw new \InvalidArgumentException(sprintf('The DropOffPoint property can only contain items of type \Scraper\ScraperTnt\StructType\DropOffPoint, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DropOffPoint[] = $item;

        return $this;
    }
}
