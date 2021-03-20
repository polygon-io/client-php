<?php

namespace PolygonIO\Tests\Rest\Common;

use PolygonIO\Rest\Common\Mappers;
use PHPUnit\Framework\TestCase;

class MappersTest extends TestCase
{
    public function testQuoteV1()
    {
        $tickData = [
            'c' => 'dummyC',
            'bE' => 'dummyBE',
            'aE' => 'dummyAE',
            'aP' => 'dummyAP',
            'bP' => 'dummyBP',
            'bS' => 'dummyBS',
            'aS' => 'dummyAS',
            't' => 'dummyT',
        ];

        $expectedReturn = [
            'c' => 'dummyC',
            'bE' => 'dummyBE',
            'aE' => 'dummyAE',
            'aP' => 'dummyAP',
            'bP' => 'dummyBP',
            'bS' => 'dummyBS',
            'aS' => 'dummyAS',
            't' => 'dummyT',
            'condition' => 'dummyC',
            'bidExchange' => 'dummyBE',
            'askExchange' => 'dummyAE',
            'askPrice' => 'dummyAP',
            'buyPrice' => 'dummyBP',
            'bidSize' => 'dummyBS',
            'askSize' => 'dummyAS',
            'timestamp' => 'dummyT',
        ];

        $actualReturn = Mappers::quoteV1($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }

    public function testSnapshotQuote()
    {
        $tickData = [
            'p' => 'dummyBidPrice',
            's' => 'dummyBidSize',
            'P' => 'dummyAskPrice',
            'S' => 'dummyAskSize',
            't' => 'dummyTimestamp',
        ];

        $expectedReturn = [
            'p' => 'dummyBidPrice',
            's' => 'dummyBidSize',
            'P' => 'dummyAskPrice',
            'S' => 'dummyAskSize',
            't' => 'dummyTimestamp',
            'bidPrice' => 'dummyBidPrice',
            'bidSize' => 'dummyBidSize',
            'askPrice' => 'dummyAskPrice',
            'askSize' => 'dummyAskSize',
            'lastUpdateTimestamp' => 'dummyTimestamp',
        ];

        $actualReturn = Mappers::snapshotQuote($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }

    public function testTradeV1()
    {
        $tickData = [
            'c1' => 'dummyCondition1',
            'c2' => 'dummyCondition2',
            'c3' => 'dummyCondition3',
            'c4' => 'dummyCondition4',
            'e' => 'dummyExchange',
            'p' => 'dummyPrice',
            's' => 'dummySize',
            't' => 'dummyTimestamp',
        ];

        $expectedReturn = [
            'c1' => 'dummyCondition1',
            'c2' => 'dummyCondition2',
            'c3' => 'dummyCondition3',
            'c4' => 'dummyCondition4',
            'e' => 'dummyExchange',
            'p' => 'dummyPrice',
            's' => 'dummySize',
            't' => 'dummyTimestamp',
            'condition1' => 'dummyCondition1',
            'condition2' => 'dummyCondition2',
            'condition3' => 'dummyCondition3',
            'condition4' => 'dummyCondition4',
            'exchange' => 'dummyExchange',
            'price' => 'dummyPrice',
            'size' => 'dummySize',
            'timestamp' => 'dummyTimestamp',
        ];

        $actualReturn = Mappers::tradeV1($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }

    public function testSnapshotAgg()
    {
        $tickData = [
            'c' => 'dummyClose',
            'h' => 'dummyHigh',
            'l' => 'dummyLow',
            'o' => 'dummyOpen',
            'v' => 'dummyVolume',
        ];

        $expectedReturn = [
            'c' => 'dummyClose',
            'h' => 'dummyHigh',
            'l' => 'dummyLow',
            'o' => 'dummyOpen',
            'v' => 'dummyVolume',
            'close' => 'dummyClose',
            'high' => 'dummyHigh',
            'low' => 'dummyLow',
            'open' => 'dummyOpen',
            'volume' => 'dummyVolume',
        ];

        $actualReturn = Mappers::snapshotAgg($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }

    public function testSnapshotAggV2()
    {
        $tickData = [
            'T' => 'dummyTickerSymbol',
            'v' => 'dummyVolume',
            'o' => 'dummyOpen',
            'c' => 'dummyClose',
            'h' => 'dummyHigh',
            'l' => 'dummyLow',
            't' => 'dummyTimestamp',
            'n' => 'dummyNumberOfItems',
        ];

        $expectedReturn = [
            'T' => 'dummyTickerSymbol',
            'v' => 'dummyVolume',
            'o' => 'dummyOpen',
            'c' => 'dummyClose',
            'h' => 'dummyHigh',
            'l' => 'dummyLow',
            't' => 'dummyTimestamp',
            'n' => 'dummyNumberOfItems',
            'tickerSymbol' => 'dummyTickerSymbol',
            'volume' => 'dummyVolume',
            'open' => 'dummyOpen',
            'close' => 'dummyClose',
            'high' => 'dummyHigh',
            'low' => 'dummyLow',
            'timestamp' => 'dummyTimestamp',
            'numberOfItems' => 'dummyNumberOfItems',
        ];

        $actualReturn = Mappers::snapshotAggV2($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }

    public function testCryptoTick()
    {
        $tickData = [
            'p' => 'dummyPrice',
            's' => 'dummySize',
            'x' => 'dummyExchange',
            'c' => 'dummyConditions',
            't' => 'dummyTimestamp',
        ];

        $expectedReturn = [
            'p' => 'dummyPrice',
            's' => 'dummySize',
            'x' => 'dummyExchange',
            'c' => 'dummyConditions',
            't' => 'dummyTimestamp',
            'price' => 'dummyPrice',
            'size' => 'dummySize',
            'exchange' => 'dummyExchange',
            'conditions' => 'dummyConditions',
            'timestamp' => 'dummyTimestamp',
        ];

        $actualReturn = Mappers::cryptoTick($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }

    public function testCryptoSnapshotBookItem()
    {
        $tickData = [
            'p' => 'dummyPrice',
        ];

        $expectedReturn = [
            'p' => 'dummyPrice',
            'price' => 'dummyPrice',
        ];

        $actualReturn = Mappers::cryptoSnapshotBookItem($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }

    public function testSnapshotTicker()
    {
        $tickData = [
            'day' => [
                'c' => 'dummyDayClose',
                'h' => 'dummyDayHigh',
                'l' => 'dummyDayLow',
                'o' => 'dummyDayOpen',
                'v' => 'dummyDayVolume',
            ],
            'lastTrade' => [
                'c1' => 'dummyLastTradeCondition1',
                'c2' => 'dummyLastTradeCondition2',
                'c3' => 'dummyLastTradeCondition3',
                'c4' => 'dummyLastTradeCondition4',
                'e' => 'dummyLastTradeExchange',
                'p' => 'dummyLastTradePrice',
                's' => 'dummyLastTradeSize',
                't' => 'dummyLastTradeTimestamp',
            ],
            'lastQuote' => [
                'p' => 'dummyLastQuoteBidPrice',
                's' => 'dummyLastQuoteBidSize',
                'P' => 'dummyLastQuoteAskPrice',
                'S' => 'dummyLastQuoteAskSize',
                't' => 'dummyLastQuoteTimestamp',
            ],
            'min' => [
                'c' => 'dummyMinClose',
                'h' => 'dummyMinHigh',
                'l' => 'dummyMinLow',
                'o' => 'dummyMinOpen',
                'v' => 'dummyMinVolume',
            ],
            'prevDay' => [
                'c' => 'dummyPrevDayClose',
                'h' => 'dummyPrevDayHigh',
                'l' => 'dummyPrevDayLow',
                'o' => 'dummyPrevDayOpen',
                'v' => 'dummyPrevDayVolume',
            ],
        ];

        $expectedReturn = [
            'day' => [
                'c' => 'dummyDayClose',
                'h' => 'dummyDayHigh',
                'l' => 'dummyDayLow',
                'o' => 'dummyDayOpen',
                'v' => 'dummyDayVolume',
                'close' => 'dummyDayClose',
                'high' => 'dummyDayHigh',
                'low' => 'dummyDayLow',
                'open' => 'dummyDayOpen',
                'volume' => 'dummyDayVolume',
            ],
            'lastTrade' => [
                'c1' => 'dummyLastTradeCondition1',
                'c2' => 'dummyLastTradeCondition2',
                'c3' => 'dummyLastTradeCondition3',
                'c4' => 'dummyLastTradeCondition4',
                'e' => 'dummyLastTradeExchange',
                'p' => 'dummyLastTradePrice',
                's' => 'dummyLastTradeSize',
                't' => 'dummyLastTradeTimestamp',
                'condition1' => 'dummyLastTradeCondition1',
                'condition2' => 'dummyLastTradeCondition2',
                'condition3' => 'dummyLastTradeCondition3',
                'condition4' => 'dummyLastTradeCondition4',
                'exchange' => 'dummyLastTradeExchange',
                'price' => 'dummyLastTradePrice',
                'size' => 'dummyLastTradeSize',
                'timestamp' => 'dummyLastTradeTimestamp',
            ],
            'lastQuote' => [
                'p' => 'dummyLastQuoteBidPrice',
                's' => 'dummyLastQuoteBidSize',
                'P' => 'dummyLastQuoteAskPrice',
                'S' => 'dummyLastQuoteAskSize',
                't' => 'dummyLastQuoteTimestamp',
                'bidPrice' => 'dummyLastQuoteBidPrice',
                'bidSize' => 'dummyLastQuoteBidSize',
                'askPrice' => 'dummyLastQuoteAskPrice',
                'askSize' => 'dummyLastQuoteAskSize',
                'lastUpdateTimestamp' => 'dummyLastQuoteTimestamp',
            ],
            'min' => [
                'c' => 'dummyMinClose',
                'h' => 'dummyMinHigh',
                'l' => 'dummyMinLow',
                'o' => 'dummyMinOpen',
                'v' => 'dummyMinVolume',
                'close' => 'dummyMinClose',
                'high' => 'dummyMinHigh',
                'low' => 'dummyMinLow',
                'open' => 'dummyMinOpen',
                'volume' => 'dummyMinVolume',
            ],
            'prevDay' => [
                'c' => 'dummyPrevDayClose',
                'h' => 'dummyPrevDayHigh',
                'l' => 'dummyPrevDayLow',
                'o' => 'dummyPrevDayOpen',
                'v' => 'dummyPrevDayVolume',
                'close' => 'dummyPrevDayClose',
                'high' => 'dummyPrevDayHigh',
                'low' => 'dummyPrevDayLow',
                'open' => 'dummyPrevDayOpen',
                'volume' => 'dummyPrevDayVolume',
            ],
        ];

        $actualReturn = Mappers::snapshotTicker($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }

    public function testSnapshotCryptoTicker()
    {
        $tickData = [
            'day' => [
                'c' => 'dummyDayClose',
                'h' => 'dummyDayHigh',
                'l' => 'dummyDayLow',
                'o' => 'dummyDayOpen',
                'v' => 'dummyDayVolume',
            ],
            'lastTrade' => [
                'p' => 'dummyPrice',
                's' => 'dummySize',
                'x' => 'dummyExchange',
                'c' => 'dummyConditions',
                't' => 'dummyTimestamp',
            ],
            'min' => [
                'c' => 'dummyMinClose',
                'h' => 'dummyMinHigh',
                'l' => 'dummyMinLow',
                'o' => 'dummyMinOpen',
                'v' => 'dummyMinVolume',
            ],
            'prevDay' => [
                'c' => 'dummyPrevDayClose',
                'h' => 'dummyPrevDayHigh',
                'l' => 'dummyPrevDayLow',
                'o' => 'dummyPrevDayOpen',
                'v' => 'dummyPrevDayVolume',
            ],
        ];

        $expectedReturn = [
            'day' => [
                'c' => 'dummyDayClose',
                'h' => 'dummyDayHigh',
                'l' => 'dummyDayLow',
                'o' => 'dummyDayOpen',
                'v' => 'dummyDayVolume',
                'close' => 'dummyDayClose',
                'high' => 'dummyDayHigh',
                'low' => 'dummyDayLow',
                'open' => 'dummyDayOpen',
                'volume' => 'dummyDayVolume',
            ],
            'lastTrade' => [
                'p' => 'dummyPrice',
                's' => 'dummySize',
                'x' => 'dummyExchange',
                'c' => 'dummyConditions',
                't' => 'dummyTimestamp',
                'price' => 'dummyPrice',
                'size' => 'dummySize',
                'exchange' => 'dummyExchange',
                'conditions' => 'dummyConditions',
                'timestamp' => 'dummyTimestamp',
            ],
            'min' => [
                'c' => 'dummyMinClose',
                'h' => 'dummyMinHigh',
                'l' => 'dummyMinLow',
                'o' => 'dummyMinOpen',
                'v' => 'dummyMinVolume',
                'close' => 'dummyMinClose',
                'high' => 'dummyMinHigh',
                'low' => 'dummyMinLow',
                'open' => 'dummyMinOpen',
                'volume' => 'dummyMinVolume',
            ],
            'prevDay' => [
                'c' => 'dummyPrevDayClose',
                'h' => 'dummyPrevDayHigh',
                'l' => 'dummyPrevDayLow',
                'o' => 'dummyPrevDayOpen',
                'v' => 'dummyPrevDayVolume',
                'close' => 'dummyPrevDayClose',
                'high' => 'dummyPrevDayHigh',
                'low' => 'dummyPrevDayLow',
                'open' => 'dummyPrevDayOpen',
                'volume' => 'dummyPrevDayVolume',
            ],
        ];

        $actualReturn = Mappers::snapshotCryptoTicker($tickData);

        $this->assertEquals($expectedReturn, $actualReturn);
    }
}
