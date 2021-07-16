<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\StockSplits;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class StockSplitsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testStockSplitsCall()
    {
        $requestsContainer = [];

        $stockSplits = new StockSplits('fake-api-key');
        $stockSplits->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/reference/splits.json')
        );

        $stockSplits->get('AAPL');

        $this->assertPath($requestsContainer, '/v2/reference/splits/AAPL');
    }
}
