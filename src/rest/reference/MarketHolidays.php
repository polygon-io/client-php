<?php
namespace PolygonIO\rest\reference;

use PolygonIO\rest\RestResource;

/**
 * Class MarketHolidays
 * @package PolygonIO\rest\reference
 */
class MarketHolidays extends RestResource {
    protected $route = '/v1/marketstatus/upcoming';

    public function get() {
        return $this->_get($this->route);
    }
}
