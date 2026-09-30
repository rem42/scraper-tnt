<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for typeMatiereDangereuse EnumType.
 */
class TypeMatiereDangereuse extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EQ'.
     *
     * @return string 'EQ'
     */
    public const VALUE_EQ = 'EQ';

    /**
     * Constant for value 'LQ'.
     *
     * @return string 'LQ'
     */
    public const VALUE_LQ = 'LQ';

    /**
     * Constant for value 'BB'.
     *
     * @return string 'BB'
     */
    public const VALUE_BB = 'BB';

    /**
     * Constant for value 'GM'.
     *
     * @return string 'GM'
     */
    public const VALUE_GM = 'GM';

    /**
     * Constant for value 'LB'.
     *
     * @return string 'LB'
     */
    public const VALUE_LB = 'LB';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_EQ
     * @uses self::VALUE_LQ
     * @uses self::VALUE_BB
     * @uses self::VALUE_GM
     * @uses self::VALUE_LB
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EQ,
            self::VALUE_LQ,
            self::VALUE_BB,
            self::VALUE_GM,
            self::VALUE_LB,
        ];
    }
}
