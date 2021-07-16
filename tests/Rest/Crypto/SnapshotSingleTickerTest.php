<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\SnapshotSingleTicker;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotSingleTickerTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testSnapshotSingleTickerGetCall()
    {
        $requestsContainer = [];

        $singleTicker = new SnapshotSingleTicker('fake-api-key');

        $singleTicker->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/snapshot/locale/global/markets/crypto/tickers/X:BTCUSD.json')
        );

        $singleTicker->get('X:BTCUSD');

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/global/markets/crypto/tickers/X:BTCUSD');
    }
}
