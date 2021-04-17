<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\HistoricCryptoTrade;
use PolygonIO\Tests\Helpers\MocksHttp;

class HistoricCryptoTradeTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testHistoricCryptoTradeGetCall()
    {
        $requestsContainer = [];

        $historicCryptoTrade = new HistoricCryptoTrade('fake-api-key');
        $historicCryptoTrade->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'ticks' => [],
            ]
        );

        $historicCryptoTrade->get('BTC', 'ETH', '2018-2-2');

        $this->assertPath($requestsContainer, '/v1/historic/crypto/BTC/ETH/2018-2-2');
    }
}
