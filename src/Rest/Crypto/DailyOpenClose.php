<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\RestResource;
use \PolygonIO\Rest\Common\Mappers;

/**
 * Class DailyOpenClose
 *
 * @package PolygonIO\Rest\Crypto
 */
class DailyOpenClose extends RestResource
{

    /**
     * @param $from
     * @param $to
     * @param $date
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($from, $to, $date): array
    {
        return $this->_get('/v1/open-close/crypto/' . $from . '/' . $to . '/' . $date);
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        if (array_key_exists('openTrades', $response)) {
            $response['openTrades'] = array_map(function($ticker) {
                return Mappers::cryptoTick($ticker);
            }, $response['openTrades']);
        }

        if (array_key_exists('closingTrades', $response)) {
            $response['closingTrades'] = array_map(function ($ticker) {
                return Mappers::cryptoTick($ticker);
            }, $response['closingTrades']);
        }

        return $response;
    }
}
