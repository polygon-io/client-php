<?php

namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\RestResource;

/**
 * Class CryptoExchanges
 *
 * @package PolygonIO\Rest\Crypto
 */
class CryptoExchanges extends RestResource
{
    public $route = '/v1/meta/crypto-exchanges';

    /**
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(): array
    {
        return $this->_get($this->route);
    }
}
