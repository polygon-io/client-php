<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class Aggregates
 *
 * @package PolygonIO\Rest\Forex
 */
class Aggregates extends RestResource
{
    /**
     * @param $tickerSymbol
     * @param $multiplier
     * @param $from
     * @param $to
     * @param  string  $timespan
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol, $multiplier, $from, $to, $timespan = 'day', $params = []): array
    {
        return $this->_get('/v2/aggs/ticker/' . $tickerSymbol . '/range/' . $multiplier . '/' . $timespan . '/' . $from . '/' . $to, $params);
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        $response['results'] = array_map(
            function ($result) {
                return Mappers::snapshotAggV2($result);
            },
            $response['results']
        );

        return $response;
    }
}
