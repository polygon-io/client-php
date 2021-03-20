<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class SnapshotAllTickers
 *
 * @package PolygonIO\Rest\Crypto
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
        return $this->_get('/v2/snapshot/locale/global/markets/crypto/tickers');
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
