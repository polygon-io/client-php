<?php
namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class TickerTypes
 * @package PolygonIO\rest\reference
 */
class TickerTypes extends RestResource {
    protected $route = '/v2/reference/types';

    public function get() {
        return $this->_get($this->route);
    }
}
