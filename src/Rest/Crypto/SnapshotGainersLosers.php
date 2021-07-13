<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotGainersLosers
 *
 * @package PolygonIO\Rest\Crypto
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
    public function get(string $direction = 'gainers'): array
    {
        return $this->_get('/v2/snapshot/locale/global/markets/crypto/' . $direction);
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
                return Mappers::snapshotCryptoTicker($ticker);
            },
            $response['tickers']
        );

        return $response;
    }
}
