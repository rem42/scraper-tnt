<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Entity;

class Envelope
{
    public Body $body;

    public function setBody(Body $body): self
    {
        $this->body = $body;
        return $this;
    }
}
