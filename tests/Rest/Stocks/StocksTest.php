<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PHPUnit\Framework\TestCase;
use PolygonIO\Rest\RestResource;
use PolygonIO\Rest\Stocks\Stocks;
use PolygonIO\Tests\Helpers\MocksHttp;

class StocksTest extends TestCase
{
    use MocksHttp;

    /**
     * Instance of Stocks class.
     * @var Stocks
     */
    private $stocks;

    protected function setUp(): void
    {
        parent::setUp();

        $this->stocks = new Stocks('API_KEY');
    }

    public function testExchanges()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->exchanges);
        $this->assertInstanceOf(RestResource::class, $this->stocks->exchanges());
    }

    public function testHistoricTrades()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->historicTrades);
        $this->assertInstanceOf(RestResource::class, $this->stocks->historicTrades());
    }

    public function testHistoricTradesV2()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->historicTradesV2);
        $this->assertInstanceOf(RestResource::class, $this->stocks->historicTradesV2());
    }

    public function testHistoricQuotes()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->historicQuotes);
        $this->assertInstanceOf(RestResource::class, $this->stocks->historicQuotes());
    }

    public function testHistoricQuotesV2()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->historicQuotesV2);
        $this->assertInstanceOf(RestResource::class, $this->stocks->historicQuotesV2());
    }

    public function testLastTradeForSymbol()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->lastTradeForSymbol);
        $this->assertInstanceOf(RestResource::class, $this->stocks->lastTradeForSymbol());
    }

    public function testLastQuoteForSymbol()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->lastQuoteForSymbol);
        $this->assertInstanceOf(RestResource::class, $this->stocks->lastQuoteForSymbol());
    }

    public function testDailyOpenClose()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->dailyOpenClose);
        $this->assertInstanceOf(RestResource::class, $this->stocks->dailyOpenClose());
    }

    public function testConditionMappings()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->conditionMappings);
        $this->assertInstanceOf(RestResource::class, $this->stocks->conditionMappings());
    }

    public function testSnapshotAllTickers()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->snapshotAllTickers);
        $this->assertInstanceOf(RestResource::class, $this->stocks->snapshotAllTickers());
    }

    public function testSnapshotSingleTicker()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->snapshotSingleTicker);
        $this->assertInstanceOf(RestResource::class, $this->stocks->snapshotSingleTicker());
    }

    public function testSnapshotGainersLosers()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->snapshotGainersLosers);
        $this->assertInstanceOf(RestResource::class, $this->stocks->snapshotGainersLosers());
    }

    public function testPreviousClose()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->previousClose);
        $this->assertInstanceOf(RestResource::class, $this->stocks->previousClose());
    }

    public function testAggregates()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->aggregates);
        $this->assertInstanceOf(RestResource::class, $this->stocks->aggregates());
    }

    public function testGroupedDaily()
    {
        $this->assertInstanceOf(RestResource::class, $this->stocks->groupedDaily);
        $this->assertInstanceOf(RestResource::class, $this->stocks->groupedDaily());
    }
}
