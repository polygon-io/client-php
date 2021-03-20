<?php

namespace PolygonIO\Rest\Forex;

class Forex
{
    private $apiKey;

    /**
     * @deprecated
     * @var Aggregates
     */
    public $aggregates;

    /**
     * @deprecated
     * @var GroupedDaily
     */
    public $groupedDaily;

    /**
     * @deprecated
     * @var PreviousClose
     */
    public $previousClose;

    /**
     * @deprecated
     * @var HistoricForexTick
     */
    public $historicForexTick;

    /**
     * @deprecated
     * @var RealTimeCurrencyConversion
     */
    public $realTimeCurrencyConversion;

    /**
     * @deprecated
     * @var LastQuoteForCurrencyPair
     */
    public $lastQuoteForCurrencyPair;

    /**
     * @deprecated
     * @var SnapshotAllTickers
     */
    public $snapshotAllTickers;

    /**
     * @deprecated
     * @var SnapshotGainersLosers
     */
    public $snapshotGainersLosers;

    /**
     * Forex constructor.
     *
     * @param  string  $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->groupedDaily = new GroupedDaily($apiKey);
        $this->aggregates = new Aggregates($apiKey);
        $this->previousClose = new PreviousClose($apiKey);
        $this->historicForexTick = new HistoricForexTick($apiKey);
        $this->realTimeCurrencyConversion = new RealTimeCurrencyConversion($apiKey);
        $this->lastQuoteForCurrencyPair = new LastQuoteForCurrencyPair($apiKey);
        $this->snapshotAllTickers = new SnapshotAllTickers($apiKey);
        $this->snapshotGainersLosers = new SnapshotGainersLosers($apiKey);
    }

    /**
     * @return GroupedDaily
     */
    public function groupedDaily(): GroupedDaily
    {
        return new GroupedDaily($this->apiKey);
    }

    /**
     * @return Aggregates
     */
    public function aggregates(): Aggregates
    {
        return new Aggregates($this->apiKey);
    }

    /**
     * @return PreviousClose
     */
    public function previousClose(): PreviousClose
    {
        return new PreviousClose($this->apiKey);
    }

    /**
     * @return HistoricForexTick
     */
    public function historicForexTick(): HistoricForexTick
    {
        return new HistoricForexTick($this->apiKey);
    }

    /**
     * @return RealTimeCurrencyConversion
     */
    public function realTimeCurrencyConversion(): RealTimeCurrencyConversion
    {
        return new RealTimeCurrencyConversion($this->apiKey);
    }

    /**
     * @return LastQuoteForCurrencyPair
     */
    public function lastQuoteForCurrencyPair(): LastQuoteForCurrencyPair
    {
        return new LastQuoteForCurrencyPair($this->apiKey);
    }

    /**
     * @return SnapshotAllTickers
     */
    public function snapshotAllTickers(): SnapshotAllTickers
    {
        return new SnapshotAllTickers($this->apiKey);
    }

    /**
     * @return SnapshotGainersLosers
     */
    public function snapshotGainersLosers(): SnapshotGainersLosers
    {
        return new SnapshotGainersLosers($this->apiKey);
    }
}
