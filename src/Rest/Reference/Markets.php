<?php
namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class Markets
 * @package PolygonIO\rest\reference
 */
class Markets extends RestResource
{
    protected $route = '/v2/reference/markets';

    public function get()
    {
        return $this->_get($this->route);
    }
}
