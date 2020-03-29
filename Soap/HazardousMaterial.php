<?php

namespace Scraper\ScraperTnt\Soap;

class HazardousMaterial
{
    /**
     * @var string
     *             Marchandises dangereuses emballées en quantité limitée conforme à l'ADR
     */
    public static $LQ = 'LQ';
    /**
     * @var string
     *             Marchandises dangereuses emballées en quantité exceptée conforme à l'ADR
     */
    public static $EQ = 'EQ';
    /**
     * @var string
     *             UN 373 Matière biologique cat. B conforme à la P650 de l'ADR
     */
    public static $BB = 'BB';
    /**
     * @var string
     *             Batteries ou piles au lithium conforme à la DS 188 de l'ADR
     */
    public static $LB = 'LB';
    /**
     * @var string
     *             UN 3245 MOGM ou OGM conforme à Inst. Emb. P904 de l'ADR
     */
    public static $GM = 'GM';
}
