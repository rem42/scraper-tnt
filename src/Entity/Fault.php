<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Entity;

class Fault
{
    public string $faultcode;
    public string $faultstring;

    public function setFaultcode(string $faultcode): self
    {
        $this->faultcode = $faultcode;
        return $this;
    }

    public function setFaultstring(string $faultstring): self
    {
        $this->faultstring = $faultstring;
        return $this;
    }
}
