<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\MarketStatus;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class MarketStatusTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testMarketStatusGetCall()
    {
        $requestsContainer = [];

        $marketStatus = new MarketStatus('fake-api-key');
        $marketStatus->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v1/marketstatus/now.json')
        );

        $marketStatus->get();

        $this->assertPath($requestsContainer, '/v1/marketstatus/now');
    }
}
