<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Tnt ServiceType.
 */
class Tnt extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named tntDepots.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\TntDepotsResponse|bool
     */
    public function tntDepots(\Scraper\ScraperTnt\StructType\TntDepots $parameters)
    {
        try {
            $this->setResult($resultTntDepots = $this->getSoapClient()->__soapCall('tntDepots', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTntDepots;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Returns the result.
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Scraper\ScraperTnt\StructType\TntDepotsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
