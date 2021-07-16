<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\MarketHolidays;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class MarketHolidaysTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testMarketHolidaysGetCall()
    {
        $requestsContainer = [];

        $marketHolidays = new MarketHolidays('fake-api-key');
        $marketHolidays->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v1/marketstatus/upcoming.json')
        );

        $marketHolidays->get();

        $this->assertPath($requestsContainer, '/v1/marketstatus/upcoming');
    }
}
