<?php

namespace Scraper\ScraperTnt\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation as Serializer;

class ParcelsRequest
{
    /**
     * @var ArrayCollection|ParcelRequest[]
     * @Serializer\Type("ArrayCollection<Scraper\ScraperTnt\Soap\ParcelRequest>")
     */
    protected $parcelRequest;

    /**
     * ParcelsRequest constructor.
     */
    public function __construct()
    {
        $this->parcelRequest = new ArrayCollection();
    }

    /**
     * @return ArrayCollection|ParcelRequest[]
     */
    public function getParcelRequest()
    {
        return $this->parcelRequest;
    }

    /**
     * @param ArrayCollection|ParcelRequest[] $parcelRequest
     *
     * @return $this
     */
    public function setParcelRequest($parcelRequest)
    {
        $this->parcelRequest = $parcelRequest;
        return $this;
    }
}
