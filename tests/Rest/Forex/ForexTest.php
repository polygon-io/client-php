<?php

namespace PolygonIO\Tests\Rest\Forex;

use PHPUnit\Framework\TestCase;
use PolygonIO\Rest\Forex\Forex;
use PolygonIO\Rest\RestResource;
use PolygonIO\Tests\Helpers\MocksHttp;

class ForexTest extends TestCase
{
    use MocksHttp;

    /**
     * Instance of Forex class.
     * @var Forex
     */
    private $forex;

    protected function setUp(): void
    {
        parent::setUp();

        $this->forex = new Forex('API_KEY');
    }

    public function testAggregates()
    {
        $this->assertInstanceOf(RestResource::class, $this->forex->aggregates);
        $this->assertInstanceOf(RestResource::class, $this->forex->aggregates());
    }

    public function testGroupedDaily()
    {
        $this->assertInstanceOf(RestResource::class, $this->forex->groupedDaily);
        $this->assertInstanceOf(RestResource::class, $this->forex->groupedDaily());
    }

    public function testPreviousClose()
    {
        $this->assertInstanceOf(RestResource::class, $this->forex->previousClose);
        $this->assertInstanceOf(RestResource::class, $this->forex->previousClose());
    }

    public function testHistoricForexTick()
    {
        $this->assertInstanceOf(RestResource::class, $this->forex->historicForexTick);
        $this->assertInstanceOf(RestResource::class, $this->forex->historicForexTick());
    }

    public function testRealTimeCurrencyConversion()
    {
        $this->assertInstanceOf(RestResource::class, $this->forex->realTimeCurrencyConversion);
        $this->assertInstanceOf(RestResource::class, $this->forex->realTimeCurrencyConversion());
    }

    public function testLastQuoteForCurrencyPair()
    {
        $this->assertInstanceOf(RestResource::class, $this->forex->lastQuoteForCurrencyPair);
        $this->assertInstanceOf(RestResource::class, $this->forex->lastQuoteForCurrencyPair());
    }

    public function testSnapshotGainersLosers()
    {
        $this->assertInstanceOf(RestResource::class, $this->forex->snapshotGainersLosers);
        $this->assertInstanceOf(RestResource::class, $this->forex->snapshotGainersLosers());
    }

    public function testSnapshotAllTickers()
    {
        $this->assertInstanceOf(RestResource::class, $this->forex->snapshotAllTickers);
        $this->assertInstanceOf(RestResource::class, $this->forex->snapshotAllTickers());
    }
}
