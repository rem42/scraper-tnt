<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for adresseType EnumType.
 */
class AdresseType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ENTERPRISE'.
     *
     * @return string 'ENTERPRISE'
     */
    public const VALUE_ENTERPRISE = 'ENTERPRISE';

    /**
     * Constant for value 'DEPOT'.
     *
     * @return string 'DEPOT'
     */
    public const VALUE_DEPOT = 'DEPOT';

    /**
     * Constant for value 'DROPOFFPOINT'.
     *
     * @return string 'DROPOFFPOINT'
     */
    public const VALUE_DROPOFFPOINT = 'DROPOFFPOINT';

    /**
     * Constant for value 'INDIVIDUAL'.
     *
     * @return string 'INDIVIDUAL'
     */
    public const VALUE_INDIVIDUAL = 'INDIVIDUAL';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_ENTERPRISE
     * @uses self::VALUE_DEPOT
     * @uses self::VALUE_DROPOFFPOINT
     * @uses self::VALUE_INDIVIDUAL
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENTERPRISE,
            self::VALUE_DEPOT,
            self::VALUE_DROPOFFPOINT,
            self::VALUE_INDIVIDUAL,
        ];
    }
}
