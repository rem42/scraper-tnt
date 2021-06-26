<?php

namespace Scraper\ScraperTnt\Entity;

class Fault
{
    private string $faultcode;

    private string $faultstring;

    public function getFaultcode(): string
    {
        return $this->faultcode;
    }

    public function setFaultcode(string $faultcode): self
    {
        $this->faultcode = $faultcode;

        return $this;
    }

    public function getFaultstring(): string
    {
        return $this->faultstring;
    }

    public function setFaultstring(string $faultstring): self
    {
        $this->faultstring = $faultstring;

        return $this;
    }
}
