<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

/**
 * Class LastQuoteForSymbol
 *
 * @package PolygonIO\Rest\Stocks
 */
class LastQuoteForSymbol extends RestResource
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
        return $this->_get('/v1/last_quote/stocks/' . $tickerSymbol);
    }
}
