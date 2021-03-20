<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\MarketHolidays;
use PolygonIO\Tests\Helpers\MocksHttp;

class MarketHolidaysTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testMarketHolidaysGetCall()
    {
        $requestsContainer = [];

        $marketHolidays = new MarketHolidays('fake-api-key');
        $marketHolidays->httpClient = $this->getHttpMock($requestsContainer);

        $marketHolidays->get();

        $this->assertPath($requestsContainer, '/v1/marketstatus/upcoming');
    }
}
