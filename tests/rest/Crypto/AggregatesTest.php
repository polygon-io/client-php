<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PHPUnit\Framework\TestCase;
use PolygonIO\Rest\Crypto\Aggregates;
use PolygonIO\Tests\Helpers\MocksHttp;

class AggregatesTest extends TestCase
{
    use MocksHttp;

    public function testAggregatesCloseGetCall()
    {
        $requestsContainer = [];

        $previousClose = new Aggregates('fake-api-key');
        $previousClose->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'results' => [],
            ]
        );

        $previousClose->get('AAPL', 1, '2018-2-2', '2019-2-2');

        $this->assertPath($requestsContainer, '/v2/aggs/ticker/AAPL/range/1/days/2018-2-2/2019-2-2');
    }
}
