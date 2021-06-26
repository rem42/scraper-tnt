<?php

namespace Scraper\ScraperTnt\Soap;

class ParcelRequest
{
    private ?int $sequenceNumber = null;

    private ?string $customerReference = null;

    private ?float $weight = null;

    private ?int $insuranceAmount = null;

    private ?string $priorityGuarantee = null;

    private ?string $comment = null;

    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    public function setSequenceNumber(?int $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    public function getCustomerReference(): ?string
    {
        return $this->customerReference;
    }

    public function setCustomerReference(?string $customerReference): self
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getInsuranceAmount(): ?int
    {
        return $this->insuranceAmount;
    }

    public function setInsuranceAmount(?int $insuranceAmount): self
    {
        $this->insuranceAmount = $insuranceAmount;

        return $this;
    }

    public function getPriorityGuarantee(): ?string
    {
        return $this->priorityGuarantee;
    }

    public function setPriorityGuarantee(?string $priorityGuarantee): self
    {
        $this->priorityGuarantee = $priorityGuarantee;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }
}
