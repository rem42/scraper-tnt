<?php

namespace Scraper\ScraperTnt\Soap;

class Receiver extends Address
{
	/**
	 * @var string
	 */
	protected $instructions;
	/**
	 * @var string
	 */
	protected $accessCode;
	/**
	 * @var string
	 */
	protected $faxNumber;
	/**
	 * @var string
	 */
	protected $floorNumber;
	/**
	 * @var string
	 */
	protected $buldingId;
	/**
	 * @var boolean
	 */
	protected $sendNotification;

	/**
	 * @return string
	 */
	public function getInstructions(): ?string
	{
		return $this->instructions;
	}

	/**
	 * @param string $instructions
	 *
	 * @return $this
	 */
	public function setInstructions(?string $instructions)
	{
		$this->instructions = $instructions;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAccessCode(): ?string
	{
		return $this->accessCode;
	}

	/**
	 * @param string $accessCode
	 *
	 * @return $this
	 */
	public function setAccessCode(?string $accessCode)
	{
		$this->accessCode = $accessCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFaxNumber(): ?string
	{
		return $this->faxNumber;
	}

	/**
	 * @param string $faxNumber
	 *
	 * @return $this
	 */
	public function setFaxNumber(?string $faxNumber)
	{
		$this->faxNumber = $faxNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFloorNumber(): ?string
	{
		return $this->floorNumber;
	}

	/**
	 * @param string $floorNumber
	 *
	 * @return $this
	 */
	public function setFloorNumber(?string $floorNumber)
	{
		$this->floorNumber = $floorNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBuldingId(): ?string
	{
		return $this->buldingId;
	}

	/**
	 * @param string $buldingId
	 *
	 * @return $this
	 */
	public function setBuldingId(?string $buldingId)
	{
		$this->buldingId = $buldingId;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function isSendNotification(): ?bool
	{
		return $this->sendNotification;
	}

	/**
	 * @param bool $sendNotification
	 *
	 * @return $this
	 */
	public function setSendNotification(?bool $sendNotification)
	{
		$this->sendNotification = $sendNotification;
		return $this;
	}
}
