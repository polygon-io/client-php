<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\StockSplits;
use PolygonIO\Tests\Helpers\MocksHttp;

class StockSplitsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testStockSplitsCall()
    {
        $requestsContainer = [];

        $stockSplits = new StockSplits('fake-api-key');
        $stockSplits->httpClient = $this->getHttpMock($requestsContainer);

        $stockSplits->get('AAPL');

        $this->assertPath($requestsContainer, '/v2/reference/splits/AAPL');
    }
}
