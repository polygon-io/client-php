<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PHPUnit\Framework\TestCase;
use PolygonIO\Rest\Crypto\SnapshotSingleTickerFullBook;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotSingleTickerFullBookTest extends TestCase
{
    use MocksHttp;

    public function testSnapshotSingleTickerFullbookGetCall()
    {
        $requestsContainer = [];

        $snapshotSingleTickerFullBook
            = new SnapshotSingleTickerFullBook('fake-api-key');

        $snapshotSingleTickerFullBook->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'data' => [],
            ]
        );

        $snapshotSingleTickerFullBook->get('BTC-ETH');

        $this->assertPath($requestsContainer,
            '/v2/snapshot/locale/global/markets/crypto/tickers/BTC-ETH/book');
    }
}
