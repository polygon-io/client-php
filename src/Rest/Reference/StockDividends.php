<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class StockDividends
 *
 * @package PolygonIO\rest\reference
 */
class StockDividends extends RestResource
{
    /**
     * @param  string  $tickerSymbol
     *
     * @return mixed
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $tickerSymbol)
    {
        return $this->_get('/v2/reference/dividends/' . $tickerSymbol);
    }
}
