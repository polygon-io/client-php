<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

/**
 * Class LastTradeForSymbol
 *
 * @package PolygonIO\Rest\Stocks
 */
class LastTradeForSymbol extends RestResource
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
        return $this->_get('/v1/last/stocks/' . $tickerSymbol);
    }
}
