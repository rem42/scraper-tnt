<?php

namespace Scraper\ScraperTnt\Soap;

class Sender extends Address
{
    protected ?string $faxNumber = null;

    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }
}
