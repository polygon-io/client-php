<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\DailyOpenClose;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class DailyOpenCloseTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testDailyOpenCloseGetCall()
    {
        $requestsContainer = [];

        $dailyOpenClose = new DailyOpenClose('fake-api-key');
        $dailyOpenClose->httpClient = $this->getHttpMock(
            $requestsContainer,
            $this->loadJsonStubFile('api/v1/open-close/crypto/BTC/USD/2020-10-14.json')
        );

        $dailyOpenClose->get('BTC', 'USD', '2020-10-14');

        $this->assertPath($requestsContainer, '/v1/open-close/crypto/BTC/USD/2020-10-14');
    }
}
