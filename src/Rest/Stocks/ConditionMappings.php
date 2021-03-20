<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

/**
 * Class ConditionMappings
 *
 * @package PolygonIO\Rest\Stocks
 */
class ConditionMappings extends RestResource
{
    /**
     * @param  string  $tickTypes
     *
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $tickTypes = 'trades'): array
    {
        return $this->_get('/v1/meta/conditions/' . $tickTypes);
    }
}
