<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\SnapshotGainersLosers;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotGainersLosersTest extends \PHPUnit\Framework\TestCase
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

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/global/markets/forex/gainers');
    }
}
