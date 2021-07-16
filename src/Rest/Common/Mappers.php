<?php

namespace PolygonIO\Rest\Common;

/**
 * Class Mappers
 *
 * @package PolygonIO\Rest\Common
 */
class Mappers
{
    /**
     * @param array $tick
     *
     * @return array
     */
    public static function quoteV1(array $tick): array
    {
        return self::map([
            'condition' => 'c',
            'bidExchange' => 'bE',
            'askExchange' => 'aE',
            'askPrice' => 'aP',
            'buyPrice' => 'bP',
            'bidSize' => 'bS',
            'askSize' => 'aS',
            'timestamp' => 't',
        ], $tick);
    }

    /**
     * @param $mapFields
     * @param $snap
     *
     * @return mixed
     */
    public static function map(array $mapFields, array $snap): array
    {
        foreach ($mapFields as $field => $responseField) {
            $snap[$field] = isset($snap[$responseField]) ? $snap[$responseField] : null;
        }

        return $snap;
    }

    /**
     * @param array $snap
     *
     * @return array|mixed
     */
    public static function snapshotAggV2(array $snap): array
    {
        return self::map([
            'tickerSymbol' => 'T',
            'volume' => 'v',
            'open' => 'o',
            'close' => 'c',
            'high' => 'h',
            'low' => 'l',
            'timestamp' => 't',
            'numberOfItems' => 'n',
        ], $snap);
    }

    /**
     * @param array $item
     *
     * @return array
     */
    public static function cryptoSnapshotBookItem(array $item): array
    {
        $mapperFields = [
            'price' => 'p',
        ];

        return self::map($mapperFields, $item);
    }

    /**
     * @param array $snap
     *
     * @return array
     */
    public static function snapshotTicker(array $snap): array
    {
        $snap['day'] = Mappers::snapshotAgg($snap['day']);
        $snap['lastTrade'] = Mappers::tradeV1($snap['lastTrade']);
        $snap['lastQuote'] = Mappers::snapshotQuote($snap['lastQuote']);
        $snap['min'] = Mappers::snapshotAgg($snap['min']);
        $snap['prevDay'] = Mappers::snapshotAgg($snap['prevDay']);

        return $snap;
    }

    /**
     * @param array $snap
     *
     * @return array
     */
    public static function snapshotTickerV2(array $snap): array
    {
        $snap['day'] = Mappers::snapshotAgg($snap['day']);
        $snap['lastQuote'] = Mappers::snapshotQuote($snap['lastQuote']);
        $snap['min'] = Mappers::snapshotAgg($snap['min']);
        $snap['prevDay'] = Mappers::snapshotAgg($snap['prevDay']);

        return $snap;
    }

    /**
     * @param array $snap
     *
     * @return array
     */
    public static function snapshotAgg(array $snap): array
    {
        return self::map([
            'close' => 'c',
            'high' => 'h',
            'low' => 'l',
            'open' => 'o',
            'volume' => 'v',
        ], $snap);
    }

    /**
     * @param array $tick
     *
     * @return array
     */
    public static function tradeV1(array $tick): array
    {
        return self::map([
            'condition1' => 'c1',
            'condition2' => 'c2',
            'condition3' => 'c3',
            'condition4' => 'c4',
            'exchange' => 'e',
            'price' => 'p',
            'size' => 's',
            'timestamp' => 't',
        ], $tick);
    }

    /**
     * @param array $q
     *
     * @return array
     */
    public static function snapshotQuote(array $q): array
    {
        return self::map([
            'bidPrice' => 'p',
            'bidSize' => 's',
            'askPrice' => 'P',
            'askSize' => 'S',
            'lastUpdateTimestamp' => 't',
        ], $q);
    }

    /**
     * @param array $snap
     *
     * @return array
     */
    public static function snapshotCryptoTicker(array $snap): array
    {
        $snap['day'] = Mappers::snapshotAgg($snap['day']);
        $snap['lastTrade'] = Mappers::cryptoTick($snap['lastTrade']);
        $snap['min'] = Mappers::snapshotAgg($snap['min']);
        $snap['prevDay'] = Mappers::snapshotAgg($snap['prevDay']);

        return $snap;
    }

    /**
     * @param array $tick
     *
     * @return array
     */
    public static function cryptoTick(array $tick): array
    {
        return self::map([
            'price' => 'p',
            'size' => 's',
            'exchange' => 'x',
            'conditions' => 'c',
            'timestamp' => 't',
        ], $tick);
    }
}
