<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class HistoricCryptoTrade
 *
 * @package PolygonIO\Rest\Crypto
 */
class HistoricCryptoTrade extends RestResource
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
        return $this->_get('/v1/historic/crypto/' . $from . '/' . $to . '/' . $date, $params);
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        $response['ticks'] = array_map(
            function ($tick) {
                return Mappers::cryptoTick($tick);
            },
            $response['ticks']
        );
        return $response;
    }
}
