<?php
namespace PolygonIO\rest;
require '../../vendor/autoload.php';

/**
 * Class RestResource
 * @package PolygonIO\rest
 */
abstract class RestResource {
    protected $defaultParams = [];
    protected $route;

    protected $resourceUrl;
    protected $httpClient;
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
        $this->resourceUrl = $this->API_URL.$this->route;
    }



    protected function _get($route, $params = []){
        $response = $this->httpClient->request('GET', $route, [
            'query' => array_merge(
                [
                    'apiKey' => $this->api_key,
                ],
                array_merge(
                    $this->defaultParams,
                    $params
                )
            ),
        ]);

        return $this->mapper($response->getBody());
    }

    protected function mapper($response) {
       return $response;
    }
}