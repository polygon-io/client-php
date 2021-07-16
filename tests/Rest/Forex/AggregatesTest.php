<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\Aggregates;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class AggregatesTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testAggregatesCloseGetCall()
    {
        $requestsContainer = [];

        $previousClose = new Aggregates('fake-api-key');
        $previousClose->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/aggs/ticker/C:EURUSD/range/1/day/2020-10-14/2020-10-15.json')
        );

        $previousClose->get('C:EURUSD', 1, '2020-10-14', '2020-10-15');

        $this->assertPath($requestsContainer, '/v2/aggs/ticker/C:EURUSD/range/1/day/2020-10-14/2020-10-15');
    }
}
