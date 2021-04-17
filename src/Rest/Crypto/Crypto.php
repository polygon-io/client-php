<?php

namespace PolygonIO\Rest\Crypto;

/**
 * Class Crypto
 *
 * @package PolygonIO\Rest\Crypto
 */
class Crypto
{
    protected $apiKey;

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
     * @var CryptoExchanges
     */
    public $cryptoExchanges;

    /**
     * @deprecated
     * @var LastTradeForCryptoPair
     */
    public $lastTradeForCryptoPair;

    /**
     * @deprecated
     * @var DailyOpenClose
     */
    public $dailyOpenClose;

    /**
     * @deprecated
     * @var HistoricCryptoTrade
     */
    public $historicCryptoTrade;

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
     * @deprecated
     * @var SnapshotSingleTicker
     */
    public $snapshotSingleTicker;

    /**
     * @deprecated
     * @var SnapshotSingleTickerFullBook
     */
    public $snapshotSingleTickerFullBook;

    /**
     * Crypto constructor.
     *
     * @param  string  $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->previousClose = new PreviousClose($apiKey);
        $this->groupedDaily = new GroupedDaily($apiKey);
        $this->aggregates = new Aggregates($apiKey);
        $this->cryptoExchanges = new CryptoExchanges($apiKey);
        $this->lastTradeForCryptoPair = new LastTradeForCryptoPair($apiKey);
        $this->dailyOpenClose = new DailyOpenClose($apiKey);
        $this->historicCryptoTrade = new HistoricCryptoTrade($apiKey);
        $this->snapshotAllTickers = new SnapshotAllTickers($apiKey);
        $this->snapshotGainersLosers = new SnapshotGainersLosers($apiKey);
        $this->snapshotSingleTicker = new SnapshotSingleTicker($apiKey);
        $this->snapshotSingleTickerFullBook = new SnapshotSingleTickerFullBook($apiKey);
    }

    /**
     * @return PreviousClose
     */
    public function previousClose(): PreviousClose
    {
        return new PreviousClose($this->apiKey);
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
     * @return CryptoExchanges
     */
    public function cryptoExchanges(): CryptoExchanges
    {
        return new CryptoExchanges($this->apiKey);
    }

    /**
     * @return LastTradeForCryptoPair
     */
    public function lastTradeForCryptoPair(): LastTradeForCryptoPair
    {
        return new LastTradeForCryptoPair($this->apiKey);
    }

    /**
     * @return DailyOpenClose
     */
    public function dailyOpenClose(): DailyOpenClose
    {
        return new DailyOpenClose($this->apiKey);
    }

    /**
     * @return HistoricCryptoTrade
     */
    public function historicCryptoTrade(): HistoricCryptoTrade
    {
        return new HistoricCryptoTrade($this->apiKey);
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

    /**
     * @return SnapshotSingleTicker
     */
    public function snapshotSingleTicker(): SnapshotSingleTicker
    {
        return new SnapshotSingleTicker($this->apiKey);
    }

    /**
     * @return SnapshotSingleTickerFullBook
     */
    public function snapshotSingleTickerFullBook(): SnapshotSingleTickerFullBook
    {
        return new SnapshotSingleTickerFullBook($this->apiKey);
    }
}
