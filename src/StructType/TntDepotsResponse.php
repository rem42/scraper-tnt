<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tntDepotsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:tntDepotsResponse.
 */
#[\AllowDynamicProperties]
class TntDepotsResponse extends AbstractStructBase
{
    /**
     * The DepotInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0.
     *
     * @var array<DepotInfo>
     */
    protected ?array $DepotInfo = null;

    /**
     * Constructor method for tntDepotsResponse.
     *
     * @uses TntDepotsResponse::setDepotInfo()
     *
     * @param array<DepotInfo> $depotInfo
     */
    public function __construct(?array $depotInfo = null)
    {
        $this
            ->setDepotInfo($depotInfo)
        ;
    }

    /**
     * Get DepotInfo value.
     *
     * @return array<DepotInfo>
     */
    public function getDepotInfo(): ?array
    {
        return $this->DepotInfo;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setDepotInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDepotInfo method
     * This has to validate that each item contained by the array match the itemType constraint.
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDepotInfoForArrayConstraintFromSetDepotInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $tntDepotsResponseDepotInfoItem) {
            // validation for constraint: itemType
            if (!$tntDepotsResponseDepotInfoItem instanceof DepotInfo) {
                $invalidValues[] = is_object($tntDepotsResponseDepotInfoItem) ? get_class($tntDepotsResponseDepotInfoItem) : sprintf('%s(%s)', gettype($tntDepotsResponseDepotInfoItem), var_export($tntDepotsResponseDepotInfoItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The DepotInfo property can only contain items of type \Scraper\ScraperTnt\StructType\DepotInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set DepotInfo value.
     *
     * @param array<DepotInfo> $depotInfo
     *
     * @throws \InvalidArgumentException
     */
    public function setDepotInfo(?array $depotInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($depotInfoArrayErrorMessage = self::validateDepotInfoForArrayConstraintFromSetDepotInfo($depotInfo))) {
            throw new \InvalidArgumentException($depotInfoArrayErrorMessage, __LINE__);
        }
        $this->DepotInfo = $depotInfo;

        return $this;
    }

    /**
     * Add item to DepotInfo value.
     *
     * @throws \InvalidArgumentException
     */
    public function addToDepotInfo(DepotInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof DepotInfo) {
            throw new \InvalidArgumentException(sprintf('The DepotInfo property can only contain items of type \Scraper\ScraperTnt\StructType\DepotInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DepotInfo[] = $item;

        return $this;
    }
}
