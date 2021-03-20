<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\HistoricForexTick;
use PolygonIO\Tests\Helpers\MocksHttp;

class HistoricForexTickTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testHistoricForexTickGetCall()
    {
        $requestsContainer = [];

        $historicForexTick = new HistoricForexTick('fake-api-key');
        $historicForexTick->httpClient = $this->getHttpMock($requestsContainer);

        $historicForexTick->get('USD', 'AUD', '2018-2-2');

        $this->assertPath($requestsContainer, '/v1/historic/forex/USD/AUD/2018-2-2');
    }
}
