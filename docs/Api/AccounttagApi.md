# Swagger\Client\AccounttagApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tagRouterCreate**](AccounttagApi.md#tagRouterCreate) | **POST** /account/tag/ | 
[**tagRouterDelete**](AccounttagApi.md#tagRouterDelete) | **DELETE** /account/tag/{tagid} | 
[**tagRouterGetAll**](AccounttagApi.md#tagRouterGetAll) | **GET** /account/tag/ | 


# **tagRouterCreate**
> \Swagger\Client\Model\ModelsTag tagRouterCreate($x_account_api_key, $body)



Create Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounttagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsTag(); // \Swagger\Client\Model\ModelsTag | The Tag content

try {
    $result = $apiInstance->tagRouterCreate($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounttagApi->tagRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsTag**](../Model/ModelsTag.md)| The Tag content |

### Return type

[**\Swagger\Client\Model\ModelsTag**](../Model/ModelsTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse tagRouterDelete($x_account_api_key, $tagid)



Delete Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounttagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$tagid = 789; // int | The AccountTagId you want to delete

try {
    $result = $apiInstance->tagRouterDelete($x_account_api_key, $tagid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounttagApi->tagRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **tagid** | **int**| The AccountTagId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tagRouterGetAll**
> \Swagger\Client\Model\ModelsTag[] tagRouterGetAll($x_account_api_key)



Get All Tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounttagApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->tagRouterGetAll($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounttagApi->tagRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsTag[]**](../Model/ModelsTag.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

