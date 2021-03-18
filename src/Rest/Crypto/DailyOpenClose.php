<?php
namespace PolygonIO\Rest\Crypto;

use PolygonIO\Rest\Common\Mappers;
use PolygonIO\Rest\RestResource;

class DailyOpenClose extends RestResource {
    public function get($from, $to, $date){
        return $this->_get('/v1/open-close/crypto/'.$from.'/'.$to.'/'.$date);
    }

    protected function mapper($response)
    {
        if (array_key_exists('openTrades', $response)) {
            $response['openTrades'] = array_map(Mappers::cryptoTick, $response['openTrades']);
        }
        if (array_key_exists('closingTrades', $response)) {
            $response['closingTrades'] = array_map(Mappers::cryptoTick, $response['closingTrades']);
        }
        return $response;
    }
}
