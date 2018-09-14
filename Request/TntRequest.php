<?php

namespace Scraper\ScraperTnt\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\RequestSoap;

/**
 * Class TntRequest
 * @package ScraperTnt\Request
 * @UrlAnnotation(protocol="SOAP", baseUrl="http://www.tnt.fr/service/?wsdl", contentType="text")
 */
abstract class TntRequest extends RequestSoap
{
	/**
	 * @var string
	 */
	protected $username;
	/**
	 * @var string
	 */
	protected $password;

	public function isDoRequest(): bool
	{
		return false;
	}

	public function getVersion(): string
	{
		return null;
	}

	public function getHeaders()
	{
		$authheader = sprintf('
	<wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
	  <wsse:UsernameToken>
		<wsse:Username>%s</wsse:Username>
		<wsse:Password>%s</wsse:Password>
	 </wsse:UsernameToken>
	</wsse:Security>', htmlspecialchars($this->username), htmlspecialchars($this->password));

		$authvars = new \SoapVar($authheader, XSD_ANYXML);
		$header   = new \SoapHeader("http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd", "Security", $authvars);

		return [
			$header
		];
	}

	public function getParameters()
	{
		return [
			'trace' => 1,
			'stream_context' => stream_context_create([
				'http' => [
					'user_agent' => 'PHP/SOAP',
					'accept' => 'application/xml',
				],
			]),
		];
	}

	/**
	 * @param string $username
	 *
	 * @return $this
	 */
	public function setUsername(?string $username)
	{
		$this->username = $username;
		return $this;
	}

	/**
	 * @param string $password
	 *
	 * @return $this
	 */
	public function setPassword(?string $password)
	{
		$this->password = $password;
		return $this;
	}
}
