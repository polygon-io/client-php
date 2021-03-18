<?php
namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

class SnapshotSingleTicker extends RestResource {
    public function get($tickerSymbol) {
        return $this->_get('/v2/snapshot/locale/global/markets/crypto/tickers/'.$tickerSymbol);
    }

    protected function mapper($response)
    {
        $response['ticker'] = Mappers::snapshotCryptoTicker($response['ticker']);
        return $response;
    }
}
