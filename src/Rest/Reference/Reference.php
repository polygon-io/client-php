<?php

namespace PolygonIO\Rest\Reference;

/**
 * Class Reference
 *
 * @package PolygonIO\rest\reference
 */
class Reference
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @deprecated
     * @var Tickers
     */
    public $tickers;

    /**
     * @deprecated
     * @var TickerTypes
     */
    public $tickerTypes;

    /**
     * @deprecated
     * @var TickerDetails
     */
    public $tickerDetails;

    /**
     * @deprecated
     * @var TickerNews
     */
    public $tickerNews;

    /**
     * @deprecated
     * @var Markets
     */
    public $markets;

    /**
     * @deprecated
     * @var Locales
     */
    public $locales;

    /**
     * @deprecated
     * @var StockSplits
     */
    public $stockSplits;

    /**
     * @deprecated
     * @var StockDividends
     */
    public $stockDividends;

    /**
     * @deprecated
     * @var StockFinancials
     */
    public $stockFinancials;

    /**
     * @deprecated
     * @var MarketStatus
     */
    public $marketStatus;

    /**
     * @deprecated
     * @var MarketHolidays
     */
    public $marketHolidays;

    /**
     * Reference constructor.
     *
     * @param $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->tickers = new Tickers($apiKey);
        $this->tickerTypes = new TickerTypes($apiKey);
        $this->tickerDetails = new TickerDetails($apiKey);
        $this->tickerNews = new TickerNews($apiKey);
        $this->markets = new Markets($apiKey);
        $this->locales = new Locales($apiKey);
        $this->stockSplits = new StockSplits($apiKey);
        $this->stockDividends = new StockDividends($apiKey);
        $this->stockFinancials = new StockFinancials($apiKey);
        $this->marketStatus = new MarketStatus($apiKey);
        $this->marketHolidays = new MarketHolidays($apiKey);
    }

    /**
     * @return Tickers
     */
    public function tickers(): Tickers
    {
        return new Tickers($this->apiKey);
    }

    /**
     * @return TickerTypes
     */
    public function tickerTypes(): TickerTypes
    {
        return new TickerTypes($this->apiKey);
    }

    /**
     * @return TickerDetails
     */
    public function tickerDetails(): TickerDetails
    {
        return new TickerDetails($this->apiKey);
    }

    /**
     * @return TickerNews
     */
    public function tickerNews(): TickerNews
    {
        return new TickerNews($this->apiKey);
    }

    /**
     * @return Markets
     */
    public function markets(): Markets
    {
        return new Markets($this->apiKey);
    }

    /**
     * @return Locales
     */
    public function locales(): Locales
    {
        return new Locales($this->apiKey);
    }

    /**
     * @return StockSplits
     */
    public function stockSplits(): StockSplits
    {
        return new StockSplits($this->apiKey);
    }

    /**
     * @return StockDividends
     */
    public function stockDividends(): StockDividends
    {
        return new StockDividends($this->apiKey);
    }

    /**
     * @return StockFinancials
     */
    public function stockFinancials(): StockFinancials
    {
        return new StockFinancials($this->apiKey);
    }

    /**
     * @return MarketStatus
     */
    public function marketStatus(): MarketStatus
    {
        return new MarketStatus($this->apiKey);
    }

    /**
     * @return MarketHolidays
     */
    public function marketHolidays(): MarketHolidays
    {
        return new MarketHolidays($this->apiKey);
    }
}
