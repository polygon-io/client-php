<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\SnapshotAllTickers;
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

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/global/markets/crypto/tickers');
    }
}
