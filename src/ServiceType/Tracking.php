<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Tracking ServiceType.
 */
class Tracking extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named trackingByReference.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\TrackingByReferenceResponse|bool
     */
    public function trackingByReference(\Scraper\ScraperTnt\StructType\TrackingByReference $parameters)
    {
        try {
            $this->setResult($resultTrackingByReference = $this->getSoapClient()->__soapCall('trackingByReference', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackingByReference;
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);

            return false;
        }
    }

    /**
     * Method to call the operation originally named trackingByConsignment.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\TrackingByConsignmentResponse|bool
     */
    public function trackingByConsignment(\Scraper\ScraperTnt\StructType\TrackingByConsignment $parameters)
    {
        try {
            $this->setResult($resultTrackingByConsignment = $this->getSoapClient()->__soapCall('trackingByConsignment', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultTrackingByConsignment;
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
     * @return \Scraper\ScraperTnt\StructType\TrackingByConsignmentResponse|\Scraper\ScraperTnt\StructType\TrackingByReferenceResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
