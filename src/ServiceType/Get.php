<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType.
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named getPickupContext.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\GetPickupContextResponse|bool
     */
    public function getPickupContext(\Scraper\ScraperTnt\StructType\GetPickupContext $parameters)
    {
        try {
            $this->setResult($resultGetPickupContext = $this->getSoapClient()->__soapCall('getPickupContext', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultGetPickupContext;
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
     * @return \Scraper\ScraperTnt\StructType\GetPickupContextResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
