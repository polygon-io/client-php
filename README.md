# PolygonClient

The future of fintech.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
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

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('apiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apiKey', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CrpytoaggregatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$crypto_ticker = X:BTCUSD; // string | The ticker symbol for which to get exponential moving average (EMA) data.
$timestamp = 'timestamp_example'; // string | Query by timestamp. Either a date with the format YYYY-MM-DD or a millisecond timestamp.
$timespan = day; // string | The size of the aggregate time window.
$window = 50; // int | The window size used to calculate the exponential moving average (EMA). i.e. a window size of 10 with daily aggregates would result in a 10 day moving average.
$series_type = close; // string | The price in the aggregate which will be used to calculate the exponential moving average. i.e. 'close' will result in using close prices to  calculate the exponential moving average (EMA).
$expand_underlying = false; // bool | Whether or not to include the aggregates used to calculate this indicator in the response.
$order = desc; // string | The order in which to return the results, ordered by timestamp.
$limit = 10; // int | Limit the number of results returned, default is 10 and max is 5000
$timestamp_gte = 'timestamp_gte_example'; // string | Range by timestamp.
$timestamp_gt = 'timestamp_gt_example'; // string | Range by timestamp.
$timestamp_lte = 'timestamp_lte_example'; // string | Range by timestamp.
$timestamp_lt = 'timestamp_lt_example'; // string | Range by timestamp.

try {
    $result = $apiInstance->cryptoEMA($crypto_ticker, $timestamp, $timespan, $window, $series_type, $expand_underlying, $order, $limit, $timestamp_gte, $timestamp_gt, $timestamp_lte, $timestamp_lt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrpytoaggregatesApi->cryptoEMA: ', $e->getMessage(), PHP_EOL;
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

## Models

- [AskExchangeId](docs/Model/AskExchangeId.md)
- [BidExchangeId](docs/Model/BidExchangeId.md)
- [Company](docs/Model/Company.md)
- [ConditionTypeMap](docs/Model/ConditionTypeMap.md)
- [CryptoEMA200Response](docs/Model/CryptoEMA200Response.md)
- [CryptoEMA200ResponseResults](docs/Model/CryptoEMA200ResponseResults.md)
- [CryptoEMA200ResponseResultsUnderlying](docs/Model/CryptoEMA200ResponseResultsUnderlying.md)
- [CryptoEMA200ResponseResultsUnderlyingAggregatesInner](docs/Model/CryptoEMA200ResponseResultsUnderlyingAggregatesInner.md)
- [CryptoEMA200ResponseResultsValuesInner](docs/Model/CryptoEMA200ResponseResultsValuesInner.md)
- [CryptoExchangeInner](docs/Model/CryptoExchangeInner.md)
- [CryptoGroupedResults](docs/Model/CryptoGroupedResults.md)
- [CryptoHistoricTrades](docs/Model/CryptoHistoricTrades.md)
- [CryptoLastTrade](docs/Model/CryptoLastTrade.md)
- [CryptoLastTradeLast](docs/Model/CryptoLastTradeLast.md)
- [CryptoMACD200Response](docs/Model/CryptoMACD200Response.md)
- [CryptoMACD200ResponseResults](docs/Model/CryptoMACD200ResponseResults.md)
- [CryptoMACD200ResponseResultsValuesInner](docs/Model/CryptoMACD200ResponseResultsValuesInner.md)
- [CryptoOpenClose](docs/Model/CryptoOpenClose.md)
- [CryptoRSI200Response](docs/Model/CryptoRSI200Response.md)
- [CryptoRSI200ResponseResults](docs/Model/CryptoRSI200ResponseResults.md)
- [CryptoSMA200Response](docs/Model/CryptoSMA200Response.md)
- [CryptoSMA200ResponseResults](docs/Model/CryptoSMA200ResponseResults.md)
- [CryptoSnapshotMinute](docs/Model/CryptoSnapshotMinute.md)
- [CryptoSnapshotTicker](docs/Model/CryptoSnapshotTicker.md)
- [CryptoSnapshotTickerFullBook](docs/Model/CryptoSnapshotTickerFullBook.md)
- [CryptoSnapshotTickers](docs/Model/CryptoSnapshotTickers.md)
- [CryptoTick](docs/Model/CryptoTick.md)
- [Date](docs/Model/Date.md)
- [ExchangeInner](docs/Model/ExchangeInner.md)
- [Financial](docs/Model/Financial.md)
- [Financials](docs/Model/Financials.md)
- [ForexConversion](docs/Model/ForexConversion.md)
- [ForexConversionLast](docs/Model/ForexConversionLast.md)
- [ForexGroupedResults](docs/Model/ForexGroupedResults.md)
- [ForexHistoricTrades](docs/Model/ForexHistoricTrades.md)
- [ForexPairLastQuote](docs/Model/ForexPairLastQuote.md)
- [ForexPreviousClose](docs/Model/ForexPreviousClose.md)
- [ForexSnapshotLastQuote](docs/Model/ForexSnapshotLastQuote.md)
- [ForexSnapshotPrevDay](docs/Model/ForexSnapshotPrevDay.md)
- [ForexSnapshotTicker](docs/Model/ForexSnapshotTicker.md)
- [ForexSnapshotTickers](docs/Model/ForexSnapshotTickers.md)
- [ForexTickerResults](docs/Model/ForexTickerResults.md)
- [GetEvents200Response](docs/Model/GetEvents200Response.md)
- [GetEvents200ResponseResults](docs/Model/GetEvents200ResponseResults.md)
- [GetEvents200ResponseResultsEventsInner](docs/Model/GetEvents200ResponseResultsEventsInner.md)
- [GetEvents200ResponseResultsEventsInnerOneOf](docs/Model/GetEvents200ResponseResultsEventsInnerOneOf.md)
- [GetEvents200ResponseResultsEventsInnerOneOfTickerChange](docs/Model/GetEvents200ResponseResultsEventsInnerOneOfTickerChange.md)
- [GetMarketHolidays200ResponseInner](docs/Model/GetMarketHolidays200ResponseInner.md)
- [GetMarketStatus200Response](docs/Model/GetMarketStatus200Response.md)
- [GetMarketStatus200ResponseCurrencies](docs/Model/GetMarketStatus200ResponseCurrencies.md)
- [GetMarketStatus200ResponseExchanges](docs/Model/GetMarketStatus200ResponseExchanges.md)
- [GetMarketStatus200ResponseIndicesGroups](docs/Model/GetMarketStatus200ResponseIndicesGroups.md)
- [GetOptionsContract200Response](docs/Model/GetOptionsContract200Response.md)
- [GetTicker200Response](docs/Model/GetTicker200Response.md)
- [GetTicker200ResponseResults](docs/Model/GetTicker200ResponseResults.md)
- [GetTicker200ResponseResultsAddress](docs/Model/GetTicker200ResponseResultsAddress.md)
- [GetTicker200ResponseResultsBranding](docs/Model/GetTicker200ResponseResultsBranding.md)
- [IndexAggsBase](docs/Model/IndexAggsBase.md)
- [IndicesGroupedResults](docs/Model/IndicesGroupedResults.md)
- [IndicesOpenClose](docs/Model/IndicesOpenClose.md)
- [IndicesSnapshot200Response](docs/Model/IndicesSnapshot200Response.md)
- [IndicesSnapshot200ResponseResultsInner](docs/Model/IndicesSnapshot200ResponseResultsInner.md)
- [IndicesSnapshot200ResponseResultsInnerSession](docs/Model/IndicesSnapshot200ResponseResultsInnerSession.md)
- [IndicesTickerResults](docs/Model/IndicesTickerResults.md)
- [IndicesTickerResultsResultsInner](docs/Model/IndicesTickerResultsResultsInner.md)
- [LastQuote200Response](docs/Model/LastQuote200Response.md)
- [LastQuote200ResponseResults](docs/Model/LastQuote200ResponseResults.md)
- [LastQuoteCurrencies200Response](docs/Model/LastQuoteCurrencies200Response.md)
- [LastTradeCrypto200Response](docs/Model/LastTradeCrypto200Response.md)
- [LastTradeCrypto200ResponseLast](docs/Model/LastTradeCrypto200ResponseLast.md)
- [LastTradeOptions200Response](docs/Model/LastTradeOptions200Response.md)
- [LastTradeOptions200ResponseResults](docs/Model/LastTradeOptions200ResponseResults.md)
- [ListConditions200Response](docs/Model/ListConditions200Response.md)
- [ListConditions200ResponseResultsInner](docs/Model/ListConditions200ResponseResultsInner.md)
- [ListConditions200ResponseResultsInnerSipMapping](docs/Model/ListConditions200ResponseResultsInnerSipMapping.md)
- [ListConditions200ResponseResultsInnerUpdateRules](docs/Model/ListConditions200ResponseResultsInnerUpdateRules.md)
- [ListConditions200ResponseResultsInnerUpdateRulesConsolidated](docs/Model/ListConditions200ResponseResultsInnerUpdateRulesConsolidated.md)
- [ListConditions200ResponseResultsInnerUpdateRulesMarketCenter](docs/Model/ListConditions200ResponseResultsInnerUpdateRulesMarketCenter.md)
- [ListConditions400Response](docs/Model/ListConditions400Response.md)
- [ListDividends200Response](docs/Model/ListDividends200Response.md)
- [ListDividends200ResponseResultsInner](docs/Model/ListDividends200ResponseResultsInner.md)
- [ListExchanges200Response](docs/Model/ListExchanges200Response.md)
- [ListExchanges200ResponseResultsInner](docs/Model/ListExchanges200ResponseResultsInner.md)
- [ListExchanges400Response](docs/Model/ListExchanges400Response.md)
- [ListFilingFiles200Response](docs/Model/ListFilingFiles200Response.md)
- [ListFilingFiles200ResponseResultsInner](docs/Model/ListFilingFiles200ResponseResultsInner.md)
- [ListFilings200Response](docs/Model/ListFilings200Response.md)
- [ListFilings200ResponseResultsInner](docs/Model/ListFilings200ResponseResultsInner.md)
- [ListFilings200ResponseResultsInnerEntitiesInner](docs/Model/ListFilings200ResponseResultsInnerEntitiesInner.md)
- [ListFilings200ResponseResultsInnerEntitiesInnerCompanyData](docs/Model/ListFilings200ResponseResultsInnerEntitiesInnerCompanyData.md)
- [ListFinancials200Response](docs/Model/ListFinancials200Response.md)
- [ListFinancials200ResponseResultsInner](docs/Model/ListFinancials200ResponseResultsInner.md)
- [ListFinancials200ResponseResultsInnerFinancials](docs/Model/ListFinancials200ResponseResultsInnerFinancials.md)
- [ListFinancials200ResponseResultsInnerFinancialsBalanceSheet](docs/Model/ListFinancials200ResponseResultsInnerFinancialsBalanceSheet.md)
- [ListNews200Response](docs/Model/ListNews200Response.md)
- [ListNews200ResponseResultsInner](docs/Model/ListNews200ResponseResultsInner.md)
- [ListNews200ResponseResultsInnerPublisher](docs/Model/ListNews200ResponseResultsInnerPublisher.md)
- [ListNewsPublishedUtcParameter](docs/Model/ListNewsPublishedUtcParameter.md)
- [ListOptionsContracts200Response](docs/Model/ListOptionsContracts200Response.md)
- [ListOptionsContracts200ResponseResultsInner](docs/Model/ListOptionsContracts200ResponseResultsInner.md)
- [ListOptionsContracts200ResponseResultsInnerAdditionalUnderlyingsInner](docs/Model/ListOptionsContracts200ResponseResultsInnerAdditionalUnderlyingsInner.md)
- [ListStockSplits200Response](docs/Model/ListStockSplits200Response.md)
- [ListStockSplits200ResponseResultsInner](docs/Model/ListStockSplits200ResponseResultsInner.md)
- [ListTickerTaxonomyClassifications200Response](docs/Model/ListTickerTaxonomyClassifications200Response.md)
- [ListTickerTaxonomyClassifications200ResponseResultsInner](docs/Model/ListTickerTaxonomyClassifications200ResponseResultsInner.md)
- [ListTickerTypes200Response](docs/Model/ListTickerTypes200Response.md)
- [ListTickerTypes200ResponseResultsInner](docs/Model/ListTickerTypes200ResponseResultsInner.md)
- [ListTickers200Response](docs/Model/ListTickers200Response.md)
- [ListTickers200ResponseResultsInner](docs/Model/ListTickers200ResponseResultsInner.md)
- [Locales](docs/Model/Locales.md)
- [LocalesResultsInner](docs/Model/LocalesResultsInner.md)
- [Map](docs/Model/Map.md)
- [MapKey](docs/Model/MapKey.md)
- [MarketHolidayInner](docs/Model/MarketHolidayInner.md)
- [MarketStatus](docs/Model/MarketStatus.md)
- [MarketStatusCurrencies](docs/Model/MarketStatusCurrencies.md)
- [MarketStatusExchanges](docs/Model/MarketStatusExchanges.md)
- [Markets](docs/Model/Markets.md)
- [MarketsResultsInner](docs/Model/MarketsResultsInner.md)
- [NewsInner](docs/Model/NewsInner.md)
- [OptionContract200Response](docs/Model/OptionContract200Response.md)
- [OptionsChain200Response](docs/Model/OptionsChain200Response.md)
- [OptionsChain200ResponseResultsInner](docs/Model/OptionsChain200ResponseResultsInner.md)
- [OptionsChain200ResponseResultsInnerDay](docs/Model/OptionsChain200ResponseResultsInnerDay.md)
- [OptionsChain200ResponseResultsInnerDetails](docs/Model/OptionsChain200ResponseResultsInnerDetails.md)
- [OptionsChain200ResponseResultsInnerLastQuote](docs/Model/OptionsChain200ResponseResultsInnerLastQuote.md)
- [OptionsChain200ResponseResultsInnerLastTrade](docs/Model/OptionsChain200ResponseResultsInnerLastTrade.md)
- [PaginationHooksBase](docs/Model/PaginationHooksBase.md)
- [Quotes200Response](docs/Model/Quotes200Response.md)
- [Quotes200ResponseResultsInner](docs/Model/Quotes200ResponseResultsInner.md)
- [QuotesFx200Response](docs/Model/QuotesFx200Response.md)
- [QuotesFx200ResponseResultsInner](docs/Model/QuotesFx200ResponseResultsInner.md)
- [QuotesOptions200Response](docs/Model/QuotesOptions200Response.md)
- [QuotesOptions200ResponseResultsInner](docs/Model/QuotesOptions200ResponseResultsInner.md)
- [RatingSection](docs/Model/RatingSection.md)
- [RealTimeCurrencyConversion200Response](docs/Model/RealTimeCurrencyConversion200Response.md)
- [RealTimeCurrencyConversion200ResponseLast](docs/Model/RealTimeCurrencyConversion200ResponseLast.md)
- [RequestIdBase](docs/Model/RequestIdBase.md)
- [SnapshotMinOHLCV](docs/Model/SnapshotMinOHLCV.md)
- [SnapshotOHLCV](docs/Model/SnapshotOHLCV.md)
- [SnapshotOHLCVVW](docs/Model/SnapshotOHLCVVW.md)
- [SnapshotOHLCVVWOtc](docs/Model/SnapshotOHLCVVWOtc.md)
- [SnapshotSummary200Response](docs/Model/SnapshotSummary200Response.md)
- [SnapshotSummary200ResponseResultsInner](docs/Model/SnapshotSummary200ResponseResultsInner.md)
- [SnapshotSummary200ResponseResultsInnerBranding](docs/Model/SnapshotSummary200ResponseResultsInnerBranding.md)
- [SnapshotSummary200ResponseResultsInnerOptions](docs/Model/SnapshotSummary200ResponseResultsInnerOptions.md)
- [SnapshotSummary200ResponseResultsInnerSession](docs/Model/SnapshotSummary200ResponseResultsInnerSession.md)
- [Snapshots200Response](docs/Model/Snapshots200Response.md)
- [Snapshots200ResponseResultsInner](docs/Model/Snapshots200ResponseResultsInner.md)
- [Snapshots200ResponseResultsInnerDetails](docs/Model/Snapshots200ResponseResultsInnerDetails.md)
- [Snapshots200ResponseResultsInnerGreeks](docs/Model/Snapshots200ResponseResultsInnerGreeks.md)
- [Snapshots200ResponseResultsInnerLastQuote](docs/Model/Snapshots200ResponseResultsInnerLastQuote.md)
- [Snapshots200ResponseResultsInnerLastTrade](docs/Model/Snapshots200ResponseResultsInnerLastTrade.md)
- [Snapshots200ResponseResultsInnerUnderlyingAsset](docs/Model/Snapshots200ResponseResultsInnerUnderlyingAsset.md)
- [StandardBase](docs/Model/StandardBase.md)
- [StatusBase](docs/Model/StatusBase.md)
- [StatusCountBase](docs/Model/StatusCountBase.md)
- [StocksGroupedResults](docs/Model/StocksGroupedResults.md)
- [StocksOpenClose](docs/Model/StocksOpenClose.md)
- [StocksSnapshotLastQuote](docs/Model/StocksSnapshotLastQuote.md)
- [StocksSnapshotMinute](docs/Model/StocksSnapshotMinute.md)
- [StocksSnapshotMinuteOTC](docs/Model/StocksSnapshotMinuteOTC.md)
- [StocksSnapshotTicker](docs/Model/StocksSnapshotTicker.md)
- [StocksSnapshotTickers](docs/Model/StocksSnapshotTickers.md)
- [StocksTickerResultsOTC](docs/Model/StocksTickerResultsOTC.md)
- [StocksV2Base](docs/Model/StocksV2Base.md)
- [StocksV2NBBO](docs/Model/StocksV2NBBO.md)
- [StocksV2NBBOAllOfX](docs/Model/StocksV2NBBOAllOfX.md)
- [StocksV2NBBOs](docs/Model/StocksV2NBBOs.md)
- [StocksV2Trade](docs/Model/StocksV2Trade.md)
- [StocksV2Trades](docs/Model/StocksV2Trades.md)
- [TickerBase](docs/Model/TickerBase.md)
- [TickerResults](docs/Model/TickerResults.md)
- [TradeDetailsMapItem](docs/Model/TradeDetailsMapItem.md)
- [Trades200Response](docs/Model/Trades200Response.md)
- [Trades200ResponseResultsInner](docs/Model/Trades200ResponseResultsInner.md)
- [TradesCrypto200Response](docs/Model/TradesCrypto200Response.md)
- [TradesCrypto200ResponseResultsInner](docs/Model/TradesCrypto200ResponseResultsInner.md)
- [TradesOptions200Response](docs/Model/TradesOptions200Response.md)
- [TradesOptions200ResponseResultsInner](docs/Model/TradesOptions200ResponseResultsInner.md)
- [V1HistoricCryptoFromToDateGet200Response](docs/Model/V1HistoricCryptoFromToDateGet200Response.md)
- [V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner](docs/Model/V1HistoricCryptoFromToDateGet200ResponseAllOfTicksInner.md)
- [V1HistoricForexFromToDateGet200Response](docs/Model/V1HistoricForexFromToDateGet200Response.md)
- [V1HistoricForexFromToDateGet200ResponseAllOfTicksInner](docs/Model/V1HistoricForexFromToDateGet200ResponseAllOfTicksInner.md)
- [V1LastBase](docs/Model/V1LastBase.md)
- [V1OpenCloseCryptoFromToDateGet200Response](docs/Model/V1OpenCloseCryptoFromToDateGet200Response.md)
- [V1OpenCloseIndicesTickerDateGet200Response](docs/Model/V1OpenCloseIndicesTickerDateGet200Response.md)
- [V1OpenCloseOptionsTickerDateGet200Response](docs/Model/V1OpenCloseOptionsTickerDateGet200Response.md)
- [V2AggsBase](docs/Model/V2AggsBase.md)
- [V2AggsGroupedLocaleGlobalMarketCryptoDateGet200Response](docs/Model/V2AggsGroupedLocaleGlobalMarketCryptoDateGet200Response.md)
- [V2AggsGroupedLocaleGlobalMarketCryptoDateGet200ResponseAllOfResultsInner](docs/Model/V2AggsGroupedLocaleGlobalMarketCryptoDateGet200ResponseAllOfResultsInner.md)
- [V2AggsGroupedLocaleUsMarketStocksDateGet200Response](docs/Model/V2AggsGroupedLocaleUsMarketStocksDateGet200Response.md)
- [V2AggsGroupedLocaleUsMarketStocksDateGet200ResponseAllOfResultsInner](docs/Model/V2AggsGroupedLocaleUsMarketStocksDateGet200ResponseAllOfResultsInner.md)
- [V2AggsTickerCryptoTickerPrevGet200Response](docs/Model/V2AggsTickerCryptoTickerPrevGet200Response.md)
- [V2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet200Response](docs/Model/V2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet200Response.md)
- [V2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet200ResponseAllOfResultsInner](docs/Model/V2AggsTickerCryptoTickerRangeMultiplierTimespanFromToGet200ResponseAllOfResultsInner.md)
- [V2AggsTickerIndicesTickerPrevGet200Response](docs/Model/V2AggsTickerIndicesTickerPrevGet200Response.md)
- [V2AggsTickerIndicesTickerPrevGet200ResponseAllOfResultsInner](docs/Model/V2AggsTickerIndicesTickerPrevGet200ResponseAllOfResultsInner.md)
- [V2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet200Response](docs/Model/V2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet200Response.md)
- [V2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet200ResponseAllOfResultsInner](docs/Model/V2AggsTickerStocksTickerRangeMultiplierTimespanFromToGet200ResponseAllOfResultsInner.md)
- [V2LastBase](docs/Model/V2LastBase.md)
- [V2SnapshotLocaleGlobalMarketsCryptoDirectionGet200Response](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoDirectionGet200Response.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersGet200Response](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersGet200Response.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInner](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInner.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerDay](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerDay.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerLastTrade](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerLastTrade.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerMin](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerMin.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerPrevDay](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersGet200ResponseAllOfTickersInnerPrevDay.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200Response](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200Response.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200ResponseAllOfData](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200ResponseAllOfData.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200ResponseAllOfDataAsksInner](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersTickerBookGet200ResponseAllOfDataAsksInner.md)
- [V2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet200Response](docs/Model/V2SnapshotLocaleGlobalMarketsCryptoTickersTickerGet200Response.md)
- [V2SnapshotLocaleGlobalMarketsForexTickersGet200Response](docs/Model/V2SnapshotLocaleGlobalMarketsForexTickersGet200Response.md)
- [V2SnapshotLocaleGlobalMarketsForexTickersGet200ResponseAllOfTickersInner](docs/Model/V2SnapshotLocaleGlobalMarketsForexTickersGet200ResponseAllOfTickersInner.md)
- [V2SnapshotLocaleGlobalMarketsForexTickersGet200ResponseAllOfTickersInnerDay](docs/Model/V2SnapshotLocaleGlobalMarketsForexTickersGet200ResponseAllOfTickersInnerDay.md)
- [V2SnapshotLocaleGlobalMarketsForexTickersGet200ResponseAllOfTickersInnerLastQuote](docs/Model/V2SnapshotLocaleGlobalMarketsForexTickersGet200ResponseAllOfTickersInnerLastQuote.md)
- [V2SnapshotLocaleGlobalMarketsForexTickersGet200ResponseAllOfTickersInnerMin](docs/Model/V2SnapshotLocaleGlobalMarketsForexTickersGet200ResponseAllOfTickersInnerMin.md)
- [V2SnapshotLocaleGlobalMarketsForexTickersTickerGet200Response](docs/Model/V2SnapshotLocaleGlobalMarketsForexTickersTickerGet200Response.md)
- [V2SnapshotLocaleUsMarketsStocksDirectionGet200Response](docs/Model/V2SnapshotLocaleUsMarketsStocksDirectionGet200Response.md)
- [V2SnapshotLocaleUsMarketsStocksTickersGet200Response](docs/Model/V2SnapshotLocaleUsMarketsStocksTickersGet200Response.md)
- [V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInner](docs/Model/V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInner.md)
- [V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerDay](docs/Model/V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerDay.md)
- [V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerLastQuote](docs/Model/V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerLastQuote.md)
- [V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerLastTrade](docs/Model/V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerLastTrade.md)
- [V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerMin](docs/Model/V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerMin.md)
- [V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerPrevDay](docs/Model/V2SnapshotLocaleUsMarketsStocksTickersGet200ResponseAllOfTickersInnerPrevDay.md)
- [V2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet200Response](docs/Model/V2SnapshotLocaleUsMarketsStocksTickersStocksTickerGet200Response.md)
- [V2TicksBase](docs/Model/V2TicksBase.md)
- [V2TicksStocksNbboTickerDateGet200Response](docs/Model/V2TicksStocksNbboTickerDateGet200Response.md)
- [V2TicksStocksNbboTickerDateGet200ResponseAllOfResultsInner](docs/Model/V2TicksStocksNbboTickerDateGet200ResponseAllOfResultsInner.md)
- [V2TicksStocksNbboTickerDateGet200ResponseAllOfResultsInnerAllOfX](docs/Model/V2TicksStocksNbboTickerDateGet200ResponseAllOfResultsInnerAllOfX.md)
- [V2TicksStocksTradesTickerDateGet200Response](docs/Model/V2TicksStocksTradesTickerDateGet200Response.md)
- [V2TicksStocksTradesTickerDateGet200ResponseAllOfResultsInner](docs/Model/V2TicksStocksTradesTickerDateGet200ResponseAllOfResultsInner.md)

## Authorization

Authentication schemes defined for the API:
### apiKey

- **Type**: API key
- **API key parameter name**: apiKey
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
