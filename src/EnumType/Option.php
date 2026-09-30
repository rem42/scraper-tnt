<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for option EnumType.
 */
class Option extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PTY'.
     *
     * @return string 'PTY'
     */
    public const VALUE_PTY = 'PTY';

    /**
     * Constant for value 'GUE'.
     *
     * @return string 'GUE'
     */
    public const VALUE_GUE = 'GUE';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_PTY
     * @uses self::VALUE_GUE
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PTY,
            self::VALUE_GUE,
        ];
    }
}
