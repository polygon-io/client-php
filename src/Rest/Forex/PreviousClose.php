<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class PreviousClose
 *
 * @package PolygonIO\Rest\Forex
 */
class PreviousClose extends RestResource
{

    /**
     * @param $tickerSymbol
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol, $params = []): array
    {
        return $this->_get('/v2/aggs/ticker/' . $tickerSymbol . '/prev', $params);
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
