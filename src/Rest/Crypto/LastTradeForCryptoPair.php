<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\RestResource;

class LastTradeForCryptoPair extends RestResource
{
    public function get($from, $to)
    {
        return $this->_get('/v1/last/crypto/' . $from . '/' . $to);
    }
}
