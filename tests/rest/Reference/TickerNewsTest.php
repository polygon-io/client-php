<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\TickerNews;
use PolygonIO\Tests\Helpers\MocksHttp;

class TickerNewsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testTickerNewsGetCall()
    {
        $requestsContainer = [];
        $tickerNews = new TickerNews('fake-api-key');
        $tickerNews->httpClient = $this->getHttpMock($requestsContainer);

        $tickerNews->get('AAPL');

        $this->assertPath($requestsContainer, '/v1/meta/symbols/AAPL/news');
    }
}
