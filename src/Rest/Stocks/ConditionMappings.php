<?php
namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

class ConditionMappings extends RestResource {
    public function get($tickTypes = 'trades') {
        return $this->_get('/v1/meta/conditions/'.$tickTypes);
    }
}
