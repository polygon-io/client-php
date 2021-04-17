<?php

namespace PolygonIO\Tests\Rest\Reference;

use PolygonIO\Rest\Reference\Locales;
use PolygonIO\Tests\Helpers\MocksHttp;

class LocalesTest extends \PHPUnit\Framework\TestCase
{
    use MocksHttp;

    public function testLocalesGetCall()
    {
        $requestsContainer = [];

        $locales = new Locales('fake-api-key');
        $locales->httpClient = $this->getHttpMock($requestsContainer);

        $locales->get();

        $this->assertPath($requestsContainer, '/v2/reference/locales');
    }
}
