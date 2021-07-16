<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\Markets;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class MarketsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testMarketsGetCall()
    {
        $requestsContainer = [];

        $markets = new Markets('API_KEY');
        $markets->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/reference/markets.json')
        );

        $markets->get();

        $this->assertPath($requestsContainer, '/v2/reference/markets');
    }
}
