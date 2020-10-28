# Swagger\Client\SubaccountippoolApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**iPPoolRouterCount**](SubaccountippoolApi.md#iPPoolRouterCount) | **GET** /subaccount/ippool/count | 
[**iPPoolRouterCreate**](SubaccountippoolApi.md#iPPoolRouterCreate) | **POST** /subaccount/ippool/ | 
[**iPPoolRouterDelete**](SubaccountippoolApi.md#iPPoolRouterDelete) | **DELETE** /subaccount/ippool/{ippoolid} | 
[**iPPoolRouterGet**](SubaccountippoolApi.md#iPPoolRouterGet) | **GET** /subaccount/ippool/{ippoolid} | 
[**iPPoolRouterGetAll**](SubaccountippoolApi.md#iPPoolRouterGetAll) | **GET** /subaccount/ippool/ | 
[**iPPoolRouterUpdate**](SubaccountippoolApi.md#iPPoolRouterUpdate) | **PUT** /subaccount/ippool/{ippoolid} | 


# **iPPoolRouterCount**
> \Swagger\Client\Model\ModelsCountStat iPPoolRouterCount($x_sub_account_api_key)



Count Total IPPools

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key

try {
    $result = $apiInstance->iPPoolRouterCount($x_sub_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountippoolApi->iPPoolRouterCount: ', $e->getMessage(), PHP_EOL;
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

# **iPPoolRouterCreate**
> \Swagger\Client\Model\ModelsIPPool iPPoolRouterCreate($x_sub_account_api_key, $body)



Create IPPool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$body = new \Swagger\Client\Model\ModelsEIPPool(); // \Swagger\Client\Model\ModelsEIPPool | The IPPool content

try {
    $result = $apiInstance->iPPoolRouterCreate($x_sub_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountippoolApi->iPPoolRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsEIPPool**](../Model/ModelsEIPPool.md)| The IPPool content |

### Return type

[**\Swagger\Client\Model\ModelsIPPool**](../Model/ModelsIPPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPPoolRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse iPPoolRouterDelete($x_sub_account_api_key, $ippoolid)



Delete IPPool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$ippoolid = 789; // int | The IPPoolId you want to delete

try {
    $result = $apiInstance->iPPoolRouterDelete($x_sub_account_api_key, $ippoolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountippoolApi->iPPoolRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **ippoolid** | **int**| The IPPoolId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPPoolRouterGet**
> \Swagger\Client\Model\ModelsIPPool iPPoolRouterGet($x_sub_account_api_key, $ippoolid)



Find IPPool by IPPoolId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$ippoolid = 789; // int | the IPPoolId you want to get

try {
    $result = $apiInstance->iPPoolRouterGet($x_sub_account_api_key, $ippoolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountippoolApi->iPPoolRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **ippoolid** | **int**| the IPPoolId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsIPPool**](../Model/ModelsIPPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPPoolRouterGetAll**
> \Swagger\Client\Model\ModelsIPPool[] iPPoolRouterGetAll($x_sub_account_api_key, $offset, $limit, $search)



Get All IPPools

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->iPPoolRouterGetAll($x_sub_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountippoolApi->iPPoolRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsIPPool[]**](../Model/ModelsIPPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPPoolRouterUpdate**
> \Swagger\Client\Model\ModelsIPPool iPPoolRouterUpdate($x_sub_account_api_key, $ippoolid, $body)



Update IPPool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$ippoolid = 789; // int | The IPPoolId you want to update
$body = new \Swagger\Client\Model\ModelsEIPPool(); // \Swagger\Client\Model\ModelsEIPPool | The body

try {
    $result = $apiInstance->iPPoolRouterUpdate($x_sub_account_api_key, $ippoolid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountippoolApi->iPPoolRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **ippoolid** | **int**| The IPPoolId you want to update |
 **body** | [**\Swagger\Client\Model\ModelsEIPPool**](../Model/ModelsEIPPool.md)| The body |

### Return type

[**\Swagger\Client\Model\ModelsIPPool**](../Model/ModelsIPPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

