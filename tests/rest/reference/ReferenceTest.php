<?php
use PHPUnit\Framework\TestCase;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\Psr7\Response;

use PolygonIO\rest\reference\Reference;
use PolygonIO\rest\reference\Tickers;

final class ReferenceTest extends TestCase {

    public function testExportAllTheMethodsFromReferenceApi() {
        $reference = new Reference('fake-api-key');
        $this->assertInstanceOf(Tickers::class, $reference->tickers);
        $this->assertInstanceOf(\PolygonIO\rest\reference\TickerTypes::class, $reference->tickerTypes);
        $this->assertInstanceOf(\PolygonIO\rest\reference\TickerDetails::class, $reference->tickerDetails);
        $this->assertInstanceOf(\PolygonIO\rest\reference\TickerNews::class, $reference->tickerNews);
        $this->assertInstanceOf(\PolygonIO\rest\reference\Markets::class, $reference->markets);
        $this->assertInstanceOf(\PolygonIO\rest\reference\Locales::class, $reference->locales);
        $this->assertInstanceOf(\PolygonIO\rest\reference\StockSplits::class, $reference->stockSplits);
        $this->assertInstanceOf(\PolygonIO\rest\reference\StockDividends::class, $reference->stockDividends);
        $this->assertInstanceOf(\PolygonIO\rest\reference\StockFinancials::class, $reference->stockFinancials);
        $this->assertInstanceOf(\PolygonIO\rest\reference\MarketStatus::class, $reference->marketStatus);
        $this->assertInstanceOf(\PolygonIO\rest\reference\MarketHolidays::class, $reference->marketHolidays);
    }

    public function testTickersGetCall() {
        $requestsContainer = [];

        $tickers = new Tickers('fake-api-key');
        $tickers->httpClient = $this->getHttpMock($requestsContainer);

        $tickers->get();

        $this->assertPath($requestsContainer, '/v2/reference/tickers');
    }

    private function getHttpMock(&$requestsContainer, $response=[]) {
        $mock = new MockHandler([
            new Response(200, $response),
        ]);
        $handler = HandlerStack::create($mock);

        $history = Middleware::history($requestsContainer);
        $handler->push($history);

        return new Client(['handler' => $handler]);
    }

    private function assertPath($requests, $path) {
        $this->assertCount(1, $requests);
        $this->assertEquals($path, $requests[0]['request']->getUri()->getPath());
    }

}