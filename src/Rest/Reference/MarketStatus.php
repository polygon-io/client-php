<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class MarketStatus
 *
 * @package PolygonIO\rest\reference
 */
class MarketStatus extends RestResource
{
    protected $route = '/v1/marketstatus/now';

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
