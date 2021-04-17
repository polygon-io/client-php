<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class StockFinancials
 *
 * @package PolygonIO\Rest\Reference
 */
class StockFinancials extends RestResource
{
    protected $defaultParams = [
       'limit' => 5,
    ];

    /**
     * @param  $tickerSymbol
     * @param  $params
     *
     * @return mixed
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $tickerSymbol, array $params = [])
    {
        return $this->_get('/v2/reference/financials/' . $tickerSymbol, $params);
    }
}
