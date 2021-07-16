<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\RealTimeCurrencyConversion;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class RealTimeCurrencyConversionTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testRealTimeCurrencyConversionGetCall()
    {
        $requestsContainer = [];

        $realTimeCurrencyConversion = new RealTimeCurrencyConversion('fake-api-key');
        $realTimeCurrencyConversion->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v1/conversion/AUD/USD.json')
        );

        $realTimeCurrencyConversion->get('AUD', 'USD');

        $this->assertPath($requestsContainer, '/v1/conversion/AUD/USD');
    }
}
