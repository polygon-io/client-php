<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

use function Amp\Iterator\map;

/**
 * Class HistoricTrades
 *
 * @package PolygonIO\Rest\Stocks
 */
class HistoricTrades extends RestResource
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
        return $this->_get('/v1/historic/trades/' . $tickerSymbol . '/' . $date);
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
                return Mappers::tradeV1($tick);
            },
            $response['ticks']
        );

        return $response;
    }
}
