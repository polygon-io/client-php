<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\DailyOpenClose;
use PolygonIO\Tests\Helpers\MocksHttp;

class DailyOpenCloseTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testDailyOpenCloseGetCall()
    {
        $requestsContainer = [];

        $dailyOpenClose = new DailyOpenClose('fake-api-key');
        $dailyOpenClose->httpClient = $this->getHttpMock($requestsContainer);

        $dailyOpenClose->get('AAPL', '2019-2-2');

        $this->assertPath($requestsContainer, '/v1/open-close/AAPL/2019-2-2');
    }
}
