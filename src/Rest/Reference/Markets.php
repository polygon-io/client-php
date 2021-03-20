<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class Markets
 *
 * @package PolygonIO\rest\reference
 */
class Markets extends RestResource
{
    protected $route = '/v2/reference/markets';

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
