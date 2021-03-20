<?php

namespace PolygonIO\Rest;

use PolygonIO\Rest\Crypto\Crypto;
use PolygonIO\Rest\Forex\Forex;
use PolygonIO\Rest\Reference\Reference;
use PolygonIO\Rest\Stocks\Stocks;

/**
 * Class Rest
 *
 * @package PolygonIO\Rest
 */
class Rest
{
    private $apiKey;

    /**
     * @deprecated
     * @var Reference
     */
    public $reference;

    /**
     * @deprecated
     * @var Stocks
     */
    public $stocks;

    /**
     * @deprecated
     * @var Forex
     */
    public $forex;

    /**
     * @deprecated
     * @var Crypto
     */
    public $crypto;

    /**
     * Rest constructor.
     *
     * @param $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;

        $this->reference = new Reference($apiKey);
        $this->stocks = new Stocks($apiKey);
        $this->forex = new Forex($apiKey);
        $this->crypto = new Crypto($apiKey);
    }

    /**
     * @return Reference
     */
    public function reference(): Reference
    {
        return new Reference($this->apiKey);
    }

    /**
     * @return Stocks
     */
    public function stocks(): Stocks
    {
        return new Stocks($this->apiKey);
    }

    /**
     * @return Forex
     */
    public function forex(): Forex
    {
        return new Forex($this->apiKey);
    }

    /**
     * @return Crypto
     */
    public function crypto(): Crypto
    {
        return new Crypto($this->apiKey);
    }
}
