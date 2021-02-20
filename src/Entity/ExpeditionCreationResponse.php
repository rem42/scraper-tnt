<?php

namespace Scraper\ScraperTnt\Entity;

class ExpeditionCreationResponse
{
    private Expedition $expedition;

    public function getExpedition(): Expedition
    {
        return $this->expedition;
    }

    public function setExpedition(Expedition $expedition): self
    {
        $this->expedition = $expedition;

        return $this;
    }
}
