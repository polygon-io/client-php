<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\RestResource;

/**
 * Class LastQuoteForCurrencyPair
 *
 * @package PolygonIO\Rest\Forex
 */
class LastQuoteForCurrencyPair extends RestResource
{
    /**
     * @param $from
     * @param $to
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($from, $to)
    {
        return $this->_get('/v1/last_quote/currencies/' . $from . '/' . $to);
    }
}
