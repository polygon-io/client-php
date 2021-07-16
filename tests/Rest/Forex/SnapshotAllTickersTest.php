<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\SnapshotAllTickers;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotAllTickersTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testSnapshotAllTickersGetCall()
    {
        $requestsContainer = [];

        $snapshotAllTickers = new SnapshotAllTickers('fake-api-key');
        $snapshotAllTickers->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/snapshot/locale/global/markets/forex/tickers.json')
        );

        $snapshotAllTickers->get();

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/global/markets/forex/tickers');
    }
}
