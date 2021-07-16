<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\PreviousClose;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class PreviousCloseTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testPreviousCloseGetCall()
    {
        $requestsContainer = [];

        $previousClose = new PreviousClose('fake-api-key');
        $previousClose->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/aggs/ticker/C:EURUSD/prev.json')
        );

        $previousClose->get('C:EURUSD');

        $this->assertPath($requestsContainer, '/v2/aggs/ticker/C:EURUSD/prev');
    }
}
