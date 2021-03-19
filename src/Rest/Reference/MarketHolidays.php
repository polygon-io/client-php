<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class MarketHolidays
 *
 * @package PolygonIO\Rest\Reference
 */
class MarketHolidays extends RestResource
{
    protected $route = '/v1/marketstatus/upcoming';

    /**
     * @return array
     */
    public function get(): array
    {
        return $this->_get($this->route);
    }
}
