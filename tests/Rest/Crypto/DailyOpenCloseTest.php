<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\DailyOpenClose;
use PolygonIO\Tests\Helpers\MocksHttp;

class DailyOpenCloseTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testDailyOpenCloseGetCall()
    {
        $requestsContainer = [];

        $dailyOpenClose = new DailyOpenClose('fake-api-key');
        $dailyOpenClose->httpClient = $this->getHttpMock($requestsContainer);

        $dailyOpenClose->get('BTC', 'ETH', '2018-2-2');

        $this->assertPath($requestsContainer, '/v1/open-close/crypto/BTC/ETH/2018-2-2');
    }
}
