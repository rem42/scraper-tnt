<?php

namespace Scraper\ScraperTnt\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(scheme="HTTP", host="www.tnt.fr", path="/service/", method="POST")
 */
abstract class TntRequest extends ScraperRequest
{
}
