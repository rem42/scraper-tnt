<?php

declare(strict_types=1);

namespace Scraper\ScraperTnt\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancellation StructType.
 */
#[\AllowDynamicProperties]
class Cancellation extends AbstractStructBase
{
    /**
     * The returnCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $returnCode = null;

    /**
     * The returnMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0.
     */
    protected ?string $returnMessage = null;

    /**
     * Constructor method for cancellation.
     *
     * @uses Cancellation::setReturnCode()
     * @uses Cancellation::setReturnMessage()
     */
    public function __construct(?string $returnCode = null, ?string $returnMessage = null)
    {
        $this
            ->setReturnCode($returnCode)
            ->setReturnMessage($returnMessage)
        ;
    }

    /**
     * Get returnCode value.
     */
    public function getReturnCode(): ?string
    {
        return $this->returnCode;
    }

    /**
     * Set returnCode value.
     */
    public function setReturnCode(?string $returnCode = null): self
    {
        // validation for constraint: string
        if (!is_null($returnCode) && !is_string($returnCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnCode, true), gettype($returnCode)), __LINE__);
        }
        $this->returnCode = $returnCode;

        return $this;
    }

    /**
     * Get returnMessage value.
     */
    public function getReturnMessage(): ?string
    {
        return $this->returnMessage;
    }

    /**
     * Set returnMessage value.
     */
    public function setReturnMessage(?string $returnMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($returnMessage) && !is_string($returnMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnMessage, true), gettype($returnMessage)), __LINE__);
        }
        $this->returnMessage = $returnMessage;

        return $this;
    }
}
