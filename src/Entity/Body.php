<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Entity;

class Body
{
    public ExpeditionCreationResponse $expeditionCreationResponse;
    public Fault $fault;

    public function setExpeditionCreationResponse(ExpeditionCreationResponse $expeditionCreationResponse): self
    {
        $this->expeditionCreationResponse = $expeditionCreationResponse;
        return $this;
    }

    public function setFault(Fault $fault): self
    {
        $this->fault = $fault;
        return $this;
    }
}
