<?php

namespace Scraper\ScraperTnt\Entity;

class Body
{
    private ExpeditionCreationResponse $expeditionCreationResponse;

    private Fault $fault;

    public function getExpeditionCreationResponse(): ExpeditionCreationResponse
    {
        return $this->expeditionCreationResponse;
    }

    public function setExpeditionCreationResponse(ExpeditionCreationResponse $expeditionCreationResponse): self
    {
        $this->expeditionCreationResponse = $expeditionCreationResponse;

        return $this;
    }

    public function getFault(): Fault
    {
        return $this->fault;
    }

    public function setFault(Fault $fault): self
    {
        $this->fault = $fault;

        return $this;
    }
}
