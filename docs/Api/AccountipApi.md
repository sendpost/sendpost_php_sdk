# Swagger\Client\AccountipApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**iPRouterAllocateIP**](AccountipApi.md#iPRouterAllocateIP) | **POST** /account/ip/allocate | 
[**iPRouterCount**](AccountipApi.md#iPRouterCount) | **GET** /account/ip/count | 
[**iPRouterDelete**](AccountipApi.md#iPRouterDelete) | **DELETE** /account/ip/{ipid} | 
[**iPRouterGet**](AccountipApi.md#iPRouterGet) | **GET** /account/ip/{ipid} | 
[**iPRouterGetAll**](AccountipApi.md#iPRouterGetAll) | **GET** /account/ip/ | 
[**iPRouterUpdate**](AccountipApi.md#iPRouterUpdate) | **PUT** /account/ip/{ipid} | 


# **iPRouterAllocateIP**
> \Swagger\Client\Model\ModelsIP[] iPRouterAllocateIP($x_account_api_key)



Allocate IP To Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->iPRouterAllocateIP($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipApi->iPRouterAllocateIP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsIP[]**](../Model/ModelsIP.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPRouterCount**
> \Swagger\Client\Model\ModelsCountStat iPRouterCount($x_account_api_key, $search)



Count Total AccountIPs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->iPRouterCount($x_account_api_key, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipApi->iPRouterCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse iPRouterDelete($x_account_api_key, $ipid)



Delete IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | The IPId you want to delete

try {
    $result = $apiInstance->iPRouterDelete($x_account_api_key, $ipid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipApi->iPRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| The IPId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPRouterGet**
> \Swagger\Client\Model\ModelsIP iPRouterGet($x_account_api_key, $ipid)



Find IP by IPId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to get

try {
    $result = $apiInstance->iPRouterGet($x_account_api_key, $ipid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipApi->iPRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsIP**](../Model/ModelsIP.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPRouterGetAll**
> \Swagger\Client\Model\ModelsIP[] iPRouterGetAll($x_account_api_key, $offset, $limit, $search)



Get All IPs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->iPRouterGetAll($x_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipApi->iPRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsIP[]**](../Model/ModelsIP.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPRouterUpdate**
> \Swagger\Client\Model\ModelsIP iPRouterUpdate($x_account_api_key, $ipid, $body)



Update an IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | The IP you want to update
$body = new \Swagger\Client\Model\ModelsIIP(); // \Swagger\Client\Model\ModelsIIP | The IP Email Provider Settings

try {
    $result = $apiInstance->iPRouterUpdate($x_account_api_key, $ipid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipApi->iPRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| The IP you want to update |
 **body** | [**\Swagger\Client\Model\ModelsIIP**](../Model/ModelsIIP.md)| The IP Email Provider Settings |

### Return type

[**\Swagger\Client\Model\ModelsIP**](../Model/ModelsIP.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

