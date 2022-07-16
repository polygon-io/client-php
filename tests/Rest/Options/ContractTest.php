<?php

namespace PolygonIO\Tests\Rest\Options;

use PolygonIO\Rest\Options\Contract;
use PolygonIO\Tests\Concerns\MocksHttp;

class ContractTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testContractGetCall()
    {
        $requestsContainer = [];

        $contract = new Contract('fake-api-key');
        $contract->httpClient = $this->getHttpMock(
            $requestsContainer, [
                'results' => [],
            ]
        );

        $contract->get('O:EVRI240119C00002500');

        $this->assertPath($requestsContainer, '/v3/reference/options/contracts/O:EVRI240119C00002500');
    }
}
