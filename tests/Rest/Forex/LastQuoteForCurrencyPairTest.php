<?php

namespace PolygonIO\Tests\Rest\Forex;

use PolygonIO\Rest\Forex\LastQuoteForCurrencyPair;
use PolygonIO\Tests\Concerns\LoadsStub;
use PolygonIO\Tests\Helpers\MocksHttp;

class LastQuoteForCurrencyPairTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;
    use LoadsStub;

    public function testLastQuoteForCurrencyPairGetCall()
    {
        $requestsContainer = [];

        $lastQuoteForCurrencyPair = new LastQuoteForCurrencyPair('fake-api-key');
        $lastQuoteForCurrencyPair->httpClient = $this->getHttpMock(
            $requestsContainer, $this->loadJsonStubFile('api/v1/last_quote/currencies/AUD/USD.json')
        );

        $lastQuoteForCurrencyPair->get('AUD', 'USD');

        $this->assertPath($requestsContainer, '/v1/last_quote/currencies/AUD/USD');
    }
}
