<?php

namespace Scraper\ScraperTnt\Soap;

class ServiceCode
{
    // Code Produit

    /** 8:00 Express */
    public static string $PRODUIT_N = 'N';

    /** 9:00 Express */
    public static string $PRODUIT_A = 'A';

    /** 10:00 Express */
    public static string $PRODUIT_T = 'T';

    /** 12:00 Express */
    public static string $PRODUIT_M = 'M';

    /** Express */
    public static string $PRODUIT_J = 'J';

    /** Express P */
    public static string $PRODUIT_P = 'P';

    // Code Option

    /** Retour de paiement */
    public static string $OPTION_P = 'P';

    /** Expédition Sous Protection */
    public static string $OPTION_W = 'W';

    /** Relais Colis */
    public static string $OPTION_D = 'D';

    /** Livraison à domicile */
    public static string $OPTION_Z = 'Z';

    /** Livraison Possible Sans Emargement */
    public static string $OPTION_E = 'E';
}
