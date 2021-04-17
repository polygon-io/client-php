<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

/**
 * Class Exchanges
 *
 * @package PolygonIO\Rest\Stocks
 */
class Exchanges extends RestResource
{
    protected $route = '/v1/meta/exchanges';

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
