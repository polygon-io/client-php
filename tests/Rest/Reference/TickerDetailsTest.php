<?php


namespace PolygonIO\Tests\Rest\Reference;


use PolygonIO\Rest\Reference\TickerDetails;
use PolygonIO\Tests\Helpers\MocksHttp;

class TickerDetailsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testTickerDetailsGetCall()
    {
        $requestsContainer = [];
        $response = [
            'lei' => 'lei_remapped',
            'sic' => 'sic_remapped'
        ];
        $tickerDetails = new TickerDetails('fake-api-key');
        $tickerDetails->httpClient = $this->getHttpMock($requestsContainer, $response);

        $apiResponse = $tickerDetails->get('AAPL');

        $this->assertPath($requestsContainer, '/v1/meta/symbols/AAPL/company');
        $this->assertEquals('lei_remapped', $apiResponse['legalEntityIdentifier']);
        $this->assertEquals('sic_remapped', $apiResponse['standardIndustryClassification']);
    }
}
