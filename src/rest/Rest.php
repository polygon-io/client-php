<?php
namespace PolygonIO\rest;

use PolygonIO\rest\reference\Reference;

class Rest {
    public $reference;

    /**
     * Rest constructor.
     * @param $apiKey
     */
    public function __construct($apiKey)
    {
        $this->reference = new Reference($apiKey);
    }
}