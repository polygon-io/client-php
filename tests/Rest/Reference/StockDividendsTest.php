<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\StockDividends;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class StockDividendsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testStockDividendsCall()
    {
        $requestsContainer = [];

        $stockDividends = new StockDividends('fake-api-key');
        $stockDividends->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/reference/dividends.json')
        );

        $stockDividends->get('AAPL');

        $this->assertPath($requestsContainer, '/v2/reference/dividends/AAPL');
    }
}
