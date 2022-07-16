<?php

namespace PolygonIO\Tests\Rest\Options;

use PolygonIO\Rest\Options\Contracts;
use PolygonIO\Tests\Concerns\MocksHttp;

class ContractsTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testContractGetCall()
    {
        $requestsContainer = [];

        $contract = new Contracts('fake-api-key');
        $contract->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'results' => [],
            ]
        );

        $contract->get();

        $this->assertPath($requestsContainer, '/v3/reference/options/contracts');
    }
}
