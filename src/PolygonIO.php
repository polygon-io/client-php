<?php

namespace PolygonIO;

use PolygonIO\Rest\Rest;
use PolygonIO\Websockets\Websockets;

/**
 * Class PolygonIO
 *
 * @package PolygonIO
 */
class PolygonIO
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @deprecated
     * @var Rest
     */
    public $rest;

    /**
     * @deprecated
     * @var Websockets
     */
    public $websockets;

    /**
     * Polygon constructor.
     *
     * @param $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->rest = new Rest($apiKey);
        $this->websockets = new Websockets($apiKey);
    }

    /**
     * @return Rest
     */
    public function rest(): Rest
    {
        return new Rest($this->apiKey);
    }

    /**
     * @return Websockets
     */
    public function websockets(): Websockets
    {
        return new Websockets($this->apiKey);
    }
}
