<?php

namespace Scraper\ScraperTnt\Soap;

use JMS\Serializer\Annotation as Serializer;

class ParcelRequest
{
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 */
	protected $sequenceNumber;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $customerReference;
	/**
	 * @var float
	 * @Serializer\Type("float")
	 */
	protected $weight;
	/**
	 * @var integer
	 * @Serializer\Type("integer")
	 */
	protected $insuranceAmount;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $priorityGuarantee;
	/**
	 * @var string
	 * @Serializer\Type("string")
	 */
	protected $comment;

	/**
	 * @return int
	 */
	public function getSequenceNumber(): ?int
	{
		return $this->sequenceNumber;
	}

	/**
	 * @param int $sequenceNumber
	 *
	 * @return $this
	 */
	public function setSequenceNumber(?int $sequenceNumber)
	{
		$this->sequenceNumber = $sequenceNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCustomerReference(): ?string
	{
		return $this->customerReference;
	}

	/**
	 * @param string $customerReference
	 *
	 * @return $this
	 */
	public function setCustomerReference(?string $customerReference)
	{
		$this->customerReference = $customerReference;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getWeight(): ?float
	{
		return $this->weight;
	}

	/**
	 * @param float $weight
	 *
	 * @return $this
	 */
	public function setWeight(?float $weight)
	{
		$this->weight = $weight;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getInsuranceAmount(): ?int
	{
		return $this->insuranceAmount;
	}

	/**
	 * @param int $insuranceAmount
	 *
	 * @return $this
	 */
	public function setInsuranceAmount(?int $insuranceAmount)
	{
		$this->insuranceAmount = $insuranceAmount;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPriorityGuarantee(): ?string
	{
		return $this->priorityGuarantee;
	}

	/**
	 * @param string $priorityGuarantee
	 *
	 * @return $this
	 */
	public function setPriorityGuarantee(?string $priorityGuarantee)
	{
		$this->priorityGuarantee = $priorityGuarantee;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getComment(): ?string
	{
		return $this->comment;
	}

	/**
	 * @param string $comment
	 *
	 * @return $this
	 */
	public function setComment(?string $comment)
	{
		$this->comment = $comment;
		return $this;
	}
}
