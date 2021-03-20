<?php

namespace PolygonIO\Rest;

use Psr\Http\Client\ClientInterface;

/**
 * Class RestResource
 *
 * @package PolygonIO\rest
 */
abstract class RestResource
{
    public $httpClient;
    protected $defaultParams = [];
    protected $route;
    protected $API_URL = 'https://api.polygon.io';
    private $apiKey;

    /**
     * RestResource constructor.
     *
     * @param  string  $apiKey
     * @param  ClientInterface|null  $httpClient
     */
    public function __construct(string $apiKey, ClientInterface $httpClient = null)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = $httpClient ? $httpClient : new \GuzzleHttp\Client();
    }

    /**
     * @return ClientInterface
     */
    public function getHttpClient(): ClientInterface
    {
        return $this->httpClient;
    }

    /**
     * @param  ClientInterface  $httpClient
     */
    public function setHttpClient(ClientInterface $httpClient): void
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param  string  $route
     * @param  array  $params
     *
     * @return array
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function _get(string $route, $params = []): array
    {
        $enhancedParams =  array_merge(
            [
                'apiKey' => $this->apiKey,
            ],
            array_merge(
                $this->defaultParams,
                $params
            )
        );

        $route = $this->API_URL . $route;
        $response = $this->httpClient->get(
            $route,
            [
            'query' => $enhancedParams
            ]
        );

        $bodyString = $response->getBody()->getContents();
        $json = json_decode($bodyString, true);

        return $this->mapper($json);
    }

    /**
     * @param array $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
        return $response;
    }
}
