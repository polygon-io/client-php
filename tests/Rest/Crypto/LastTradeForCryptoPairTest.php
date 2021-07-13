<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\LastTradeForCryptoPair;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class LastTradeForCryptoPairTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testLastTradeForCryptoPairGetCall()
    {
        $requestsContainer = [];

        $lastTradeForCryptoPair = new LastTradeForCryptoPair('fake-api-key');
        $lastTradeForCryptoPair->httpClient = $this->getHttpMock(
            $requestsContainer,
            $this->loadJsonStubFile('api/v1/last/crypto/BTC/USD.json')
        );

        $lastTradeForCryptoPair->get('BTC', 'USD');

        $this->assertPath($requestsContainer, '/v1/last/crypto/BTC/USD');
    }
}
