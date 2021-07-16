<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PHPUnit\Framework\TestCase;
use PolygonIO\Rest\Crypto\SnapshotSingleTickerFullBook;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotSingleTickerFullBookTest extends TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testSnapshotSingleTickerFullbookGetCall()
    {
        $requestsContainer = [];

        $snapshotSingleTickerFullBook
            = new SnapshotSingleTickerFullBook('fake-api-key');

        $snapshotSingleTickerFullBook->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v2/snapshot/locale/global/markets/crypto/tickers/X:BTCUSD/book.json')
        );

        $snapshotSingleTickerFullBook->get('X:BTCUSD');

        $this->assertPath($requestsContainer,
            '/v2/snapshot/locale/global/markets/crypto/tickers/X:BTCUSD/book');
    }
}
