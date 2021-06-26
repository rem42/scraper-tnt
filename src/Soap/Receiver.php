<?php

namespace Scraper\ScraperTnt\Soap;

class Receiver extends Address
{
    protected ?string $instructions = null;

    protected ?string $accessCode = null;

    protected ?string $faxNumber = null;

    protected ?string $floorNumber = null;

    protected ?string $buldingId = null;

    protected ?bool $sendNotification = null;

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(?string $instructions): self
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function getAccessCode(): ?string
    {
        return $this->accessCode;
    }

    public function setAccessCode(?string $accessCode): self
    {
        $this->accessCode = $accessCode;

        return $this;
    }

    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    public function getFloorNumber(): ?string
    {
        return $this->floorNumber;
    }

    public function setFloorNumber(?string $floorNumber): self
    {
        $this->floorNumber = $floorNumber;

        return $this;
    }

    public function getBuldingId(): ?string
    {
        return $this->buldingId;
    }

    public function setBuldingId(?string $buldingId): self
    {
        $this->buldingId = $buldingId;

        return $this;
    }

    public function getSendNotification(): ?bool
    {
        return $this->sendNotification;
    }

    public function setSendNotification(?bool $sendNotification): self
    {
        $this->sendNotification = $sendNotification;

        return $this;
    }
}
