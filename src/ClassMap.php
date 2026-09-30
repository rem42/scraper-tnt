<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt;

/**
 * Class which returns the class map definition.
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS.
     *
     * @return array<string>
     */
    final public static function get(): array
    {
        return [
            'dropOffPoint' => '\Scraper\ScraperTnt\StructType\DropOffPoint',
            'receiver' => '\Scraper\ScraperTnt\StructType\Receiver',
            'sender' => '\Scraper\ScraperTnt\StructType\Sender',
            'parcelsRequest' => '\Scraper\ScraperTnt\StructType\ParcelsRequest',
            'parcelRequest' => '\Scraper\ScraperTnt\StructType\ParcelRequest',
            'address' => '\Scraper\ScraperTnt\StructType\Address',
            'fullAddress' => '\Scraper\ScraperTnt\StructType\FullAddress',
            'fullAddressPlusInfo' => '\Scraper\ScraperTnt\StructType\FullAddressPlusInfo',
            'openingHours' => '\Scraper\ScraperTnt\StructType\OpeningHours',
            'dailyOpeningHours' => '\Scraper\ScraperTnt\StructType\DailyOpeningHours',
            'autoValidatedInput' => '\Scraper\ScraperTnt\StructType\AutoValidatedInput',
            'expeditionCreationParameter' => '\Scraper\ScraperTnt\StructType\ExpeditionCreationParameter',
            'pickUpRequest' => '\Scraper\ScraperTnt\StructType\PickUpRequest',
            'paybackInfo' => '\Scraper\ScraperTnt\StructType\PaybackInfo',
            'expeditionResponse' => '\Scraper\ScraperTnt\StructType\ExpeditionResponse',
            'parcelResponse' => '\Scraper\ScraperTnt\StructType\ParcelResponse',
            'parcel' => '\Scraper\ScraperTnt\StructType\Parcel',
            'event' => '\Scraper\ScraperTnt\StructType\Event',
            'pickupContextParameter' => '\Scraper\ScraperTnt\StructType\PickupContextParameter',
            'pickupContext' => '\Scraper\ScraperTnt\StructType\PickupContext',
            'depotInfo' => '\Scraper\ScraperTnt\StructType\DepotInfo',
            'cancellation' => '\Scraper\ScraperTnt\StructType\Cancellation',
            'city' => '\Scraper\ScraperTnt\StructType\City',
            'feasibilityParameter' => '\Scraper\ScraperTnt\StructType\FeasibilityParameter',
            'service' => '\Scraper\ScraperTnt\StructType\Service',
            'pickupRequestCreationParameter' => '\Scraper\ScraperTnt\StructType\PickupRequestCreationParameter',
            'notification' => '\Scraper\ScraperTnt\StructType\Notification',
            'ServiceException' => '\Scraper\ScraperTnt\StructType\ServiceException',
            'dropOffPoints' => '\Scraper\ScraperTnt\StructType\DropOffPoints',
            'dropOffPointsResponse' => '\Scraper\ScraperTnt\StructType\DropOffPointsResponse',
            'expeditionCreation' => '\Scraper\ScraperTnt\StructType\ExpeditionCreation',
            'expeditionCreationResponse' => '\Scraper\ScraperTnt\StructType\ExpeditionCreationResponse',
            'trackingByReference' => '\Scraper\ScraperTnt\StructType\TrackingByReference',
            'trackingByReferenceResponse' => '\Scraper\ScraperTnt\StructType\TrackingByReferenceResponse',
            'trackingByConsignment' => '\Scraper\ScraperTnt\StructType\TrackingByConsignment',
            'trackingByConsignmentResponse' => '\Scraper\ScraperTnt\StructType\TrackingByConsignmentResponse',
            'getPickupContext' => '\Scraper\ScraperTnt\StructType\GetPickupContext',
            'getPickupContextResponse' => '\Scraper\ScraperTnt\StructType\GetPickupContextResponse',
            'tntDepots' => '\Scraper\ScraperTnt\StructType\TntDepots',
            'tntDepotsResponse' => '\Scraper\ScraperTnt\StructType\TntDepotsResponse',
            'pickUpRequestCancellation' => '\Scraper\ScraperTnt\StructType\PickUpRequestCancellation',
            'pickUpRequestCancellationResponse' => '\Scraper\ScraperTnt\StructType\PickUpRequestCancellationResponse',
            'citiesGuide' => '\Scraper\ScraperTnt\StructType\CitiesGuide',
            'citiesGuideResponse' => '\Scraper\ScraperTnt\StructType\CitiesGuideResponse',
            'feasibility' => '\Scraper\ScraperTnt\StructType\Feasibility',
            'feasibilityResponse' => '\Scraper\ScraperTnt\StructType\FeasibilityResponse',
            'pickUpRequestCreation' => '\Scraper\ScraperTnt\StructType\PickUpRequestCreation',
            'pickUpRequestCreationResponse' => '\Scraper\ScraperTnt\StructType\PickUpRequestCreationResponse',
        ];
    }
}
