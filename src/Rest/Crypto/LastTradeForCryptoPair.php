<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\RestResource;

class LastTradeForCryptoPair extends RestResource
{
    /**
     * @param $from
     * @param $to
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($from, $to): array
    {
        return $this->_get('/v1/last/crypto/' . $from . '/' . $to);
    }
}
