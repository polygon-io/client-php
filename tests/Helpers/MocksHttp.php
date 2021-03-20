<?php

namespace PolygonIO\Tests\Helpers;


use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;

trait MocksHttp
{
    private function getHttpMock(&$requestsContainer, $response = [])
    {

        $mock = new MockHandler(
            [
                new Response(200, [], json_encode($response)),
            ]
        );
        $handler = HandlerStack::create($mock);

        $history = Middleware::history($requestsContainer);
        $handler->push($history);

        return new Client(['handler' => $handler]);
    }

    private function assertPath($requests, $path)
    {
        $this->assertCount(1, $requests);
        $this->assertEquals($path, $requests[0]['request']->getUri()->getPath());
    }
}
