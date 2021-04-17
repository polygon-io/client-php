<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\HistoricQuotesV2;
use PolygonIO\Tests\Helpers\MocksHttp;

class HistoricQuotesV2Test extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testHistoricQuotesV2GetCall()
    {
        $requestsContainer = [];

        $historicQuotesV2 = new HistoricQuotesV2('fake-api-key');
        $historicQuotesV2->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'results' => [],
            ]
        );

        $historicQuotesV2->get('AAPL', '2019-2-2');

        $this->assertPath($requestsContainer, '/v2/ticks/stocks/nbbo/AAPL/2019-2-2');
    }
}
