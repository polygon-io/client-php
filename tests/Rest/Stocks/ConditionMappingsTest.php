<?php

namespace PolygonIO\Tests\Rest\Stocks;

use PolygonIO\Rest\Stocks\ConditionMappings;
use PolygonIO\Tests\Helpers\MocksHttp;

class ConditionMappingsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testConditionMappingsGetCall()
    {
        $requestsContainer = [];

        $conditionMappings = new ConditionMappings('fake-api-key');
        $conditionMappings->httpClient = $this->getHttpMock($requestsContainer);

        $conditionMappings->get();

        $this->assertPath($requestsContainer, '/v1/meta/conditions/trades');
    }

}
