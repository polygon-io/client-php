<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\RestResource;

/**
 * Class RealTimeCurrencyConversion
 *
 * @package PolygonIO\Rest\Forex
 */
class RealTimeCurrencyConversion extends RestResource
{
    protected $defaultParams = [
        'amount' => 100,
        'precision' => 2,
    ];

    /**
     * @param $from
     * @param $to
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($from, $to, $params = []): array
    {
        return $this->_get('/v1/conversion/' . $from . '/' . $to, $params);
    }
}
