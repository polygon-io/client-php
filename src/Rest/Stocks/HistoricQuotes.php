<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class HistoricQuotes
 *
 * @package PolygonIO\Rest\Stocks
 */
class HistoricQuotes extends RestResource
{

    protected $defaultParams = [
        'limit' => 100
    ];

    /**
     * @param $tickerSymbol
     * @param $date
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get($tickerSymbol, $date): array
    {
        return $this->_get('/v1/historic/quotes/' . $tickerSymbol . '/' . $date);
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        $response['ticks'] = array_map(
            function ($tick) {
                return Mappers::quoteV1($tick);
            },
            $response['ticks']
        );

        return $response;
    }
}
