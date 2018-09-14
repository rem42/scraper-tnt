<?php

namespace Scraper\ScraperTnt\Entity;

use JMS\Serializer\Annotation as Serializer;

class ParcelResponse
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("parcelNumber")
	 */
	protected $parcelNumber;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("sequenceNumber")
	 */
	protected $sequenceNumber;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("stickerNumber")
	 */
	protected $stickerNumber;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 * @Serializer\SerializedName("trackingURL")
	 */
	protected $trackingURL;

	/**
	 * @return string
	 */
	public function getParcelNumber(): ?string
	{
		return $this->parcelNumber;
	}

	/**
	 * @return string
	 */
	public function getSequenceNumber(): ?string
	{
		return $this->sequenceNumber;
	}

	/**
	 * @return string
	 */
	public function getStickerNumber(): ?string
	{
		return $this->stickerNumber;
	}

	/**
	 * @return string
	 */
	public function getTrackingURL(): ?string
	{
		return $this->trackingURL;
	}
}
