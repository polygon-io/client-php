<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class TickerTypes
 *
 * @package PolygonIO\Rest\Reference
 */
class TickerTypes extends RestResource
{
    protected $route = '/v2/reference/types';

    /**
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(): array
    {
        return $this->_get($this->route);
    }
}
