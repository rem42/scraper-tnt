<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for mediaType EnumType.
 */
class MediaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EMAIL'.
     *
     * @return string 'EMAIL'
     */
    public const VALUE_EMAIL = 'EMAIL';

    /**
     * Constant for value 'FAX'.
     *
     * @return string 'FAX'
     */
    public const VALUE_FAX = 'FAX';

    /**
     * Return allowed values.
     *
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_FAX
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EMAIL,
            self::VALUE_FAX,
        ];
    }
}
