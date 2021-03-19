<?php
namespace PolygonIO\Rest;

/**
 * Class RestResource
 * @package PolygonIO\rest
 */
abstract class RestResource {
    protected $defaultParams = [];
    protected $route;

    public $httpClient;
    protected $API_URL = 'https://api.polygon.io';
    protected $api_key;

    /**
     * Polygon constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->api_key = $apiKey;
        $this->httpClient = new \GuzzleHttp\Client();
    }

    protected function _get(string $route, $params = []): array
    {
        $enhancedParams =  array_merge(
            [
                'apiKey' => $this->api_key,
            ],
            array_merge(
                $this->defaultParams,
                $params
            )
        );

        $route = $this->API_URL.$route;
        $response = $this->httpClient->get($route, [
            'query' => $enhancedParams
        ]);

        $bodyString = $response->getBody()->getContents();
        $json = json_decode($bodyString, true);

        return $this->mapper($json);
    }

    /**
     * @param  array  $response
     *
     * @return array
     */
    protected function mapper(array $response): array
    {
       return $response;
    }
}
