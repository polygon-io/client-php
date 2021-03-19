<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\RestResource;

class LastQuoteForCurrencyPair extends RestResource
{
    public function get($from, $to)
    {
        return $this->_get('/v1/last_quote/currencies/' . $from . '/' . $to);
    }
}
