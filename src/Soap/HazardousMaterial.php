<?php

namespace Scraper\ScraperTnt\Soap;

class HazardousMaterial
{
    /** Marchandises dangereuses emballées en quantité limitée conforme à l'ADR */
    public static string $LQ = 'LQ';
    /** Marchandises dangereuses emballées en quantité exceptée conforme à l'ADR */
    public static string $EQ = 'EQ';
    /** UN 373 Matière biologique cat. B conforme à la P650 de l'ADR */
    public static string $BB = 'BB';
    /** Batteries ou piles au lithium conforme à la DS 188 de l'ADR */
    public static string $LB = 'LB';
    /** UN 3245 MOGM ou OGM conforme à Inst. Emb. P904 de l'ADR */
    public static string $GM = 'GM';
}
