<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\StockFinancials;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class StockFinancialsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testStockFinancialsCall()
    {
        $requestsContainer = [];

        $stockFinancials = new StockFinancials('fake-api-key');
        $stockFinancials->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/reference/financials.json')
        );

        $stockFinancials->get('AAPL');

        $this->assertPath($requestsContainer, '/v2/reference/financials/AAPL');
    }
}
