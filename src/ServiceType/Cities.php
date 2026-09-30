<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cities ServiceType.
 */
class Cities extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named citiesGuide.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\CitiesGuideResponse|bool
     */
    public function citiesGuide(\Scraper\ScraperTnt\StructType\CitiesGuide $parameters)
    {
        try {
            $this->setResult($resultCitiesGuide = $this->getSoapClient()->__soapCall('citiesGuide', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultCitiesGuide;
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
     * @return \Scraper\ScraperTnt\StructType\CitiesGuideResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
