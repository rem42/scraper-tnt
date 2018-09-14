<?php

namespace Scraper\ScraperTnt\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class Expedition
{
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $PDFLabels;
	/**
	 * @var ArrayCollection|ParcelResponse[]
	 * @Serializer\Type("ArrayCollection<Scraper\ScraperTnt\Entity\ParcelResponse>")
	 */
	protected $parcelResponses;

	/**
	 * Expedition constructor.
	 */
	public function __construct() {
		$this->parcelResponses = new ArrayCollection();
	}

	/**
	 * @param ParcelResponse $parcelResponse
	 *
	 * @return $this
	 */
	public function addParcelResponse(ParcelResponse $parcelResponse)
	{
		$this->parcelResponses->add($parcelResponse);
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPDFLabels(): ?string
	{
		return $this->PDFLabels;
	}

	/**
	 * @param string $PDFLabels
	 *
	 * @return $this
	 */
	public function setPDFLabels(?string $PDFLabels)
	{
		$this->PDFLabels = $PDFLabels;
		return $this;
	}

	/**
	 * @return ArrayCollection|ParcelResponse[]
	 */
	public function getParcelResponses()
	{
		return $this->parcelResponses;
	}

	/**
	 * @param ArrayCollection|ParcelResponse[] $parcelResponses
	 *
	 * @return $this
	 */
	public function setParcelResponses($parcelResponses)
	{
		$this->parcelResponses = $parcelResponses;
		return $this;
	}
}
