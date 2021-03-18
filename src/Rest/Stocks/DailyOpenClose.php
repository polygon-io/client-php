<?php
namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

class DailyOpenClose extends RestResource {
    public function get($tickerSymbol, $date) {
        return $this->_get('/v1/open-close/'.$tickerSymbol.'/'.$date);
    }
}
