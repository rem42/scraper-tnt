<?php

namespace Scraper\ScraperTnt\Soap;

class ServiceCode
{
    /**
     * Code Produit
     */

    /**
     * @var string
     *             8:00 Express
     */
    public static $PRODUIT_N = 'N';

    /**
     * @var string
     *             9:00 Express
     */
    public static $PRODUIT_A = 'A';

    /**
     * @var string
     *             10:00 Express
     */
    public static $PRODUIT_T = 'T';

    /**
     * @var string
     *             12:00 Express
     */
    public static $PRODUIT_M = 'M';

    /**
     * @var string
     *             Express
     */
    public static $PRODUIT_J = 'J';

    /**
     * @var string
     *             Express P
     */
    public static $PRODUIT_P = 'P';

    /**
     * Code Option
     */

    /**
     * @var string
     *             Retour de paiement
     */
    public static $OPTION_P = 'P';
    /**
     * @var string
     *             Expédition Sous Protection
     */
    public static $OPTION_W = 'W';
    /**
     * @var string
     *             Relais Colis
     */
    public static $OPTION_D = 'D';
    /**
     * @var string
     *             Livraison à domicile
     */
    public static $OPTION_Z = 'Z';
    /**
     * @var string
     *             Livraison Possible Sans Emargement
     */
    public static $OPTION_E = 'E';
}
