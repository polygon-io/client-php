<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotSingleTicker
 *
 * @package PolygonIO\Rest\Stocks
 */
class SnapshotSingleTicker extends RestResource
{
    /**
     * @param $tickerSymbol
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol): array
    {
        return $this->_get('/v2/snapshot/locale/us/markets/stocks/tickers/' . $tickerSymbol);
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        $response['ticker'] = Mappers::snapshotTicker($response['ticker']);

        return $response;
    }
}
