<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Entity;

class Expedition
{
    public string $PDFLabels;

    /** @var array<int, ParcelResponse> */
    public array $parcelResponses = [];

    public function addParcelResponse(ParcelResponse $parcelResponse): self
    {
        $this->parcelResponses[] = $parcelResponse;

        return $this;
    }

    public function setPDFLabels(string $PDFLabels): self
    {
        $this->PDFLabels = $PDFLabels;
        return $this;
    }
}
