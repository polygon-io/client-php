<?php
namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class MarketHolidays
 * @package PolygonIO\rest\reference
 */
class MarketHolidays extends RestResource
{
    protected $route = 'GET	/v1/marketstatus/upcoming';

    public function get()
    {
        return $this->_get($this->route);
    }
}
