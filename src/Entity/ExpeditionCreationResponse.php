<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Entity;

class ExpeditionCreationResponse
{
    public Expedition $expedition;

    public function setExpedition(Expedition $expedition): self
    {
        $this->expedition = $expedition;
        return $this;
    }
}
