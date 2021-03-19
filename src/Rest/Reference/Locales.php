<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class Locales
 *
 * @package PolygonIO\rest\reference
 */
class Locales extends RestResource
{
    protected $route = '/v2/reference/locales';

    public function get()
    {
        return $this->_get($this->route);
    }
}
