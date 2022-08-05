<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Entity;

class ParcelResponse
{
    public ?string $parcelNumber = null;
    public ?string $sequenceNumber = null;
    public ?string $stickerNumber = null;
    public ?string $trackingURL = null;

    public function setParcelNumber(?string $parcelNumber): self
    {
        $this->parcelNumber = $parcelNumber;
        return $this;
    }

    public function setSequenceNumber(?string $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    public function setStickerNumber(?string $stickerNumber): self
    {
        $this->stickerNumber = $stickerNumber;
        return $this;
    }

    public function setTrackingURL(?string $trackingURL): self
    {
        $this->trackingURL = $trackingURL;
        return $this;
    }
}
