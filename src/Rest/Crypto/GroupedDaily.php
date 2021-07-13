<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class GroupedDaily
 *
 * @package PolygonIO\Rest\Crypto
 */
class GroupedDaily extends RestResource
{

    /**
     * @param $date
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($date, array $params = []): array
    {
        return $this->_get('/v2/aggs/grouped/locale/global/market/crypto/' . $date, $params);
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
