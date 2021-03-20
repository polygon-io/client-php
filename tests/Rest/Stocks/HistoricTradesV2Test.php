<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\HistoricTradesV2;
use PolygonIO\Tests\Helpers\MocksHttp;

class HistoricTradesV2Test extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testHistoricTradesV2GetCall()
    {
        $requestsContainer = [];

        $historicTradesV2 = new HistoricTradesV2('fake-api-key');
        $historicTradesV2->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'ticks' => [],
            ]
        );

        $historicTradesV2->get('AAPL', '2019-2-2');

        $this->assertPath($requestsContainer, '/v2/ticks/stocks/trades/AAPL/2019-2-2');
    }
}
