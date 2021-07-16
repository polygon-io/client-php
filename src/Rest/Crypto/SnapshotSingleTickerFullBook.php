<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

class SnapshotSingleTickerFullBook extends RestResource
{
    /**
     * @param $tickerSymbol
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol): array
    {
        return $this->_get('/v2/snapshot/locale/global/markets/crypto/tickers/' . $tickerSymbol . '/book');
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        if (array_key_exists('asks', $response['data'])) {
            $response['data']['asks'] = array_map(
                function ($ask) {
                    return Mappers::cryptoSnapshotBookItem($ask);
                },
                $response['data']['asks']
            );
        }

        if (array_key_exists('bids', $response['data'])) {
            $response['data']['bids'] = array_map(
                function ($bid) {
                    return Mappers::cryptoSnapshotBookItem($bid);
                },
                $response['data']['bids']
            );
        }

        return $response;
    }
}
