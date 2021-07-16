<?php

namespace PolygonIO\Rest\Forex;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotAllTickers
 *
 * @package PolygonIO\Rest\Forex
 */
class SnapshotAllTickers extends RestResource
{
    /**
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(): array
    {
        return $this->_get('/v2/snapshot/locale/global/markets/forex/tickers');
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
