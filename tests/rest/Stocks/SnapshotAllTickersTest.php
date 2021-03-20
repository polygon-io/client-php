<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\SnapshotAllTickers;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotAllTickersTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testSnapshotAllTickersGetCall()
    {
        $requestsContainer = [];

        $snapshotAllTickers = new SnapshotAllTickers('fake-api-key');
        $snapshotAllTickers->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'tickers' => [],
            ]
        );

        $snapshotAllTickers->get();

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/us/markets/stocks/tickers');
    }
}
