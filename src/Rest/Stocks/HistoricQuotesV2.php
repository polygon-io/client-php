<?php

namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

/**
 * Class HistoricQuotesV2
 *
 * @package PolygonIO\Rest\Stocks
 */
class HistoricQuotesV2 extends RestResource
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
        return $this->_get('/v2/ticks/stocks/nbbo/' . $tickerSymbol . '/' . $date);
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
            'tradeReportingFacilityTimestamp' => 'f',
            'sequenceNumber' => 'q',
            'conditions' => 'c',
            'indicators' => 'i',
            'bidPrice' => 'p',
            'bidExchangeId' => 'x',
            'bidSize' => 's',
            'askPrice' => 'p',
            'askExchangeId' => 'X',
            'askSize' => 'S',
            'tapeWhereTradeOccured' => 'z',
        ];

        if ($response['results']) {
            $response['results'] = array_map(
                function ($result) use (
                    $mapperFields
                ) {
                    return Mappers::map($mapperFields, $result);
                },
                $response['results']
            );
        }

        return $response;
    }
}
