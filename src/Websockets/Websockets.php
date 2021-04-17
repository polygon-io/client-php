<?php

namespace PolygonIO\Websockets;

class Websockets
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @deprecated
     * @var WebsocketResource
     */
    public $stocks;

    /**
     * @deprecated
     * @var WebsocketResource
     */
    public $crypto;

    /**
     * @deprecated
     * @var WebsocketResource
     */
    public $forex;

    /**
     * Websockets constructor.
     *
     * @param  string  $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->crypto = new WebsocketResource('crypto', $apiKey);
        $this->forex = new WebsocketResource('forex', $apiKey);
        $this->stocks = new WebsocketResource('stocks', $apiKey);
    }

    /**
     * @return WebsocketResource
     */
    public function crypto(): WebsocketResource
    {
        return new WebsocketResource('crypto', $this->apiKey);
    }

    /**
     * @return WebsocketResource
     */
    public function forex(): WebsocketResource
    {
        return new WebsocketResource('forex', $this->apiKey);
    }

    /**
     * @return WebsocketResource
     */
    public function stocks(): WebsocketResource
    {
        return new WebsocketResource('stocks', $this->apiKey);
    }
}
