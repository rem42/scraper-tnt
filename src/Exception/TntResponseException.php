<?php

namespace Scraper\ScraperTnt\Exception;

use Scraper\ScraperTnt\Entity\Fault;

class TntResponseException extends TntException
{
    private Fault $fault;

    public function __construct(string $message, Fault $fault)
    {
        $this->fault = $fault;

        $faultStringArray = explode("\n", $fault->getFaultstring());

        $faultStringArray = array_filter($faultStringArray);

        $message .= implode(',', $faultStringArray);

        parent::__construct($message);
    }

    public function getFault(): Fault
    {
        return $this->fault;
    }
}
