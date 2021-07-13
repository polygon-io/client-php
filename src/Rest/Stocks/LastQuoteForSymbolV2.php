<?php

namespace PolygonIO\Rest\Stocks;

use GuzzleHttp\Exception\GuzzleException;
use PolygonIO\Rest\RestResource;

/**
 * Class LastQuoteForSymbol
 *
 * @package PolygonIO\Rest\Stocks
 */
class LastQuoteForSymbolV2 extends RestResource
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
        return $this->_get('/v2/last/nbbo/' . $tickerSymbol);
    }
}
