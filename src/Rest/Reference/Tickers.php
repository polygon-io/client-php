<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class Tickers
 *
 * @package PolygonIO\rest\reference
 * @deprecated
 */
class Tickers extends RestResource
{
    public $route = '/v2/reference/tickers';
    protected $defaultParams = [
        'sort' => 'ticker',
        'perPage' => 50,
        'page' => 1,
    ];

    /**
     * @param  $params
     *
     * @return mixed
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(array $params = [])
    {
        return $this->_get($this->route, $params);
    }
}
