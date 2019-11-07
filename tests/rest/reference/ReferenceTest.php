<?php
use PHPUnit\Framework\TestCase;
use PolygonIO\rest\reference\Reference;

final class ReferenceTest extends TestCase {
    public function testExportAllTheMethodsFromReferenceApi() {
        $reference = new Reference('fake-api-key');
        $this->assertInstanceOf(\PolygonIO\rest\reference\Tickers::class, $reference->tickers);
        $this->assertInstanceOf(\PolygonIO\rest\reference\TickerTypes::class, $reference->tickerTypes);
        $this->assertInstanceOf(\PolygonIO\rest\reference\TickerDetails::class, $reference->tickerDetails);
        $this->assertInstanceOf(\PolygonIO\rest\reference\TickerNews::class, $reference->tickerNews);
        $this->assertInstanceOf(\PolygonIO\rest\reference\Markets::class, $reference->markets);
        $this->assertInstanceOf(\PolygonIO\rest\reference\Locales::class, $reference->locales);
        $this->assertInstanceOf(\PolygonIO\rest\reference\StockSplits::class, $reference->stockSplits);
        $this->assertInstanceOf(\PolygonIO\rest\reference\StockDividends::class, $reference->stockDividends);
        $this->assertInstanceOf(\PolygonIO\rest\reference\StockFinancials::class, $reference->stockFinancials);
        $this->assertInstanceOf(\PolygonIO\rest\reference\MarketStatus::class, $reference->marketStatus);
        $this->assertInstanceOf(\PolygonIO\rest\reference\MarketHolidays::class, $reference->marketHolidays);
    }
}