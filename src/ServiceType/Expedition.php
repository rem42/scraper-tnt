<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Expedition ServiceType.
 */
class Expedition extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named expeditionCreation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\ExpeditionCreationResponse|bool
     */
    public function expeditionCreation(\Scraper\ScraperTnt\StructType\ExpeditionCreation $parameters)
    {
        try {
            $this->setResult($resultExpeditionCreation = $this->getSoapClient()->__soapCall('expeditionCreation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultExpeditionCreation;
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
     * @return \Scraper\ScraperTnt\StructType\ExpeditionCreationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
