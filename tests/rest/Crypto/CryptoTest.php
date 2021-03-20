<?php

namespace PolygonIO\Tests\Rest\Crypto;

use PHPUnit\Framework\TestCase;

use PolygonIO\Rest\Crypto\Crypto;
use PolygonIO\Rest\RestResource;

class CryptoTest extends TestCase
{
    /**
     * Instance of Crypto class.
     *
     * @var Crypto
     */
    private $crypto;

    protected function setUp(): void
    {
        parent::setUp();

        $this->crypto = new Crypto('API_KEY');
    }

    public function testAggregates()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->aggregates);
        $this->assertInstanceOf(RestResource::class, $this->crypto->aggregates());
    }

    public function testGroupedDaily()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->groupedDaily);
        $this->assertInstanceOf(RestResource::class, $this->crypto->groupedDaily());
    }

    public function testPreviousClose()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->previousClose);
        $this->assertInstanceOf(RestResource::class, $this->crypto->previousClose());
    }

    public function testCryptoExchanges()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->cryptoExchanges);
        $this->assertInstanceOf(RestResource::class, $this->crypto->cryptoExchanges());
    }

    public function testLastTradeForCryptoPair()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->lastTradeForCryptoPair);
        $this->assertInstanceOf(RestResource::class, $this->crypto->lastTradeForCryptoPair());
    }

    public function testDailyOpenClose()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->dailyOpenClose);
        $this->assertInstanceOf(RestResource::class, $this->crypto->dailyOpenClose());
    }

    public function testHistoricCryptoTrade()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->historicCryptoTrade);
        $this->assertInstanceOf(RestResource::class, $this->crypto->historicCryptoTrade());
    }

    public function testSnapshotAllTickers()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->snapshotAllTickers);
        $this->assertInstanceOf(RestResource::class, $this->crypto->snapshotAllTickers());
    }

    public function testSnapshotSingleTicker()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->snapshotSingleTicker);
        $this->assertInstanceOf(RestResource::class, $this->crypto->snapshotSingleTicker());
    }

    public function testSnapshotGainersLosers()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->snapshotGainersLosers);
        $this->assertInstanceOf(RestResource::class, $this->crypto->snapshotGainersLosers());
    }

    public function testSnapshotSingleTickerFullBook()
    {
        $this->assertInstanceOf(RestResource::class, $this->crypto->snapshotSingleTickerFullBook);
        $this->assertInstanceOf(RestResource::class, $this->crypto->snapshotSingleTickerFullBook());
    }
}
