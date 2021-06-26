<?php

namespace Scraper\ScraperTnt\Entity;

class ParcelResponse
{
    private ?string $parcelNumber = null;

    private ?string $sequenceNumber = null;

    private ?string $stickerNumber = null;

    private ?string $trackingURL = null;

    public function getParcelNumber(): ?string
    {
        return $this->parcelNumber;
    }

    public function setParcelNumber(?string $parcelNumber): self
    {
        $this->parcelNumber = $parcelNumber;

        return $this;
    }

    public function getSequenceNumber(): ?string
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(?string $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getStickerNumber(): ?string
    {
        return $this->stickerNumber;
    }

    public function setStickerNumber(?string $stickerNumber): self
    {
        $this->stickerNumber = $stickerNumber;

        return $this;
    }

    public function getTrackingURL(): ?string
    {
        return $this->trackingURL;
    }

    public function setTrackingURL(?string $trackingURL): self
    {
        $this->trackingURL = $trackingURL;

        return $this;
    }
}
