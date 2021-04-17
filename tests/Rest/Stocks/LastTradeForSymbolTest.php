<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\LastTradeForSymbol;
use PolygonIO\Tests\Helpers\MocksHttp;

class LastTradeForSymbolTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testLastTradeForSymbolGetCall()
    {
        $requestsContainer = [];

        $lastTradeForSymbol = new LastTradeForSymbol('fake-api-key');
        $lastTradeForSymbol->httpClient = $this->getHttpMock($requestsContainer);

        $lastTradeForSymbol->get('AAPL');

        $this->assertPath($requestsContainer, '/v1/last/stocks/AAPL');
    }
}
