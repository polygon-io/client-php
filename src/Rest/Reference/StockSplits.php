<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class StockSplits
 *
 * @package PolygonIO\rest\reference
 */
class StockSplits extends RestResource
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
        return $this->_get('/v2/reference/splits/' . $tickerSymbol);
    }
}
