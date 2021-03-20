<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\LastTradeForCryptoPair;
use PolygonIO\Tests\Helpers\MocksHttp;

class LastTradeForCryptoPairTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testLastTradeForCryptoPairGetCall()
    {
        $requestsContainer = [];

        $lastTradeForCryptoPair = new LastTradeForCryptoPair('fake-api-key');
        $lastTradeForCryptoPair->httpClient = $this->getHttpMock($requestsContainer);

        $lastTradeForCryptoPair->get('BTC', 'ETH');

        $this->assertPath($requestsContainer, '/v1/last/crypto/BTC/ETH');
    }
}
