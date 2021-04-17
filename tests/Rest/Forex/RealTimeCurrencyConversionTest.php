<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\RealTimeCurrencyConversion;
use PolygonIO\Tests\Helpers\MocksHttp;

class RealTimeCurrencyConversionTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testRealTimeCurrencyConversionGetCall()
    {
        $requestsContainer = [];

        $realTimeCurrencyConversion = new RealTimeCurrencyConversion('fake-api-key');
        $realTimeCurrencyConversion->httpClient = $this->getHttpMock($requestsContainer);

        $realTimeCurrencyConversion->get('USD', 'AUD');

        $this->assertPath($requestsContainer, '/v1/conversion/USD/AUD');
    }
}
