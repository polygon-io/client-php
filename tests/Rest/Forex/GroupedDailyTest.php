<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\GroupedDaily;
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

        $this->assertPath($requestsContainer, '/v2/aggs/grouped/locale/US/market/FX/2019-2-2');
    }
}
