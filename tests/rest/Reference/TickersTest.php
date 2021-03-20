<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\Tickers;
use PolygonIO\Tests\Helpers\MocksHttp;

class TickersTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testTickersGetCall()
    {
        $requestsContainer = [];

        $tickers = new Tickers('fake-api-key');
        $tickers->httpClient = $this->getHttpMock($requestsContainer);

        $tickers->get();

        $this->assertPath($requestsContainer, '/v2/reference/tickers');
    }
}
