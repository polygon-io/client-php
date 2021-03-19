<?php

namespace PolygonIO;

use PolygonIO\Rest\Rest;
use PolygonIO\Websockets\Websockets;

class PolygonIO
{
    public $api_key;
    public $rest;
    public $websockets;

    /**
     * Polygon constructor.
     *
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->api_key = $apiKey;
        $this->rest = new Rest($apiKey);
        $this->websockets = new Websockets($apiKey);
    }
}
