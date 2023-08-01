# sendpost\SuppressionApi

All URIs are relative to https://api.sendpost.io/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**count()**](SuppressionApi.md#count) | **GET** /subaccount/suppression/count |  |
| [**createSuppressions()**](SuppressionApi.md#createSuppressions) | **POST** /subaccount/suppression/ |  |
| [**deleteSuppression()**](SuppressionApi.md#deleteSuppression) | **DELETE** /subaccount/suppression/ |  |
| [**getSuppressions()**](SuppressionApi.md#getSuppressions) | **GET** /subaccount/suppression/ |  |


## `count()`

```php
count($x_sub_account_api_key, $from, $to): \sendpost\model\CountStat
```



Count Total Suppressions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new sendpost\Api\SuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = 'x_sub_account_api_key_example'; // string | Sub-Account API Key
$from = 'from_example'; // string | from date
$to = 'to_example'; // string | to date

try {
    $result = $apiInstance->count($x_sub_account_api_key, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressionApi->count: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_sub_account_api_key** | **string**| Sub-Account API Key | |
| **from** | **string**| from date | [optional] |
| **to** | **string**| to date | [optional] |

### Return type

[**\sendpost\model\CountStat**](../Model/CountStat.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSuppressions()`

```php
createSuppressions($x_sub_account_api_key, $r_suppression): \sendpost\model\Suppression
```



Add Email Addresses To Suppression List

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new sendpost\Api\SuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = 'x_sub_account_api_key_example'; // string | Sub-Account API Key
$r_suppression = new \sendpost\model\RSuppression(); // \sendpost\model\RSuppression | Suppression content

try {
    $result = $apiInstance->createSuppressions($x_sub_account_api_key, $r_suppression);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressionApi->createSuppressions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_sub_account_api_key** | **string**| Sub-Account API Key | |
| **r_suppression** | [**\sendpost\model\RSuppression**](../Model/RSuppression.md)| Suppression content | [optional] |

### Return type

[**\sendpost\model\Suppression**](../Model/Suppression.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSuppression()`

```php
deleteSuppression($x_sub_account_api_key, $rd_suppression): \sendpost\model\Suppression
```



Delete specific emails which are in suppression list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new sendpost\Api\SuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = 'x_sub_account_api_key_example'; // string | Sub-Account API Key
$rd_suppression = new \sendpost\model\RDSuppression(); // \sendpost\model\RDSuppression | Suppression content

try {
    $result = $apiInstance->deleteSuppression($x_sub_account_api_key, $rd_suppression);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressionApi->deleteSuppression: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_sub_account_api_key** | **string**| Sub-Account API Key | |
| **rd_suppression** | [**\sendpost\model\RDSuppression**](../Model/RDSuppression.md)| Suppression content | [optional] |

### Return type

[**\sendpost\model\Suppression**](../Model/Suppression.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSuppressions()`

```php
getSuppressions($x_sub_account_api_key, $offset, $limit, $search, $from, $to): \sendpost\model\Suppression[]
```



Get all suppressions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new sendpost\Api\SuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = 'x_sub_account_api_key_example'; // string | Sub-Account API Key
$offset = 56; // int | offset
$limit = 56; // int | limit
$search = 'search_example'; // string | search
$from = 'from_example'; // string | from date
$to = 'to_example'; // string | to date

try {
    $result = $apiInstance->getSuppressions($x_sub_account_api_key, $offset, $limit, $search, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppressionApi->getSuppressions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_sub_account_api_key** | **string**| Sub-Account API Key | |
| **offset** | **int**| offset | [optional] |
| **limit** | **int**| limit | [optional] |
| **search** | **string**| search | [optional] |
| **from** | **string**| from date | [optional] |
| **to** | **string**| to date | [optional] |

### Return type

[**\sendpost\model\Suppression[]**](../Model/Suppression.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
