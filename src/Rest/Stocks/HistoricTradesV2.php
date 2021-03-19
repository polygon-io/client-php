<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

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
     */
    public function get($tickerSymbol, $date): array
    {
        return $this->_get('/v2/ticks/stocks/trades/' . $tickerSymbol . '/' . $date);
    }

    /**
     * @param  array  $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        $mapperFields = [
            'T' => 'ticker',
            't' => 'SIPTimestamp',
            'y' => 'participantExchangeTimestamp',
            'y' => 'tradeReportingFacilityTimestamp',
            'q' => 'sequenceNumber',
            'i' => 'tradeId',
            'x' => 'exchange',
            's' => 'size',
            'c' => 'conditions',
            'p' => 'price',
            'z' => 'tapeWhereTheTradeOccured',
        ];

        $response['ticks'] = array_map(function ($tick) {

            return $tick;
        }, $response['ticks']);

        return $response;
    }
}
