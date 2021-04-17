<?php


namespace PolygonIO\Tests\Rest\Stocks;


use PolygonIO\Rest\Stocks\HistoricTrades;
use PolygonIO\Tests\Helpers\MocksHttp;

class HistoricTradesTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testHistoricTradesGetCall()
    {
        $requestsContainer = [];

        $historicTrades = new HistoricTrades('fake-api-key');
        $historicTrades->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'ticks' => [],
            ]
        );

        $historicTrades->get('AAPL', '2019-2-2');

        $this->assertPath($requestsContainer, '/v1/historic/trades/AAPL/2019-2-2');
    }
}
