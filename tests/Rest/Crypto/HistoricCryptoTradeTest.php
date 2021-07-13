<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\HistoricCryptoTrade;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class HistoricCryptoTradeTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testHistoricCryptoTradeGetCall()
    {
        $requestsContainer = [];

        $historicCryptoTrade = new HistoricCryptoTrade('fake-api-key');
        $historicCryptoTrade->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v1/historic/crypto/BTC/USD/2020-10-14.json')
        );

        $historicCryptoTrade->get('BTC', 'USD', '2020-10-14');

        $this->assertPath($requestsContainer, '/v1/historic/crypto/BTC/USD/2020-10-14');
    }
}
