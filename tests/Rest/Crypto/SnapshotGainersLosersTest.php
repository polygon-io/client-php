<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PHPUnit\Framework\TestCase;
use PolygonIO\Rest\Crypto\SnapshotGainersLosers;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotGainersLosersTest extends TestCase
{
    use MocksHttp;

    public function testSnapshotGainersLosersGetCall()
    {
        $requestsContainer = [];

        $snapshotGainersLosers = new SnapshotGainersLosers('fake-api-key');
        $snapshotGainersLosers->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'tickers' => [],
            ]
        );

        $snapshotGainersLosers->get();

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/global/markets/crypto/gainers');
    }
}
