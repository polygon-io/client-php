<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

class LastTradeForSymbol extends RestResource
{
    public function get($tickerSymbol)
    {
        return $this->_get('/v1/last/stocks/' . $tickerSymbol);
    }
}
