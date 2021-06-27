<?php

namespace PolygonIO\Rest\Forex;

use GuzzleHttp\Exception\GuzzleException;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotAllTickers
 *
 * @package PolygonIO\Rest\Forex
 */
class SnapshotTickerV2 extends RestResource
{
    /**
     * @param $tickerSymbol
     *
     * @return array
     *
     */
    public function get($tickerSymbol): array
    {
        return $this->_get('/v2/snapshot/locale/global/markets/forex/tickers/' . $tickerSymbol);
    }
}
