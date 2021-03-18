<?php
namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

class Exchanges extends RestResource {
    protected $route = '/v1/meta/exchanges';

    public function get() {
        return $this->_get($this->route);
    }
}
