<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\SnapshotGainersLosers;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotGainersLosersTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testSnapshotGainersLosersGetCall()
    {
        $requestsContainer = [];

        $snapshotGainersLosers = new SnapshotGainersLosers('fake-api-key');
        $snapshotGainersLosers->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/snapshot/locale/global/markets/forex/gainers.json')
        );

        $snapshotGainersLosers->get();

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/global/markets/forex/gainers');
    }
}
