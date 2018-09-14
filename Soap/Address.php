<?php

namespace Scraper\ScraperTnt\Soap;

class Address
{
	/**
	 * @var string
	 */
	protected $type;
	/**
	 * @var string
	 */
	protected $typeId;
	/**
	 * @var string
	 */
	protected $name;
	/**
	 * @var string
	 */
	protected $address1;
	/**
	 * @var string
	 */
	protected $address2;
	/**
	 * @var string
	 */
	protected $zipCode;
	/**
	 * @var string
	 */
	protected $city;
	/**
	 * @var string
	 */
	protected $contactLastName;
	/**
	 * @var string
	 */
	protected $contactFirstName;
	/**
	 * @var string
	 */
	protected $emailAddress;
	/**
	 * @var string
	 */
	protected $phoneNumber;

	/**
	 * @return string
	 */
	public function getType(): ?string
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 *
	 * @return $this
	 */
	public function setType(?string $type)
	{
		$this->type = $type;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTypeId(): ?string
	{
		return $this->typeId;
	}

	/**
	 * @param string $typeId
	 *
	 * @return $this
	 */
	public function setTypeId(?string $typeId)
	{
		$this->typeId = $typeId;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName(): ?string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return $this
	 */
	public function setName(?string $name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddress1(): ?string
	{
		return $this->address1;
	}

	/**
	 * @param string $address1
	 *
	 * @return $this
	 */
	public function setAddress1(?string $address1)
	{
		$this->address1 = $address1;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddress2(): ?string
	{
		return $this->address2;
	}

	/**
	 * @param string $address2
	 *
	 * @return $this
	 */
	public function setAddress2(?string $address2)
	{
		$this->address2 = $address2;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getZipCode(): ?string
	{
		return $this->zipCode;
	}

	/**
	 * @param string $zipCode
	 *
	 * @return $this
	 */
	public function setZipCode(?string $zipCode)
	{
		$this->zipCode = $zipCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity(): ?string
	{
		return $this->city;
	}

	/**
	 * @param string $city
	 *
	 * @return $this
	 */
	public function setCity(?string $city)
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getContactLastName(): ?string
	{
		return $this->contactLastName;
	}

	/**
	 * @param string $contactLastName
	 *
	 * @return $this
	 */
	public function setContactLastName(?string $contactLastName)
	{
		$this->contactLastName = $contactLastName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getContactFirstName(): ?string
	{
		return $this->contactFirstName;
	}

	/**
	 * @param string $contactFirstName
	 *
	 * @return $this
	 */
	public function setContactFirstName(?string $contactFirstName)
	{
		$this->contactFirstName = $contactFirstName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmailAddress(): ?string
	{
		return $this->emailAddress;
	}

	/**
	 * @param string $emailAddress
	 *
	 * @return $this
	 */
	public function setEmailAddress(?string $emailAddress)
	{
		$this->emailAddress = $emailAddress;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhoneNumber(): ?string
	{
		return $this->phoneNumber;
	}

	/**
	 * @param string $phoneNumber
	 *
	 * @return $this
	 */
	public function setPhoneNumber(?string $phoneNumber)
	{
		$this->phoneNumber = $phoneNumber;
		return $this;
	}
}
