<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Drop ServiceType.
 */
class Drop extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named dropOffPoints.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\DropOffPointsResponse|bool
     */
    public function dropOffPoints(\Scraper\ScraperTnt\StructType\DropOffPoints $parameters)
    {
        try {
            $this->setResult($resultDropOffPoints = $this->getSoapClient()->__soapCall('dropOffPoints', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultDropOffPoints;
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
     * @return \Scraper\ScraperTnt\StructType\DropOffPointsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
