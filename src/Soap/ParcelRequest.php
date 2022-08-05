<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Soap;

class ParcelRequest
{
    public ?int $sequenceNumber = null;
    public ?string $customerReference = null;
    public ?float $weight = null;
    public ?int $insuranceAmount = null;
    public ?string $priorityGuarantee = null;
    public ?string $comment = null;

    public function setSequenceNumber(?int $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    public function setCustomerReference(?string $customerReference): self
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;
        return $this;
    }

    public function setInsuranceAmount(?int $insuranceAmount): self
    {
        $this->insuranceAmount = $insuranceAmount;
        return $this;
    }

    public function setPriorityGuarantee(?string $priorityGuarantee): self
    {
        $this->priorityGuarantee = $priorityGuarantee;
        return $this;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
}
