<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

/**
 * Class DailyOpenClose
 *
 * @package PolygonIO\Rest\Stocks
 */
class DailyOpenClose extends RestResource
{
    /**
     * @param $tickerSymbol
     * @param $date
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol, $date): array
    {
        return $this->_get('/v1/open-close/' . $tickerSymbol . '/' . $date);
    }
}
