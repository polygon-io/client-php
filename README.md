# Polygon PHP Client - WebSocket & RESTful APIs

Welcome to the official PHP client library for the [Polygon](https://polygon.io/) REST and WebSocket API. To get started, please see the [Getting Started](https://polygon.io/docs/stocks/getting-started) section in our documentation, view the [API documentation](./docs/Api/) directory for code snippets, or see the [Model documentation](./docs/Model/) to learn more about the data structures.

This version is an **experimental release and is under active development**. We are working to add more features and improve its stability and performance. Please be aware that this version might undergo significant changes, and some functionality may be incomplete or subject to modification.

## Roadmap Features

* **Pagination over next_url and combine result sets**: We plan to introduce enhanced pagination capabilities that will allow users to easily navigate through API responses using the next_url provided and seamlessly combine result sets for comprehensive data analysis.
* **Adding Tracing**: To aid in debugging and enhance transparency, we aim to implement tracing features that will allow users to log detailed information about their API requests. This includes the requested URL, parameters, and full request and response headers.
* **WebSocket Support**: In our effort to provide real-time data access, we will be integrating WebSocket support into the client library. This will enable users to establish persistent connections for live data feeds with minimal latency.

## Installation & Usage

### Prerequisites

Before installing the Polygon PHP client, ensure your environment has PHP 7.4 or higher, compatible with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/polygon-io/client-php.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/PolygonClient/vendor/autoload.php');
```

## Getting Started

To get started, please follow the [installation procedure](#installation--usage) and then explore the [API documentation](./docs/Api/) directory for code snippets, or see the [Model documentation](./docs/Model/) to learn more about the data structures.

The free tier of our API comes with usage limitations, which might lead to rate limit errors if these limits are exceeded. For uninterrupted access and to support larger data requirements, we recommend reviewing our [subscription plans](https://polygon.io/pricing), which are tailored for a wide range of needs from development to high-demand enterprise applications. Visit our pricing page for detailed information on limits and features to ensure a seamless experience, especially for real-time data processing.

## REST API Client

Import and configure the OpenAPI Client.
```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

// Load API key from environment variable
$apiKey = getenv('POLYGON_API_KEY');

// Check if the API key is not empty
if (!$apiKey) {
    die('API key is not set in environment variables.');
}

// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', $apiKey);
```

### Using the Client

Request data using client methods.
```php

// https://polygon.io/docs/stocks/get_v2_last_trade__stocksticker
$apiInstance = new OpenAPI\Client\Api\StockslasttradeApi(
    new GuzzleHttp\Client(),
    $config
);

$stocks_ticker = "TSLA";

try {
    $result = $apiInstance->lastTrade($stocks_ticker);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockslasttradeApi->lastTrade: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to *https://api.polygon.io*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CrpytoaggregatesApi* | [**cryptoEMA**](docs/Api/CrpytoaggregatesApi.md#cryptoema) | **GET** /v1/indicators/ema/{cryptoTicker} | Exponential Moving Average (EMA)
*CrpytoaggregatesApi* | [**cryptoRSI**](docs/Api/CrpytoaggregatesApi.md#cryptorsi) | **GET** /v1/indicators/rsi/{cryptoTicker} | Relative Strength Index (RSI)
*CrpytoaggregatesApi* | [**cryptoSMA**](docs/Api/CrpytoaggregatesApi.md#cryptosma) | **GET** /v1/indicators/sma/{cryptoTicker} | Simple Moving Average (SMA)
*CryptoaggregatesApi* | [**cryptoMACD**](docs/Api/CryptoaggregatesApi.md#cryptomacd) | **GET** /v1/indicators/macd/{cryptoTicker} | Moving Average Convergence/Divergence (MACD)
*CryptoaggregatesApi* | [**v2AggsGroupedLocaleGlobalMarketCryptoDateGet**](docs/Api/CryptoaggregatesApi.md#v2aggsgroupedlocaleglobalmarketcryptodateget) | **GET** /v2/aggs/grouped/locale/global/market/crypto/{date} | Grouped Daily (Bars)
*CryptoaggregatesApi* | [**v2AggsTickerCryptoTickerPrevGet**](docs/Api/CryptoaggregatesApi.md#v2aggstickercryptotickerprevget) | **GET** /v2/aggs/ticker/{cryptoTicker}/prev | Previous Close
*CryptoaggregatesApi* | [**v2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet**](docs/Api/CryptoaggregatesApi.md#v2aggstickercryptotickerrangemultipliertimespanfromtoget) | **GET** /v2/aggs/ticker/{cryptoTicker}/range/{multiplier}/{timespan}/{from}/{to} | Aggregates (Bars)
*CryptolasttradeApi* | [**lastTradeCrypto**](docs/Api/CryptolasttradeApi.md#lasttradecrypto) | **GET** /v1/last/crypto/{from}/{to} | Last Trade for a Crypto Pair
*CryptoopenCloseApi* | [**v1OpenCloseCryptoFromToDateGet**](docs/Api/CryptoopenCloseApi.md#v1openclosecryptofromtodateget) | **GET** /v1/open-close/crypto/{from}/{to}/{date} | Daily Open/Close
*CryptosnapshotApi* | [**v2SnapshotLocaleGlobalMarketsCryptoDirectionGet**](docs/Api/CryptosnapshotApi.md#v2snapshotlocaleglobalmarketscryptodirectionget) | **GET** /v2/snapshot/locale/global/markets/crypto/{direction} | Gainers/Losers
*CryptosnapshotApi* | [**v2SnapshotLocaleGlobalMarketsCryptoTickersGet**](docs/Api/CryptosnapshotApi.md#v2snapshotlocaleglobalmarketscryptotickersget) | **GET** /v2/snapshot/locale/global/markets/crypto/tickers | All Tickers
*CryptosnapshotApi* | [**v2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet**](docs/Api/CryptosnapshotApi.md#v2snapshotlocaleglobalmarketscryptotickerstickerbookget) | **GET** /v2/snapshot/locale/global/markets/crypto/tickers/{ticker}/book | Ticker Full Book (L2)
*CryptosnapshotApi* | [**v2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet**](docs/Api/CryptosnapshotApi.md#v2snapshotlocaleglobalmarketscryptotickerstickerget) | **GET** /v2/snapshot/locale/global/markets/crypto/tickers/{ticker} | Ticker
*CryptotradesApi* | [**tradesCrypto**](docs/Api/CryptotradesApi.md#tradescrypto) | **GET** /v3/trades/{cryptoTicker} | Trades
*CryptotradesApi* | [**v1HistoricCryptoFromToDateGet**](docs/Api/CryptotradesApi.md#v1historiccryptofromtodateget) | **GET** /v1/historic/crypto/{from}/{to}/{date} | Historic Crypto Trades
*DefaultApi* | [**snapshotSummary**](docs/Api/DefaultApi.md#snapshotsummary) | **GET** /v1/summaries | Summaries
*DefaultApi* | [**snapshots**](docs/Api/DefaultApi.md#snapshots) | **GET** /v3/snapshot | Universal Snapshot
*FxaggregatesApi* | [**forexEMA**](docs/Api/FxaggregatesApi.md#forexema) | **GET** /v1/indicators/ema/{fxTicker} | Exponential Moving Average (EMA)
*FxaggregatesApi* | [**forexMACD**](docs/Api/FxaggregatesApi.md#forexmacd) | **GET** /v1/indicators/macd/{fxTicker} | Moving Average Convergence/Divergence (MACD)
*FxaggregatesApi* | [**forexRSI**](docs/Api/FxaggregatesApi.md#forexrsi) | **GET** /v1/indicators/rsi/{fxTicker} | Relative Strength Index (RSI)
*FxaggregatesApi* | [**forexSMA**](docs/Api/FxaggregatesApi.md#forexsma) | **GET** /v1/indicators/sma/{fxTicker} | Simple Moving Average (SMA)
*FxaggregatesApi* | [**v2AggsGroupedLocaleGlobalMarketFxDateGet**](docs/Api/FxaggregatesApi.md#v2aggsgroupedlocaleglobalmarketfxdateget) | **GET** /v2/aggs/grouped/locale/global/market/fx/{date} | Grouped Daily (Bars)
*FxaggregatesApi* | [**v2AggsTickerForexTickerPrevGet**](docs/Api/FxaggregatesApi.md#v2aggstickerforextickerprevget) | **GET** /v2/aggs/ticker/{forexTicker}/prev | Previous Close
*FxaggregatesApi* | [**v2AggsTickerForexTickerRangeMultiplierTimespanFromToGet**](docs/Api/FxaggregatesApi.md#v2aggstickerforextickerrangemultipliertimespanfromtoget) | **GET** /v2/aggs/ticker/{forexTicker}/range/{multiplier}/{timespan}/{from}/{to} | Aggregates (Bars)
*FxconversionApi* | [**realTimeCurrencyConversion**](docs/Api/FxconversionApi.md#realtimecurrencyconversion) | **GET** /v1/conversion/{from}/{to} | Real-time Currency Conversion
*FxlastquoteApi* | [**lastQuoteCurrencies**](docs/Api/FxlastquoteApi.md#lastquotecurrencies) | **GET** /v1/last_quote/currencies/{from}/{to} | Last Quote for a Currency Pair
*FxquotesApi* | [**quotesFx**](docs/Api/FxquotesApi.md#quotesfx) | **GET** /v3/quotes/{fxTicker} | Quotes (BBO)
*FxsnapshotApi* | [**v2SnapshotLocaleGlobalMarketsForexDirectionGet**](docs/Api/FxsnapshotApi.md#v2snapshotlocaleglobalmarketsforexdirectionget) | **GET** /v2/snapshot/locale/global/markets/forex/{direction} | Gainers/Losers
*FxsnapshotApi* | [**v2SnapshotLocaleGlobalMarketsForexTickersGet**](docs/Api/FxsnapshotApi.md#v2snapshotlocaleglobalmarketsforextickersget) | **GET** /v2/snapshot/locale/global/markets/forex/tickers | All Tickers
*FxsnapshotApi* | [**v2SnapshotLocaleGlobalMarketsForexTickersTickerGet**](docs/Api/FxsnapshotApi.md#v2snapshotlocaleglobalmarketsforextickerstickerget) | **GET** /v2/snapshot/locale/global/markets/forex/tickers/{ticker} | Ticker
*FxtradesApi* | [**v1HistoricForexFromToDateGet**](docs/Api/FxtradesApi.md#v1historicforexfromtodateget) | **GET** /v1/historic/forex/{from}/{to}/{date} | Historic Forex Ticks
*IndicesaggregatesApi* | [**indicesEMA**](docs/Api/IndicesaggregatesApi.md#indicesema) | **GET** /v1/indicators/ema/{indicesTicker} | Exponential Moving Average (EMA)
*IndicesaggregatesApi* | [**indicesMACD**](docs/Api/IndicesaggregatesApi.md#indicesmacd) | **GET** /v1/indicators/macd/{indicesTicker} | Moving Average Convergence/Divergence (MACD)
*IndicesaggregatesApi* | [**indicesRSI**](docs/Api/IndicesaggregatesApi.md#indicesrsi) | **GET** /v1/indicators/rsi/{indicesTicker} | Relative Strength Index (RSI)
*IndicesaggregatesApi* | [**indicesSMA**](docs/Api/IndicesaggregatesApi.md#indicessma) | **GET** /v1/indicators/sma/{indicesTicker} | Simple Moving Average (SMA)
*IndicesaggregatesApi* | [**v2AggsTickerIndicesTickerPrevGet**](docs/Api/IndicesaggregatesApi.md#v2aggstickerindicestickerprevget) | **GET** /v2/aggs/ticker/{indicesTicker}/prev | Previous Close
*IndicesaggregatesApi* | [**v2AggsTickerIndicesTickerRangeMultiplierTimespanFromToGet**](docs/Api/IndicesaggregatesApi.md#v2aggstickerindicestickerrangemultipliertimespanfromtoget) | **GET** /v2/aggs/ticker/{indicesTicker}/range/{multiplier}/{timespan}/{from}/{to} | Aggregates (Bars)
*IndicessnapshotApi* | [**indicesSnapshot**](docs/Api/IndicessnapshotApi.md#indicessnapshot) | **GET** /v3/snapshot/indices | Indices Snapshot
*InternalApi* | [**listTickerTaxonomyClassifications**](docs/Api/InternalApi.md#listtickertaxonomyclassifications) | **GET** /vX/reference/tickers/taxonomies | Ticker Taxonomies
*OptionsaggregatesApi* | [**optionsEMA**](docs/Api/OptionsaggregatesApi.md#optionsema) | **GET** /v1/indicators/ema/{optionsTicker} | Exponential Moving Average (EMA)
*OptionsaggregatesApi* | [**optionsMACD**](docs/Api/OptionsaggregatesApi.md#optionsmacd) | **GET** /v1/indicators/macd/{optionsTicker} | Moving Average Convergence/Divergence (MACD)
*OptionsaggregatesApi* | [**optionsRSI**](docs/Api/OptionsaggregatesApi.md#optionsrsi) | **GET** /v1/indicators/rsi/{optionsTicker} | Relative Strength Index (RSI)
*OptionsaggregatesApi* | [**optionsSMA**](docs/Api/OptionsaggregatesApi.md#optionssma) | **GET** /v1/indicators/sma/{optionsTicker} | Simple Moving Average (SMA)
*OptionsaggregatesApi* | [**v2AggsTickerOptionsTickerPrevGet**](docs/Api/OptionsaggregatesApi.md#v2aggstickeroptionstickerprevget) | **GET** /v2/aggs/ticker/{optionsTicker}/prev | Previous Close
*OptionsaggregatesApi* | [**v2AggsTickerOptionsTickerRangeMultiplierTimespanFromToGet**](docs/Api/OptionsaggregatesApi.md#v2aggstickeroptionstickerrangemultipliertimespanfromtoget) | **GET** /v2/aggs/ticker/{optionsTicker}/range/{multiplier}/{timespan}/{from}/{to} | Aggregates (Bars)
*OptionslasttradeApi* | [**lastTradeOptions**](docs/Api/OptionslasttradeApi.md#lasttradeoptions) | **GET** /v2/last/trade/{optionsTicker} | Last Trade
*OptionsopenCloseApi* | [**v1OpenCloseOptionsTickerDateGet**](docs/Api/OptionsopenCloseApi.md#v1opencloseoptionstickerdateget) | **GET** /v1/open-close/{optionsTicker}/{date} | Daily Open/Close
*OptionsquotesApi* | [**quotesOptions**](docs/Api/OptionsquotesApi.md#quotesoptions) | **GET** /v3/quotes/{optionsTicker} | Quotes
*OptionssnapshotApi* | [**optionContract**](docs/Api/OptionssnapshotApi.md#optioncontract) | **GET** /v3/snapshot/options/{underlyingAsset}/{optionContract} | Option Contract
*OptionssnapshotApi* | [**optionsChain**](docs/Api/OptionssnapshotApi.md#optionschain) | **GET** /v3/snapshot/options/{underlyingAsset} | Options Chain
*OptionstradesApi* | [**tradesOptions**](docs/Api/OptionstradesApi.md#tradesoptions) | **GET** /v3/trades/{optionsTicker} | Trades
*PublicApi* | [**listTickerTaxonomyClassifications**](docs/Api/PublicApi.md#listtickertaxonomyclassifications) | **GET** /vX/reference/tickers/taxonomies | Ticker Taxonomies
*ReferenceconditionsApi* | [**listConditions**](docs/Api/ReferenceconditionsApi.md#listconditions) | **GET** /v3/reference/conditions | Conditions
*ReferencedividendsApi* | [**listDividends**](docs/Api/ReferencedividendsApi.md#listdividends) | **GET** /v3/reference/dividends | Dividends v3
*ReferenceexchangesApi* | [**listExchanges**](docs/Api/ReferenceexchangesApi.md#listexchanges) | **GET** /v3/reference/exchanges | Exchanges
*ReferencenewsApi* | [**listNews**](docs/Api/ReferencenewsApi.md#listnews) | **GET** /v2/reference/news | Ticker News
*ReferenceoptionscontractApi* | [**getOptionsContract**](docs/Api/ReferenceoptionscontractApi.md#getoptionscontract) | **GET** /v3/reference/options/contracts/{options_ticker} | Options Contract
*ReferenceoptionscontractslistApi* | [**listOptionsContracts**](docs/Api/ReferenceoptionscontractslistApi.md#listoptionscontracts) | **GET** /v3/reference/options/contracts | Options Contracts
*ReferencesecfilingApi* | [**getFiling**](docs/Api/ReferencesecfilingApi.md#getfiling) | **GET** /v1/reference/sec/filings/{filing_id} | SEC Filing
*ReferencesecfilingfileApi* | [**getFilingFile**](docs/Api/ReferencesecfilingfileApi.md#getfilingfile) | **GET** /v1/reference/sec/filings/{filing_id}/files/{file_id} | SEC Filing File
*ReferencesecfilingfilesApi* | [**listFilingFiles**](docs/Api/ReferencesecfilingfilesApi.md#listfilingfiles) | **GET** /v1/reference/sec/filings/{filing_id}/files | SEC Filing Files
*ReferencesecfilingsApi* | [**listFilings**](docs/Api/ReferencesecfilingsApi.md#listfilings) | **GET** /v1/reference/sec/filings | SEC Filings
*ReferencestocksApi* | [**listFinancials**](docs/Api/ReferencestocksApi.md#listfinancials) | **GET** /vX/reference/financials | Stock Financials vX
*ReferencestocksApi* | [**listStockSplits**](docs/Api/ReferencestocksApi.md#liststocksplits) | **GET** /v3/reference/splits | Stock Splits v3
*ReferencestocksmarketApi* | [**getMarketHolidays**](docs/Api/ReferencestocksmarketApi.md#getmarketholidays) | **GET** /v1/marketstatus/upcoming | Market Holidays
*ReferencestocksmarketApi* | [**getMarketStatus**](docs/Api/ReferencestocksmarketApi.md#getmarketstatus) | **GET** /v1/marketstatus/now | Market Status
*ReferencetickersgetApi* | [**getEvents**](docs/Api/ReferencetickersgetApi.md#getevents) | **GET** /vX/reference/tickers/{id}/events | Ticker Events
*ReferencetickersgetApi* | [**getTicker**](docs/Api/ReferencetickersgetApi.md#getticker) | **GET** /v3/reference/tickers/{ticker} | Ticker Details v3
*ReferencetickerslistApi* | [**listTickers**](docs/Api/ReferencetickerslistApi.md#listtickers) | **GET** /v3/reference/tickers | Tickers
*ReferencetickerstypesApi* | [**listTickerTypes**](docs/Api/ReferencetickerstypesApi.md#listtickertypes) | **GET** /v3/reference/tickers/types | Ticker Types
*StocksaggregatesApi* | [**eMA**](docs/Api/StocksaggregatesApi.md#ema) | **GET** /v1/indicators/ema/{stockTicker} | Exponential Moving Average (EMA)
*StocksaggregatesApi* | [**mACD**](docs/Api/StocksaggregatesApi.md#macd) | **GET** /v1/indicators/macd/{stockTicker} | Moving Average Convergence/Divergence (MACD)
*StocksaggregatesApi* | [**rSI**](docs/Api/StocksaggregatesApi.md#rsi) | **GET** /v1/indicators/rsi/{stockTicker} | Relative Strength Index (RSI)
*StocksaggregatesApi* | [**sMA**](docs/Api/StocksaggregatesApi.md#sma) | **GET** /v1/indicators/sma/{stockTicker} | Simple Moving Average (SMA)
*StocksaggregatesApi* | [**v2AggsGroupedLocaleUsMarketStocksDateGet**](docs/Api/StocksaggregatesApi.md#v2aggsgroupedlocaleusmarketstocksdateget) | **GET** /v2/aggs/grouped/locale/us/market/stocks/{date} | Grouped Daily (Bars)
*StocksaggregatesApi* | [**v2AggsTickerStocksTickerPrevGet**](docs/Api/StocksaggregatesApi.md#v2aggstickerstockstickerprevget) | **GET** /v2/aggs/ticker/{stocksTicker}/prev | Previous Close
*StocksaggregatesApi* | [**v2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet**](docs/Api/StocksaggregatesApi.md#v2aggstickerstockstickerrangemultipliertimespanfromtoget) | **GET** /v2/aggs/ticker/{stocksTicker}/range/{multiplier}/{timespan}/{from}/{to} | Aggregates (Bars)
*StockslastquoteApi* | [**lastQuote**](docs/Api/StockslastquoteApi.md#lastquote) | **GET** /v2/last/nbbo/{stocksTicker} | Last Quote
*StockslasttradeApi* | [**lastTrade**](docs/Api/StockslasttradeApi.md#lasttrade) | **GET** /v2/last/trade/{stocksTicker} | Last Trade
*StocksopenCloseApi* | [**v1OpenCloseIndicesTickerDateGet**](docs/Api/StocksopenCloseApi.md#v1opencloseindicestickerdateget) | **GET** /v1/open-close/{indicesTicker}/{date} | Daily Open/Close
*StocksopenCloseApi* | [**v1OpenCloseStocksTickerDateGet**](docs/Api/StocksopenCloseApi.md#v1openclosestockstickerdateget) | **GET** /v1/open-close/{stocksTicker}/{date} | Daily Open/Close
*StocksquotesApi* | [**quotes**](docs/Api/StocksquotesApi.md#quotes) | **GET** /v3/quotes/{stockTicker} | Quotes (NBBO)
*StocksquotesApi* | [**v2TicksStocksNbboTickerDateGet**](docs/Api/StocksquotesApi.md#v2ticksstocksnbbotickerdateget) | **GET** /v2/ticks/stocks/nbbo/{ticker}/{date} | Quotes (NBBO)
*StockssnapshotApi* | [**v2SnapshotLocaleUsMarketsStocksDirectionGet**](docs/Api/StockssnapshotApi.md#v2snapshotlocaleusmarketsstocksdirectionget) | **GET** /v2/snapshot/locale/us/markets/stocks/{direction} | Gainers/Losers
*StockssnapshotApi* | [**v2SnapshotLocaleUsMarketsStocksTickersGet**](docs/Api/StockssnapshotApi.md#v2snapshotlocaleusmarketsstockstickersget) | **GET** /v2/snapshot/locale/us/markets/stocks/tickers | All Tickers
*StockssnapshotApi* | [**v2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet**](docs/Api/StockssnapshotApi.md#v2snapshotlocaleusmarketsstockstickersstockstickerget) | **GET** /v2/snapshot/locale/us/markets/stocks/tickers/{stocksTicker} | Ticker
*StockstradesApi* | [**trades**](docs/Api/StockstradesApi.md#trades) | **GET** /v3/trades/{stockTicker} | Trades
*StockstradesApi* | [**v2TicksStocksTradesTickerDateGet**](docs/Api/StockstradesApi.md#v2ticksstockstradestickerdateget) | **GET** /v2/ticks/stocks/trades/{ticker}/{date} | Trades

## Contributing

If you found a bug or have an idea for a new feature, please first discuss it with us by [submitting a new issue](https://github.com/polygon-io/client-php/issues/new/choose). We are also open to volunteers willing to submit PRs for any open issues but please discuss it with us beforehand.

## Development

For developing new features or fixing bugs, you will need to manage dependencies using Composer.

```shell
composer install
```

To run tests, use:

```bash
vendor/bin/phpunit
```

This PHP client follows the same release cadence as our API, ensuring it remains compatible with new and deprecated features.
