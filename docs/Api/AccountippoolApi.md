# Swagger\Client\AccountippoolApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIPPoolRouterCount**](AccountippoolApi.md#accountIPPoolRouterCount) | **GET** /account/ippool/count | 
[**accountIPPoolRouterCreate**](AccountippoolApi.md#accountIPPoolRouterCreate) | **POST** /account/ippool/ | 
[**accountIPPoolRouterDelete**](AccountippoolApi.md#accountIPPoolRouterDelete) | **DELETE** /account/ippool/{ippoolid} | 
[**accountIPPoolRouterGet**](AccountippoolApi.md#accountIPPoolRouterGet) | **GET** /account/ippool/{ippoolid} | 
[**accountIPPoolRouterGetAll**](AccountippoolApi.md#accountIPPoolRouterGetAll) | **GET** /account/ippool/ | 
[**accountIPPoolRouterUpdate**](AccountippoolApi.md#accountIPPoolRouterUpdate) | **PUT** /account/ippool/{ippoolid} | 


# **accountIPPoolRouterCount**
> \Swagger\Client\Model\ModelsCountStat accountIPPoolRouterCount($x_account_api_key)



Count Total AccountIPPools

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->accountIPPoolRouterCount($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountippoolApi->accountIPPoolRouterCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIPPoolRouterCreate**
> \Swagger\Client\Model\ModelsAccountIPPool accountIPPoolRouterCreate($x_account_api_key, $body)



Create AccountIPPool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsEIPPool(); // \Swagger\Client\Model\ModelsEIPPool | The AccountIPPool content

try {
    $result = $apiInstance->accountIPPoolRouterCreate($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountippoolApi->accountIPPoolRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsEIPPool**](../Model/ModelsEIPPool.md)| The AccountIPPool content |

### Return type

[**\Swagger\Client\Model\ModelsAccountIPPool**](../Model/ModelsAccountIPPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIPPoolRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse accountIPPoolRouterDelete($x_account_api_key, $ippoolid)



Delete AccountIPPool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ippoolid = 789; // int | The AccountIPPoolId you want to delete

try {
    $result = $apiInstance->accountIPPoolRouterDelete($x_account_api_key, $ippoolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountippoolApi->accountIPPoolRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ippoolid** | **int**| The AccountIPPoolId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIPPoolRouterGet**
> \Swagger\Client\Model\ModelsAccountIPPool accountIPPoolRouterGet($x_account_api_key, $ippoolid)



Find AccountIPPool by AccountIPPoolId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ippoolid = 789; // int | the AccountIPPoolId you want to get

try {
    $result = $apiInstance->accountIPPoolRouterGet($x_account_api_key, $ippoolid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountippoolApi->accountIPPoolRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ippoolid** | **int**| the AccountIPPoolId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsAccountIPPool**](../Model/ModelsAccountIPPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIPPoolRouterGetAll**
> \Swagger\Client\Model\ModelsAccountIPPool[] accountIPPoolRouterGetAll($x_account_api_key, $offset, $limit, $search)



Get All AccountIPPools

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->accountIPPoolRouterGetAll($x_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountippoolApi->accountIPPoolRouterGetAll: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ModelsAccountIPPool[]**](../Model/ModelsAccountIPPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIPPoolRouterUpdate**
> \Swagger\Client\Model\ModelsAccountIPPool accountIPPoolRouterUpdate($x_account_api_key, $ippoolid, $body)



Update AccountIPPool

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountippoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ippoolid = 789; // int | The AccountIPPoolId you want to update
$body = new \Swagger\Client\Model\ModelsEIPPool(); // \Swagger\Client\Model\ModelsEIPPool | The body

try {
    $result = $apiInstance->accountIPPoolRouterUpdate($x_account_api_key, $ippoolid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountippoolApi->accountIPPoolRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ippoolid** | **int**| The AccountIPPoolId you want to update |
 **body** | [**\Swagger\Client\Model\ModelsEIPPool**](../Model/ModelsEIPPool.md)| The body |

### Return type

[**\Swagger\Client\Model\ModelsAccountIPPool**](../Model/ModelsAccountIPPool.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

