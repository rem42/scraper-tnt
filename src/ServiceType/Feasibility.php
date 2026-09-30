<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Feasibility ServiceType.
 */
class Feasibility extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named feasibility.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperTnt\StructType\FeasibilityResponse|bool
     */
    public function feasibility(\Scraper\ScraperTnt\StructType\Feasibility $parameters)
    {
        try {
            $this->setResult($resultFeasibility = $this->getSoapClient()->__soapCall('feasibility', [
                $parameters,
            ], [], [], $this->outputHeaders));

            return $resultFeasibility;
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
     * @return \Scraper\ScraperTnt\StructType\FeasibilityResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
