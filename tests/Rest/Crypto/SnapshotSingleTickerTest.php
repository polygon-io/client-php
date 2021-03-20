<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PolygonIO\Rest\Crypto\SnapshotSingleTicker;
use PolygonIO\Tests\Helpers\MocksHttp;

class SnapshotSingleTickerTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testSnapshotSingleTickerGetCall()
    {
        $requestsContainer = [];

        $singleTicker = new SnapshotSingleTicker('fake-api-key');

        $singleTicker->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'ticker' => [
                    'day' => [
                        'c' => 'c',
                        'h' => 'h',
                        'l' => 'l',
                        'o' => 'o',
                        'v' => 'v',
                    ],
                    'lastTrade' => [
                        'p' => 'p',
                        's' => 's',
                        'x' => 'x',
                        'c' => 'c',
                        't' => 't',
                    ],
                    'min' => [
                        'c' => 'c',
                        'h' => 'h',
                        'l' => 'l',
                        'o' => 'o',
                        'v' => 'v',
                    ],
                    'prevDay' => [
                        'c' => 'c',
                        'h' => 'h',
                        'l' => 'l',
                        'o' => 'o',
                        'v' => 'v',
                    ],
                ],
            ]
        );

        $singleTicker->get('BTC-ETH');

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/global/markets/crypto/tickers/BTC-ETH');
    }
}
