# Polygon.io php api client

[![CircleCI](https://circleci.com/gh/polygon-io/client-php.svg?style=svg)](https://circleci.com/gh/polygon-io/client-php)

## Installation guide

### prerequisite

- [composer](https://getcomposer.org/)
- php > 7.2

### install

``` 
composer require polygon-io/api
```

## [Rest API](https://polygon.io/docs/#getting-started)

The `\PolygonIO\Rest\Rest` class export 4 modules:

- reference
- stocks
- forex
- crypto

```
<?php
require __DIR__ . '/vendor/autoload.php';
use PolygonIO\Rest\Rest;

$rest = new Rest('your api key');

print_r($rest->forex->realTimeCurrencyConversion->get('USD', 'EUR', 10));

```

## Websockets

The websocket clients use the Amp event loop. 
You can only use one websocket client by php thread since the event loop is in a blocking while loop.

```
<?php
require __DIR__ . '/vendor/autoload.php';
use PolygonIO;

$client = new PolygonIO('your apiKey');

$client->websockets->forex(
    'C.USD',
    function($data) {
        // your handler function
    }
);
```

## Development

### prerequisite

- [composer](https://getcomposer.org/)
- php > 7.2

### use the tooling

Install dependencies
```
composer require
```

Run the linter
```bash
./vendor/bin/phplint .
```

Run the tests
```
./vendor/bin/phpunit
```
