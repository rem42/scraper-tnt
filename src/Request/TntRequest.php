<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::POST, scheme: Scheme::HTTP, host: 'www.tnt.fr', path: '/service/')]
abstract class TntRequest extends ScraperRequest
{
}
