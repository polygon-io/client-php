<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotGainersLosers
 *
 * @package PolygonIO\Rest\Forex
 */
class SnapshotGainersLosers extends RestResource
{
    /**
     * @param  string  $direction
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($direction = 'gainers'): array
    {
        return $this->_get('/v2/snapshot/locale/global/markets/forex/' . $direction);
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        $response['tickers'] = array_map(
            function ($ticker) {
                return Mappers::snapshotTickerV2($ticker);
            },
            $response['tickers']
        );

        return $response;
    }
}
