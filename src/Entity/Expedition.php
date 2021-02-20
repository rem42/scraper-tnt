<?php

namespace Scraper\ScraperTnt\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

class Expedition
{
    private string $PDFLabels;

    /** @var Collection<int, ParcelResponse> */
    private Collection $parcelResponses;

    public function getPDFLabels(): string
    {
        return $this->PDFLabels;
    }

    public function setPDFLabels(string $PDFLabels): self
    {
        $this->PDFLabels = $PDFLabels;

        return $this;
    }

    /**
     * @param array<ParcelResponse> $parcelResponses
     */
    public function setParcelResponses(array $parcelResponses): self
    {
        $this->parcelResponses = new ArrayCollection($parcelResponses);

        return $this;
    }

    /**
     * @return Collection<int, ParcelResponse>
     */
    public function getParcelResponses(): Collection
    {
        return $this->parcelResponses;
    }
}
