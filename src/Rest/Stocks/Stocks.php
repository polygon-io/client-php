<?php

namespace PolygonIO\Rest\Stocks;

/**
 * Class Stocks
 *
 * @package PolygonIO\Rest\Stocks
 */
class Stocks
{
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @deprecated Use the method instead.
     * @var Exchanges
     */
    public $exchanges;

    /**
     * @deprecated Use the method instead.
     * @var HistoricTrades
     */
    public $historicTrades;

    /**
     * @deprecated Use the method instead.
     * @var HistoricTradesV2
     */
    public $historicTradesV2;

    /**
     * @deprecated Use the method instead.
     * @var HistoricQuotes
     */
    public $historicQuotes;

    /**
     * @deprecated Use the method instead.
     * @var HistoricQuotesV2
     */
    public $historicQuotesV2;

    /**
     * @deprecated Use the method instead.
     * @var LastTradeForSymbol
     */
    public $lastTradeForSymbol;

    /**
     * @deprecated Use the method instead.
     * @var LastQuoteForSymbol
     */
    public $lastQuoteForSymbol;

    /**
     * @deprecated Use the method instead.
     * @var DailyOpenClose
     */
    public $dailyOpenClose;

    /**
     * @deprecated Use the method instead.
     * @var ConditionMappings
     */
    public $conditionMappings;

    /**
     * @deprecated Use the method instead.
     * @var SnapshotAllTickers
     */
    public $snapshotAllTickers;

    /**
     * @deprecated Use the method instead.
     * @var SnapshotSingleTicker
     */
    public $snapshotSingleTicker;

    /**
     * @deprecated Use the method instead.
     * @var SnapshotGainersLosers
     */
    public $snapshotGainersLosers;

    /**
     * @deprecated Use the method instead.
     * @var PreviousClose
     */
    public $previousClose;

    /**
     * @deprecated Use the method instead.
     * @var Aggregates
     */
    public $aggregates;

    /**
     * @deprecated Use the method instead.
     * @var GroupedDaily
     */
    public $groupedDaily;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;

        $this->exchanges = new Exchanges($apiKey);
        $this->historicTrades = new HistoricTrades($apiKey);
        $this->historicTradesV2 = new HistoricTradesV2($apiKey);
        $this->historicQuotes = new HistoricQuotes($apiKey);
        $this->historicQuotesV2 = new HistoricQuotesV2($apiKey);
        $this->lastTradeForSymbol = new LastTradeForSymbol($apiKey);
        $this->lastQuoteForSymbol = new LastQuoteForSymbol($apiKey);
        $this->dailyOpenClose = new DailyOpenClose($apiKey);
        $this->conditionMappings = new ConditionMappings($apiKey);
        $this->snapshotAllTickers = new SnapshotAllTickers($apiKey);
        $this->snapshotSingleTicker = new SnapshotSingleTicker($apiKey);
        $this->snapshotGainersLosers = new SnapshotGainersLosers($apiKey);
        $this->previousClose = new PreviousClose($apiKey);
        $this->aggregates = new Aggregates($apiKey);
        $this->groupedDaily = new GroupedDaily($apiKey);
    }

    /**
     * @return Exchanges
     */
    public function exchanges(): Exchanges
    {
        return new Exchanges($this->apiKey);
    }

    /**
     * @return HistoricTrades
     */
    public function historicTrades(): HistoricTrades
    {
        return new HistoricTrades($this->apiKey);
    }

    /**
     * @return HistoricTradesV2
     */
    public function historicTradesV2(): HistoricTradesV2
    {
        return new HistoricTradesV2($this->apiKey);
    }

    /**
     * @return HistoricQuotes
     */
    public function historicQuotes(): HistoricQuotes
    {
        return new HistoricQuotes($this->apiKey);
    }

    /**
     * @return HistoricQuotesV2
     */
    public function historicQuotesV2(): HistoricQuotesV2
    {
        return new HistoricQuotesV2($this->apiKey);
    }

    /**
     * @return LastTradeForSymbol
     */
    public function lastTradeForSymbol(): LastTradeForSymbol
    {
        return new LastTradeForSymbol($this->apiKey);
    }

    /**
     * @return LastQuoteForSymbol
     */
    public function lastQuoteForSymbol(): LastQuoteForSymbol
    {
        return new LastQuoteForSymbol($this->apiKey);
    }

    /**
     * @return DailyOpenClose
     */
    public function dailyOpenClose(): DailyOpenClose
    {
        return new DailyOpenClose($this->apiKey);
    }

    /**
     * @return ConditionMappings
     */
    public function conditionMappings(): ConditionMappings
    {
        return new ConditionMappings($this->apiKey);
    }

    /**
     * @return SnapshotAllTickers
     */
    public function snapshotAllTickers(): SnapshotAllTickers
    {
        return new SnapshotAllTickers($this->apiKey);
    }

    /**
     * @return SnapshotSingleTicker
     */
    public function snapshotSingleTicker(): SnapshotSingleTicker
    {
        return new SnapshotSingleTicker($this->apiKey);
    }

    /**
     * @return SnapshotGainersLosers
     */
    public function snapshotGainersLosers(): SnapshotGainersLosers
    {
        return new SnapshotGainersLosers($this->apiKey);
    }

    /**
     * @return PreviousClose
     */
    public function previousClose(): PreviousClose
    {
        return new PreviousClose($this->apiKey);
    }

    /**
     * @return Aggregates
     */
    public function aggregates(): Aggregates
    {
        return new Aggregates($this->apiKey);
    }

    /**
     * @return GroupedDaily
     */
    public function groupedDaily(): GroupedDaily
    {
        return new GroupedDaily($this->apiKey);
    }
}
