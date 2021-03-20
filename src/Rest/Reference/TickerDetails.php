<?php

namespace PolygonIO\Rest\Reference;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class TickerDetails
 *
 * @package PolygonIO\rest\reference
 */
class TickerDetails extends RestResource
{

    /**
     * @param $tickerSymbol string
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $tickerSymbol): array
    {
        return $this->_get('/v1/meta/symbols/' . $tickerSymbol . '/company');
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        $mapperFields = [
            'legalEntityIdentifier' => 'lei',
            'standardIndustryClassification' => 'sic',
        ];

        return Mappers::map($mapperFields, $response);
    }
}
