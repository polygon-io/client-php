<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\GroupedDaily;
use PolygonIO\Tests\Helpers\MocksHttp;

class GroupedDailyTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testGroupedDailyGetCall()
    {
        $requestsContainer = [];

        $groupedDaily = new GroupedDaily('fake-api-key');
        $groupedDaily->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'results' => [],
            ]
        );

        $groupedDaily->get('2019-2-2');

        $this->assertPath($requestsContainer, '/v2/aggs/grouped/locale/US/market/STOCKS/2019-2-2');
    }
}
