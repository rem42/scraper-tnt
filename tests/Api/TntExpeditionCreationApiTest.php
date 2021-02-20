<?php

namespace Scraper\ScraperTnt\Tests\Adapter;

use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperTnt\Api\TntExpeditionCreationApi;
use Scraper\ScraperTnt\Exception\TntResponseException;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @internal
 */
class TntExpeditionCreationApiTest extends TestCase
{
    public function testWithWrongResponseHttpCode(): void
    {
        $scraperRequest = $this->createMock(ScraperRequest::class);
        $scraper        = new Scraper();

        $responseInterface = $this->createMock(ResponseInterface::class);
        $responseInterface
            ->method('getStatusCode')->willReturn(400);
        $responseInterface
            ->method('getContent')->willReturn("<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Body><soap:Fault><faultcode>soap:Server</faultcode><faultstring>The field 'accountNumber' is mandatory.\n</faultstring><detail><ns1:ServiceException xmlns:ns1=\"http://cxf.ws.app.tnt.fr/\"></ns1:ServiceException></detail></soap:Fault></soap:Body></soap:Envelope>");

        $tntExpeditionCreationApi = new TntExpeditionCreationApi(
            $scraperRequest,
            $scraper,
            $responseInterface
        );

        $this->expectException(TntResponseException::class);
        $this->expectExceptionMessage('TNT request error: The field \'accountNumber\' is mandatory.');

        $tntExpeditionCreationApi->execute();
    }

    public function testOk(): void
    {
        /*$scraperRequest = $this->createMock(ScraperRequest::class);
        $scraper        = new Scraper();

        $responseInterface = $this->createMock(ResponseInterface::class);
        $responseInterface
            ->method('getStatusCode')->willReturn(200);
        $responseInterface
            ->method('getContent')->willReturn("<soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\"><soap:Body><soap:Fault><faultcode>soap:Server</faultcode><faultstring>The field 'accountNumber' is mandatory.\n</faultstring><detail><ns1:ServiceException xmlns:ns1=\"http://cxf.ws.app.tnt.fr/\"></ns1:ServiceException></detail></soap:Fault></soap:Body></soap:Envelope>");

        $tntExpeditionCreationApi = new TntExpeditionCreationApi(
            $scraperRequest,
            $scraper,
            $responseInterface
        );

        $expedition = $tntExpeditionCreationApi->execute();

        $this->assertInstanceOf(Expedition::class, $expedition);

        $this->assertCount(1, $expedition->getParcelResponses());

        $parcelResponse = $expedition->getParcelResponses()->first();

        $this->assertInstanceOf(ParcelResponse::class, $parcelResponse);

        $this->assertEquals('6A00420042004', $parcelResponse->getParcelNumber());*/
    }
}
