<?php

namespace Scraper\ScraperTnt\Tests\Adapter;

use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperTnt\Api\TntExpeditionCreationApi;
use Scraper\ScraperTnt\Entity\Expedition;
use Scraper\ScraperTnt\Entity\ParcelResponse;
use Scraper\ScraperTnt\Exception\TntResponseException;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @internal
 */
class TntExpeditionCreationApiTest extends TestCase
{
    public function testGetParcelResponse(): void
    {
        $scraperRequest = $this->createMock(ScraperRequest::class);
        $scraper        = new Scraper();

        $responseInterface = $this->createMock(ResponseInterface::class);
        $responseInterface
            ->method('getStatusCode')->willReturn(200);
        $responseInterface
            ->method('getContent')->willReturn('<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Body><ns1:expeditionCreationResponse xmlns:ns1="http://cxf.ws.app.tnt.fr/"><Expedition><PDFLabels></PDFLabels><parcelResponses><parcelNumber>7412345000000007</parcelNumber><sequenceNumber>1</sequenceNumber><stickerNumber></stickerNumber><trackingURL>http://www.tnt.fr/public/suivi_colis/recherche/visubontransport.do?bonTransport=7412345000000007</trackingURL></parcelResponses></Expedition></ns1:expeditionCreationResponse></soap:Body></soap:Envelope>');

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

        $this->assertEquals('7412345000000007', $parcelResponse->getParcelNumber());
    }

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
}
