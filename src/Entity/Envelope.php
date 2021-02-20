<?php

namespace Scraper\ScraperTnt\Entity;

class Envelope
{
    private Body $body;

    public function getBody(): Body
    {
        return $this->body;
    }

    public function setBody(Body $body): self
    {
        $this->body = $body;

        return $this;
    }
}
