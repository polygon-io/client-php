<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\TickerTypes;
use PolygonIO\Tests\Helpers\MocksHttp;

class TickerTypesTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testTickerTypesGetCall()
    {
        $requestsContainer = [];

        $tickerTypes = new TickerTypes('fake-api-key');
        $tickerTypes->httpClient = $this->getHttpMock($requestsContainer);

        $tickerTypes->get();

        $this->assertPath($requestsContainer, '/v2/reference/types');
    }
}
