<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\RestResource;

class RealTimeCurrencyConversion extends RestResource
{
    protected $defaultParams = [
        'amount' => 100,
        'precision' => 2,
    ];

    public function get($from, $to, $params = [])
    {
        return $this->_get('/v1/conversion/' . $from . '/' . $to, $params);
    }
}
