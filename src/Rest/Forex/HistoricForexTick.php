<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\RestResource;

/**
 * Class HistoricForexTick
 *
 * @package PolygonIO\Rest\Forex
 */
class HistoricForexTick extends RestResource
{
    protected $defaultParams = [
        'limit' => 100,
    ];

    /**
     * @param $from
     * @param $to
     * @param $date
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($from, $to, $date, $params = []): array
    {
        return $this->_get('/v1/historic/forex/' . $from . '/' . $to . '/' . $date, $params);
    }
}
