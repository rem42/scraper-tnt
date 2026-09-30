<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.tnt.fr/service/?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.tnt.fr/service/?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Scraper\ScraperTnt\ClassMap::get(),
];
/**
 * Samples for Drop ServiceType
 */
$drop = new \Scraper\ScraperTnt\ServiceType\Drop($options);
/**
 * Sample call for dropOffPoints operation/method
 */
if ($drop->dropOffPoints(new \Scraper\ScraperTnt\StructType\DropOffPoints()) !== false) {
    print_r($drop->getResult());
} else {
    print_r($drop->getLastError());
}
/**
 * Samples for Expedition ServiceType
 */
$expedition = new \Scraper\ScraperTnt\ServiceType\Expedition($options);
/**
 * Sample call for expeditionCreation operation/method
 */
if ($expedition->expeditionCreation(new \Scraper\ScraperTnt\StructType\ExpeditionCreation()) !== false) {
    print_r($expedition->getResult());
} else {
    print_r($expedition->getLastError());
}
/**
 * Samples for Tracking ServiceType
 */
$tracking = new \Scraper\ScraperTnt\ServiceType\Tracking($options);
/**
 * Sample call for trackingByReference operation/method
 */
if ($tracking->trackingByReference(new \Scraper\ScraperTnt\StructType\TrackingByReference()) !== false) {
    print_r($tracking->getResult());
} else {
    print_r($tracking->getLastError());
}
/**
 * Sample call for trackingByConsignment operation/method
 */
if ($tracking->trackingByConsignment(new \Scraper\ScraperTnt\StructType\TrackingByConsignment()) !== false) {
    print_r($tracking->getResult());
} else {
    print_r($tracking->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Scraper\ScraperTnt\ServiceType\Get($options);
/**
 * Sample call for getPickupContext operation/method
 */
if ($get->getPickupContext(new \Scraper\ScraperTnt\StructType\GetPickupContext()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Pick ServiceType
 */
$pick = new \Scraper\ScraperTnt\ServiceType\Pick($options);
/**
 * Sample call for pickUpRequestCancellation operation/method
 */
if ($pick->pickUpRequestCancellation(new \Scraper\ScraperTnt\StructType\PickUpRequestCancellation()) !== false) {
    print_r($pick->getResult());
} else {
    print_r($pick->getLastError());
}
/**
 * Sample call for pickUpRequestCreation operation/method
 */
if ($pick->pickUpRequestCreation(new \Scraper\ScraperTnt\StructType\PickUpRequestCreation()) !== false) {
    print_r($pick->getResult());
} else {
    print_r($pick->getLastError());
}
/**
 * Samples for Tnt ServiceType
 */
$tnt = new \Scraper\ScraperTnt\ServiceType\Tnt($options);
/**
 * Sample call for tntDepots operation/method
 */
if ($tnt->tntDepots(new \Scraper\ScraperTnt\StructType\TntDepots()) !== false) {
    print_r($tnt->getResult());
} else {
    print_r($tnt->getLastError());
}
/**
 * Samples for Cities ServiceType
 */
$cities = new \Scraper\ScraperTnt\ServiceType\Cities($options);
/**
 * Sample call for citiesGuide operation/method
 */
if ($cities->citiesGuide(new \Scraper\ScraperTnt\StructType\CitiesGuide()) !== false) {
    print_r($cities->getResult());
} else {
    print_r($cities->getLastError());
}
/**
 * Samples for Feasibility ServiceType
 */
$feasibility = new \Scraper\ScraperTnt\ServiceType\Feasibility($options);
/**
 * Sample call for feasibility operation/method
 */
if ($feasibility->feasibility(new \Scraper\ScraperTnt\StructType\Feasibility()) !== false) {
    print_r($feasibility->getResult());
} else {
    print_r($feasibility->getLastError());
}
