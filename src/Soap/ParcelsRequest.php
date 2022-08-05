<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Soap;

class ParcelsRequest
{
    /** @var array<int, ParcelRequest> */
    public array $parcelRequest = [];

    public function addParcelRequest(ParcelRequest $parcelRequest): self
    {
        $this->parcelRequest[] = $parcelRequest;

        return $this;
    }
}
