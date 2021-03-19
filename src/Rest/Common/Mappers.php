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
     * @param  array  $tick
     *
     * @return array
     */
    public static function quoteV1(array $tick): array
    {
        $mapperFields = [
            'condition' => 'c',
            'bidExchange' => 'bE',
            'askExchange' => 'aE',
            'askPrice' => 'aP',
            'buyPrice' => 'bP',
            'bidSize' => 'bS',
            'askSize' => 'aS',
            'timestamp' => 't',
        ];

        return self::map($mapperFields, $tick);
    }

    /**
     * @param  array  $q
     *
     * @return array
     */
    public static function snapshotQuote(array $q): array
    {
        $mapperFields = [
            'bidPrice' => 'p',
            'bidSize' => 's',
            'askPrice' => 'P',
            'askSize' => 'S',
            'lastUpdateTimestamp' => 't',
        ];

        return self::map($mapperFields, $q);
    }

    /**
     * @param  array  $tick
     *
     * @return array
     */
    public static function tradeV1(array $tick): array
    {
        $mapperFields = [
            'condition1' => 'c1',
            'condition2' => 'c2',
            'condition3' => 'c3',
            'condition4' => 'c4',
            'exchange' => 'e',
            'price' => 'p',
            'size' => 's',
            'timestamp' => 't',
        ];

        return self::map($mapperFields, $tick);
    }

    /**
     * @param  array  $snap
     *
     * @return array
     */
    public static function snapshotAgg(array $snap): array
    {
        $mapperFields = [
            'close' => 'c',
            'high' => 'h',
            'low' => 'l',
            'open' => 'o',
            'volume' => 'v',
        ];

        return self::map($mapperFields, $snap);
    }

    /**
     * @param  array  $snap
     *
     * @return array|mixed
     */
    public static function snapshotAggV2(array $snap)
    {
        $mapperFields = [
            'tickerSymbol' => 'T',
            'volume' => 'v',
            'open' => 'o',
            'close' => 'c',
            'high' => 'h',
            'low' => 'l',
            'timestamp' => 't',
            'numberOfItems' => 'n',
        ];

        return self::map($mapperFields, $snap);
    }

    /**
     * @param  array  $tick
     *
     * @return array
     */
    public static function cryptoTick(array $tick): array
    {
        $mapperFields = [
            'price' => 'p',
            'size' => 's',
            'exchange' => 'x',
            'conditions' => 'c',
            'timestamp' => 't',
        ];

        return self::map($mapperFields, $tick);
    }

    /**
     * @param  array  $item
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
     * @param  array  $snap
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
     * @param  array  $snap
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
}
