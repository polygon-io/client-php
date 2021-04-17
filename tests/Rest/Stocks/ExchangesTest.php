<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\Exchanges;
use PolygonIO\Tests\Helpers\MocksHttp;

class ExchangesTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testExchangesGetCall()
    {
        $requestsContainer = [];

        $exchanges = new Exchanges('fake-api-key');
        $exchanges->httpClient = $this->getHttpMock($requestsContainer);

        $exchanges->get();

        $this->assertPath($requestsContainer, '/v1/meta/exchanges');
    }
}
