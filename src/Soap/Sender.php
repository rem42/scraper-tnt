<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Soap;

class Sender extends Address
{
    public ?string $faxNumber = null;

    public function setFaxNumber(?string $faxNumber): self
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }
}
