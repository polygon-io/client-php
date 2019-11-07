<?php
namespace PolygonIO;

use PolygonIO\rest\Rest;

class Polygon {
    public $api_key;
    public $rest;

    /**
     * Polygon constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->api_key = $apiKey;
        $this->rest = new Rest($apiKey);
    }
}