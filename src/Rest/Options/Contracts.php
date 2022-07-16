<?php

namespace PolygonIO\Rest\Options;

use PolygonIO\Rest\RestResource;

class Contracts extends RestResource
{
    public function get($params = []): array
    {
        return $this->_get('/v3/reference/options/contracts', $params);
    }
}
