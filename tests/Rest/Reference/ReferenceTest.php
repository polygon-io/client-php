<?php

namespace PolygonIO\Tests\Rest\Reference;

use PHPUnit\Framework\TestCase;
use PolygonIO\Rest\Reference\Reference;
use PolygonIO\Rest\RestResource;
use PolygonIO\Tests\Helpers\MocksHttp;

class ReferenceTest extends TestCase
{
    use MocksHttp;

    private $reference;

    protected function setUp(): void
    {
        parent::setUp();

        $this->reference = new Reference('API_KEY');
    }

    public function testTickers()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->Tickers());
        $this->assertInstanceOf(RestResource::class, $this->reference->tickers);
    }

    public function testTickerTypes()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->TickerTypes());
        $this->assertInstanceOf(RestResource::class, $this->reference->tickerTypes);
    }

    public function testTickerDetails()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->TickerDetails());
        $this->assertInstanceOf(RestResource::class, $this->reference->tickerDetails);
    }

    public function testTickerNews()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->TickerNews());
        $this->assertInstanceOf(RestResource::class, $this->reference->tickerNews);
    }

    public function testMarkets()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->Markets());
        $this->assertInstanceOf(RestResource::class, $this->reference->markets);
    }

    public function testLocales()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->Locales());
        $this->assertInstanceOf(RestResource::class, $this->reference->locales);
    }

    public function testStockSplits()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->StockSplits());
        $this->assertInstanceOf(RestResource::class, $this->reference->stockSplits);
    }

    public function testStockDividends()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->StockDividends());
        $this->assertInstanceOf(RestResource::class, $this->reference->stockDividends);
    }

    public function testStockFinancials()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->StockFinancials());
        $this->assertInstanceOf(RestResource::class, $this->reference->stockFinancials);
    }

    public function testMarketStatus()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->MarketStatus());
        $this->assertInstanceOf(RestResource::class, $this->reference->marketStatus);
    }

    public function testMarketHolidays()
    {
        $this->assertInstanceOf(RestResource::class, $this->reference->MarketHolidays());
        $this->assertInstanceOf(RestResource::class, $this->reference->marketHolidays);
    }
}
