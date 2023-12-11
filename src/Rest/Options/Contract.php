<?php

namespace PolygonIO\Rest\Options;

use PolygonIO\Rest\RestResource;

class Contract extends RestResource
{
    public function get($optionsTicker, $params = []): array
    {
        return $this->_get('/v3/reference/options/contracts/' . $optionsTicker, $params);
    }
}
