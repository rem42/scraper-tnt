<?php

namespace Scraper\ScraperTnt\Request;

use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use Scraper\ScraperTnt\Soap\Parameters;

class TntExpeditionCreationRequest extends TntRequest
{
	/**
	 * @var Parameters
	 */
	protected $parameters;
	/**
	 * TntExpeditionCreationRequest constructor.
	 */
	public function __construct() {
		$this->parameters = new Parameters();
	}

	public function getBody()
	{
		$serializer = SerializerBuilder::create()
			->setPropertyNamingStrategy(new IdenticalPropertyNamingStrategy())
			->build();
		$data = $serializer->serialize($this->parameters, "json");
		return [
			'parameters' => json_decode($data, true)
		];
	}

	public function getAction(): string
	{
		return 'expeditionCreation';
	}

	/**
	 * @return Parameters
	 */
	public function getParametersObject(){
		return $this->parameters;
	}
}
