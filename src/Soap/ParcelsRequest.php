<?php

namespace Scraper\ScraperTnt\Soap;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class ParcelsRequest
{
    /** @var Collection<int, ParcelRequest> */
    protected Collection $parcelRequest;

    public function __construct()
    {
        $this->parcelRequest = new ArrayCollection();
    }

    public function addParcelRequest(ParcelRequest $parcelRequest): self
    {
        $this->parcelRequest->add($parcelRequest);

        return $this;
    }

    /**
     * @return Collection<int, ParcelRequest>
     */
    public function getParcelRequest(): Collection
    {
        return $this->parcelRequest;
    }
}
