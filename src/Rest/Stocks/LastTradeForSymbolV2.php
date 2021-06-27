<?php

namespace PolygonIO\Rest\Stocks;

use GuzzleHttp\Exception\GuzzleException;
use PolygonIO\Rest\RestResource;

/**
 * Class LastTradeForSymbol
 *
 * @package PolygonIO\Rest\Stocks
 */
class LastTradeForSymbolV2 extends RestResource
{
    /**
     * @param $tickerSymbol
     *
     * @return array
     *
     * @throws GuzzleException
     */
    public function get($tickerSymbol): array
    {
        return $this->_get('/v2/last/trade/' . $tickerSymbol);
    }
}
