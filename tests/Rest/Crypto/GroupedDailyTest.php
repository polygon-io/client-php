<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\GroupedDaily;
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

        $this->assertPath($requestsContainer, '/v2/aggs/grouped/locale/US/market/CRYPTO/2019-2-2');
    }
}
