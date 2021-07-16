<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class GroupedDaily
 *
 * @package PolygonIO\Rest\Forex
 */
class GroupedDaily extends RestResource
{

    /**
     * @param $date
     * @param  string  $locale
     * @param  string  $market
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($date, $locale = 'us', $market = 'fx', $params = []): array
    {
        return $this->_get('/v2/aggs/grouped/locale/' . $locale . '/market/' . $market . '/' . $date, $params);
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
