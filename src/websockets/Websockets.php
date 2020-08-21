<?php
namespace PolygonIO\websockets;

/**
 * Class Websockets
 *
 * @package PolygonIO\websockets
 */
class Websockets {

    /**
     * @var WebsocketResource
     */
    public $stocks;

    /**
     * @var WebsocketResource
     */
    public $crypto;

    /**
     * @var WebsocketResource
     */
    public $forex;

    public function __construct($apiKey)
    {
        $this->crypto = new WebsocketResource('crypto', $apiKey);
        $this->forex = new WebsocketResource('forex', $apiKey);
        $this->stocks = new WebsocketResource('stocks', $apiKey);
    }
}
