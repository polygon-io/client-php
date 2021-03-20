<?php

namespace PolygonIO\Websockets;

use Amp\Websocket;

class WebsocketResource
{
    public const SOCKET_URI = 'wss://socket.polygon.io:443';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    protected $topic;

    /**
     * WebsocketResource constructor.
     *
     * @param  string  $topic
     * @param  string  $apiKey
     */
    public function __construct(string $topic, string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->topic = $topic;
    }

    /**
     * @param $subscriptions
     * @param $onMessageCallback
     */
    public function connect($subscriptions, $onMessageCallback)
    {
        \Amp\Loop::run(
            function () use ($onMessageCallback, $subscriptions) {
                /**
                * @var Websocket\Connection $connection
                */
                $connection = yield Websocket\connect(self::SOCKET_URI . '/' . $this->topic);
                yield $connection->send('{"action":"auth", "params":"' . $this->apiKey . '"}');
                yield $connection->send(
                    json_encode(
                        [
                        "action" => "subscribe",
                        "params" => $subscriptions,
                        ]
                    )
                );

                /**
                * @var Websocket\Message $message
                */
                while ($message = yield $connection->receive()) {
                    $payload = yield $message->buffer();
                    $onMessageCallback(json_decode($payload));
                }
            }
        );
    }
}
