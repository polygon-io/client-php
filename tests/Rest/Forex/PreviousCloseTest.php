<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\PreviousClose;
use PolygonIO\Tests\Helpers\MocksHttp;

class PreviousCloseTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testPreviousCloseGetCall()
    {
        $requestsContainer = [];

        $previousClose = new PreviousClose('fake-api-key');
        $previousClose->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'results' => [],
            ]
        );

        $previousClose->get('AAPL');

        $this->assertPath($requestsContainer, '/v2/aggs/ticker/AAPL/prev');
    }
}