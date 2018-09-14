<?php

namespace Scraper\ScraperTnt\Api;

use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperTnt\Entity\Expedition;
use Scraper\ScraperTnt\Entity\ParcelResponse;
use Scraper\ScraperTnt\Request\TntExpeditionCreationRequest;

class TntExpeditionCreationApi extends TntApi
{
	/**
	 * @var TntExpeditionCreationRequest
	 */
	protected $request;

	public function execute()
	{
		$serializer = SerializerBuilder::create()
			->build()
		;
		$this->data = unserialize($this->data);

		$expedition = new Expedition();
		$expedition
			->setPDFLabels($this->data->Expedition->PDFLabels)
		;

		if (is_array($this->data->Expedition->parcelResponses)) {
			$parcels = $serializer->deserialize(json_encode($this->data->Expedition->parcelResponses), "ArrayCollection<Scraper\ScraperTnt\Entity\ParcelResponse>", 'json');
			$expedition->setParcelResponses($parcels);
		} else {
			$parcel    = $serializer->deserialize(json_encode($this->data->Expedition->parcelResponses), ParcelResponse::class, 'json');
			$expedition->addParcelResponse($parcel);
		}
		return $expedition;
	}
}
