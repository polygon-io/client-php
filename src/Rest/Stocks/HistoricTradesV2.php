<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

/**
 * Class HistoricTradesV2
 *
 * @package PolygonIO\Rest\Stocks
 */
class HistoricTradesV2 extends RestResource
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
        return $this->_get('/v2/ticks/stocks/trades/' . $tickerSymbol . '/' . $date);
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        $mapperFields = [
            'ticker' => 'T',
            'SIPTimestamp' => 't',
            'participantExchangeTimestamp' => 'y',
            'tradeReportingFacilityTimestamp' => 'y',
            'sequenceNumber' => 'q',
            'tradeId' => 'i',
            'exchange' => 'x',
            'size' => 's',
            'conditions' => 'c',
            'price' => 'p',
            'tapeWhereTheTradeOccured' => 'z',
        ];

        $response['results'] = array_map(
            function ($result) {

                return $result;
            },
            $response['results']
        );

        return $response;
    }
}
