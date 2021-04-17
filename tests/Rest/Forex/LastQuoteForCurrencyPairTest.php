<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\LastQuoteForCurrencyPair;
use PolygonIO\Tests\Helpers\MocksHttp;

class LastQuoteForCurrencyPairTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testLastQuoteForCurrencyPairGetCall()
    {
        $requestsContainer = [];

        $lastQuoteForCurrencyPair = new LastQuoteForCurrencyPair('fake-api-key');
        $lastQuoteForCurrencyPair->httpClient = $this->getHttpMock($requestsContainer);

        $lastQuoteForCurrencyPair->get('USD', 'AUD');

        $this->assertPath($requestsContainer, '/v1/last_quote/currencies/USD/AUD');
    }
}
