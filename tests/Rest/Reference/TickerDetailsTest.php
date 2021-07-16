<?php


namespace PolygonIO\Tests\Rest\Reference;


use PolygonIO\Rest\Reference\TickerDetails;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class TickerDetailsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testTickerDetailsGetCall()
    {
        $requestsContainer = [];

        $tickerDetails = new TickerDetails('fake-api-key');
        $tickerDetails->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v1/meta/symbols/AAPL/company.json')
        );

        $tickerDetails->get('AAPL');

        $this->assertPath($requestsContainer, '/v1/meta/symbols/AAPL/company');
    }
}
