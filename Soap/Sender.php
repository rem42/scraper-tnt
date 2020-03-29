<?php

namespace Scraper\ScraperTnt\Soap;

class Sender extends Address
{
    /**
     * @var string
     */
    protected $faxNumber;

    /**
     * @return string
     */
    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    /**
     * @param string $faxNumber
     *
     * @return $this
     */
    public function setFaxNumber(?string $faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }
}
