<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\HistoricQuotes;
use PolygonIO\Tests\Helpers\MocksHttp;

class HistoricQuotesTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testHistoricQuotesGetCall()
    {
        $requestsContainer = [];

        $historicQuotes = new HistoricQuotes('fake-api-key');
        $historicQuotes->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'ticks' => [],
            ]
        );

        $historicQuotes->get('AAPL', '2019-2-2');

        $this->assertPath($requestsContainer, '/v1/historic/quotes/AAPL/2019-2-2');
    }
}
