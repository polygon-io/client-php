<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\HistoricForexTick;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class HistoricForexTickTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testHistoricForexTickGetCall()
    {
        $requestsContainer = [];

        $historicForexTick = new HistoricForexTick('fake-api-key');
        $historicForexTick->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v1/historic/forex/AUD/USD/2020-10-14.json')
        );

        $historicForexTick->get('AUD', 'USD', '2020-10-14');

        $this->assertPath($requestsContainer, '/v1/historic/forex/AUD/USD/2020-10-14');
    }
}
