<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\LastQuoteForSymbol;
use PolygonIO\Tests\Helpers\MocksHttp;

class LastQuoteForSymbolTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testLastQuoteForSymbolGetCall()
    {
        $requestsContainer = [];

        $lastTradeForSymbol = new LastQuoteForSymbol('fake-api-key');
        $lastTradeForSymbol->httpClient = $this->getHttpMock($requestsContainer);

        $lastTradeForSymbol->get('AAPL');

        $this->assertPath($requestsContainer, '/v1/last_quote/stocks/AAPL');
    }
}
