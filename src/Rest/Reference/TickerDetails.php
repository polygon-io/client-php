<?php
namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\RestResource;

/**
 * Class TickerDetails
 * @package PolygonIO\rest\reference
 */
class TickerDetails extends RestResource {
    /**
     * @param string $tickerSymbol
     * @return mixed
     */
    public function get($tickerSymbol) {
        return $this->_get('/v1/meta/symbols/'.$tickerSymbol.'/company');
    }

    protected function mapper($response) {
        $response['legalEntityIdentifier'] = $response['lei'];
        $response['standardIndustryClassification'] = $response['sic'];
        return $response;
    }
}
