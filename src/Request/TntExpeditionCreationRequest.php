<?php declare(strict_types=1);

namespace Scraper\ScraperTnt\Request;

use Scraper\Scraper\Request\RequestBody;
use Scraper\Scraper\Request\RequestException;
use Scraper\Scraper\Request\RequestHeaders;
use Scraper\ScraperTnt\Factory\SerializerFactory;
use Scraper\ScraperTnt\Soap\Parameters;
use Symfony\Component\Serializer\Encoder\XmlEncoder;

class TntExpeditionCreationRequest extends TntRequest implements RequestBody, RequestHeaders, RequestException
{
    protected string $username;
    protected string $password;
    protected Parameters $parameters;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->parameters = new Parameters();
    }

    public function isThrow(): bool
    {
        return false;
    }

    public function getHeaders(): array
    {
        return [
            'Content-Type' => ' application/xml; charset=utf-8',
        ];
    }

    public function getBody()
    {
        return sprintf(
            '<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://cxf.ws.app.tnt.fr/">
                        %s
                        %s
                    </SOAP-ENV:Envelope>',
            $this->getEnvelopeHeader(),
            $this->getEnvelopeBody()
        );
    }

    public function getParametersObject(): Parameters
    {
        return $this->parameters;
    }

    private function getEnvelopeHeader(): string
    {
        return sprintf(
            '
<SOAP-ENV:Header>
    <wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
        <wsse:UsernameToken>
            <wsse:Username>%s</wsse:Username>
            <wsse:Password>%s</wsse:Password>
        </wsse:UsernameToken>
    </wsse:Security>
</SOAP-ENV:Header>',
            $this->username,
            $this->password
        );
    }

    private function getEnvelopeBody(): string
    {
        $serializer = SerializerFactory::create();
        return str_replace('<?xml version="1.0"?>', '', sprintf(
            '
<SOAP-ENV:Body>
    <ns1:expeditionCreation>
        %s
    </ns1:expeditionCreation>
</SOAP-ENV:Body>',
            $serializer->serialize($this->parameters, 'xml', [
                XmlEncoder::ROOT_NODE_NAME => 'parameters',
                XmlEncoder::FORMAT_OUTPUT => true,
                XmlEncoder::AS_COLLECTION => true,
            ])
        ));
    }
}
