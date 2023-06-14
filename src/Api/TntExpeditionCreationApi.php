<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Api;

use Scraper\ScraperTnt\Entity\Envelope;
use Scraper\ScraperTnt\Entity\Expedition;
use Scraper\ScraperTnt\Exception\TntResponseException;

class TntExpeditionCreationApi extends TntApi
{
    public function execute(): Expedition
    {
        $content = $this->response->getContent(false);

        $content = str_replace(['soap:', 'ns1:'], '', $content);

        /** @var Envelope $data */
        $data = $this->serializer->deserialize($content, Envelope::class, 'xml');

        if ($this->response->getStatusCode() >= 300 || $this->response->getStatusCode() < 200) {
            throw new TntResponseException('TNT request error: ', $data->body->fault);
        }

        return $data->body->expeditionCreationResponse->expedition;
    }
}
