<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\SnapshotSingleTicker;
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
                        'c1' => 'c1',
                        'c2' => 'c2',
                        'c3' => 'c3',
                        'c4' => 'c4',
                        'e' => 'e',
                        'p' => 'p',
                        's' => 's',
                        't' => 't',
                    ],
                    'lastQuote' => [
                        'p' => 'p',
                        's' => 's',
                        'S' => 'S',
                        'P' => 'P',
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

        $singleTicker->get('AAPL');

        $this->assertPath($requestsContainer, '/v2/snapshot/locale/us/markets/stocks/tickers/AAPL');
    }
}
