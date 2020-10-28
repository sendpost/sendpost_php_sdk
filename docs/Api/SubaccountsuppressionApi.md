# Swagger\Client\SubaccountsuppressionApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**suppressionRouterCount**](SubaccountsuppressionApi.md#suppressionRouterCount) | **GET** /subaccount/suppression/count | 
[**suppressionRouterCreateSuppressions**](SubaccountsuppressionApi.md#suppressionRouterCreateSuppressions) | **POST** /subaccount/suppression/ | 
[**suppressionRouterCreateSuppressionsInSuppressionFilter**](SubaccountsuppressionApi.md#suppressionRouterCreateSuppressionsInSuppressionFilter) | **POST** /subaccount/suppression/filter | 
[**suppressionRouterDeleteSuppression**](SubaccountsuppressionApi.md#suppressionRouterDeleteSuppression) | **DELETE** /subaccount/suppression/ | 
[**suppressionRouterDeleteSuppressionsInSuppressionFilter**](SubaccountsuppressionApi.md#suppressionRouterDeleteSuppressionsInSuppressionFilter) | **DELETE** /subaccount/suppression/filter | 
[**suppressionRouterGetAllSuppressions**](SubaccountsuppressionApi.md#suppressionRouterGetAllSuppressions) | **GET** /subaccount/suppression/ | 


# **suppressionRouterCount**
> \Swagger\Client\Model\ModelsCountStat suppressionRouterCount($x_sub_account_api_key)



Count Total Suppressions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key

try {
    $result = $apiInstance->suppressionRouterCount($x_sub_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsuppressionApi->suppressionRouterCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppressionRouterCreateSuppressions**
> \Swagger\Client\Model\ModelsSuppression suppressionRouterCreateSuppressions($x_sub_account_api_key, $body)



Add Email Addresses To Suppression List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$body = new \Swagger\Client\Model\ModelsRSuppression(); // \Swagger\Client\Model\ModelsRSuppression | Suppression content

try {
    $result = $apiInstance->suppressionRouterCreateSuppressions($x_sub_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsuppressionApi->suppressionRouterCreateSuppressions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsRSuppression**](../Model/ModelsRSuppression.md)| Suppression content |

### Return type

[**\Swagger\Client\Model\ModelsSuppression**](../Model/ModelsSuppression.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppressionRouterCreateSuppressionsInSuppressionFilter**
> suppressionRouterCreateSuppressionsInSuppressionFilter($body)



Add Email Addresses To Suppression Filter

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ModelsSuppression(); // \Swagger\Client\Model\ModelsSuppression | Add suppressions to suppression filter

try {
    $apiInstance->suppressionRouterCreateSuppressionsInSuppressionFilter($body);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsuppressionApi->suppressionRouterCreateSuppressionsInSuppressionFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ModelsSuppression**](../Model/ModelsSuppression.md)| Add suppressions to suppression filter |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppressionRouterDeleteSuppression**
> \Swagger\Client\Model\ModelsSuppression suppressionRouterDeleteSuppression($x_sub_account_api_key, $body)



Delete specific emails which are in suppression list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$body = new \Swagger\Client\Model\ModelsRDSuppression(); // \Swagger\Client\Model\ModelsRDSuppression | Suppression content

try {
    $result = $apiInstance->suppressionRouterDeleteSuppression($x_sub_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsuppressionApi->suppressionRouterDeleteSuppression: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsRDSuppression**](../Model/ModelsRDSuppression.md)| Suppression content |

### Return type

[**\Swagger\Client\Model\ModelsSuppression**](../Model/ModelsSuppression.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppressionRouterDeleteSuppressionsInSuppressionFilter**
> suppressionRouterDeleteSuppressionsInSuppressionFilter($body)



Delete specific emails which are in suppression list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ModelsSuppression(); // \Swagger\Client\Model\ModelsSuppression | Suppression content

try {
    $apiInstance->suppressionRouterDeleteSuppressionsInSuppressionFilter($body);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsuppressionApi->suppressionRouterDeleteSuppressionsInSuppressionFilter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ModelsSuppression**](../Model/ModelsSuppression.md)| Suppression content |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **suppressionRouterGetAllSuppressions**
> \Swagger\Client\Model\ModelsSuppression[] suppressionRouterGetAllSuppressions($x_sub_account_api_key, $offset, $limit, $search)



Get all suppressions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsuppressionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search

try {
    $result = $apiInstance->suppressionRouterGetAllSuppressions($x_sub_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsuppressionApi->suppressionRouterGetAllSuppressions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **search** | **string**| search | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSuppression[]**](../Model/ModelsSuppression.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

