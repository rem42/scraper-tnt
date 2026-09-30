<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pick ServiceType.
 */
class Pick extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named pickUpRequestCancellation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\PickUpRequestCancellationResponse|bool
     */
    public function pickUpRequestCancellation(\Scraper\ScraperTnt\StructType\PickUpRequestCancellation $parameters)
    {
        try {
            $this->setResult($resultPickUpRequestCancellation = $this->getSoapClient()->__soapCall('pickUpRequestCancellation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultPickUpRequestCancellation;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named pickUpRequestCreation.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\PickUpRequestCreationResponse|bool
     */
    public function pickUpRequestCreation(\Scraper\ScraperTnt\StructType\PickUpRequestCreation $parameters)
    {
        try {
            $this->setResult($resultPickUpRequestCreation = $this->getSoapClient()->__soapCall('pickUpRequestCreation', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultPickUpRequestCreation;
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
     * @return \Scraper\ScraperTnt\StructType\PickUpRequestCancellationResponse|\Scraper\ScraperTnt\StructType\PickUpRequestCreationResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
