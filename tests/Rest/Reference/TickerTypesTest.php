<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\TickerTypes;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class TickerTypesTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testTickerTypesGetCall()
    {
        $requestsContainer = [];

        $tickerTypes = new TickerTypes('fake-api-key');
        $tickerTypes->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/reference/types.json')
        );

        $tickerTypes->get();

        $this->assertPath($requestsContainer, '/v2/reference/types');
    }
}
