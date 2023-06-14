<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Soap;

class Receiver extends Address
{
    public ?string $instructions = null;
    public ?string $accessCode = null;
    public ?string $faxNumber = null;
    public ?string $floorNumber = null;
    public ?string $buldingId = null;
    public ?bool $sendNotification = null;

    public function setInstructions(?string $instructions): self
    {
        $this->instructions = $instructions;
        return $this;
    }

    public function setAccessCode(?string $accessCode): self
    {
        $this->accessCode = $accessCode;
        return $this;
    }

    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    public function setFloorNumber(?string $floorNumber): self
    {
        $this->floorNumber = $floorNumber;
        return $this;
    }

    public function setBuldingId(?string $buldingId): self
    {
        $this->buldingId = $buldingId;
        return $this;
    }

    public function setSendNotification(?bool $sendNotification): self
    {
        $this->sendNotification = $sendNotification;
        return $this;
    }
}
