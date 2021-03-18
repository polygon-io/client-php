<?php
namespace PolygonIO\Rest\Stocks;

use PolygonIO\Rest\RestResource;

class HistoricTradesV2 extends RestResource {
    protected $defaultParams = [
        'limit' => 100
    ];
    public function get($tickerSymbol, $date) {
        return $this->_get('/v2/ticks/stocks/trades/'.$tickerSymbol.'/'.$date);
    }

    protected function mapper($response)
    {
        $response['ticks'] = array_map(function ($tick) {
           $tick['ticker'] = $tick['T'];
           $tick['SIPTimestamp'] = $tick['t'];
           $tick['participantExchangeTimestamp'] = $tick['y'];
           $tick['tradeReportingFacilityTimestamp'] = $tick['y'];
           $tick['sequenceNumber'] = $tick['q'];
           $tick['tradeId'] = $tick['i'];
           $tick['exchange'] = $tick['x'];
           $tick['size'] = $tick['s'];
           $tick['conditions'] = $tick['c'];
           $tick['price'] = $tick['p'];
           $tick['tapeWhereTheTradeOccured'] = $tick['z'];
            return $tick;
        }, $response['ticks']);
        return $response;
    }
}
