<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\CryptoExchanges;
use PolygonIO\Tests\Helpers\MocksHttp;

class CryptoExchangesTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testCryptoExchangesGetCall()
    {
        $requestsContainer = [];

        $cryptoExchanges = new CryptoExchanges('fake-api-key');
        $cryptoExchanges->httpClient = $this->getHttpMock($requestsContainer);

        $cryptoExchanges->get();

        $this->assertPath($requestsContainer, '/v1/meta/crypto-exchanges');
    }
}
