# Swagger\Client\SubaccountsenderApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**senderRouterCount**](SubaccountsenderApi.md#senderRouterCount) | **GET** /subaccount/sender/count | 
[**senderRouterCreate**](SubaccountsenderApi.md#senderRouterCreate) | **POST** /subaccount/sender/ | 
[**senderRouterDelete**](SubaccountsenderApi.md#senderRouterDelete) | **DELETE** /subaccount/sender/{senderId} | 
[**senderRouterGet**](SubaccountsenderApi.md#senderRouterGet) | **GET** /subaccount/sender/{senderId} | 
[**senderRouterGetAll**](SubaccountsenderApi.md#senderRouterGetAll) | **GET** /subaccount/sender/ | 
[**senderRouterUpdate**](SubaccountsenderApi.md#senderRouterUpdate) | **PUT** /subaccount/sender/{senderId} | 


# **senderRouterCount**
> \Swagger\Client\Model\ModelsCountStat senderRouterCount($x_sub_account_api_key)



Count Total Senders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key

try {
    $result = $apiInstance->senderRouterCount($x_sub_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsenderApi->senderRouterCount: ', $e->getMessage(), PHP_EOL;
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

# **senderRouterCreate**
> \Swagger\Client\Model\ModelsSender senderRouterCreate($x_sub_account_api_key, $body)



Create Sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$body = new \Swagger\Client\Model\ModelsESender(); // \Swagger\Client\Model\ModelsESender | The Sender content

try {
    $result = $apiInstance->senderRouterCreate($x_sub_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsenderApi->senderRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsESender**](../Model/ModelsESender.md)| The Sender content |

### Return type

[**\Swagger\Client\Model\ModelsSender**](../Model/ModelsSender.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **senderRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse senderRouterDelete($x_sub_account_api_key, $sender_id)



Delete Sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$sender_id = 789; // int | The SenderId you want to delete

try {
    $result = $apiInstance->senderRouterDelete($x_sub_account_api_key, $sender_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsenderApi->senderRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **sender_id** | **int**| The SenderId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **senderRouterGet**
> \Swagger\Client\Model\ModelsSender senderRouterGet($x_sub_account_api_key, $sender_id)



Find Sender by SenderId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$sender_id = 789; // int | the SenderId you want to get

try {
    $result = $apiInstance->senderRouterGet($x_sub_account_api_key, $sender_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsenderApi->senderRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **sender_id** | **int**| the SenderId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsSender**](../Model/ModelsSender.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **senderRouterGetAll**
> \Swagger\Client\Model\ModelsSender[] senderRouterGetAll($x_sub_account_api_key, $offset, $limit, $search)



Get All Senders

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->senderRouterGetAll($x_sub_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsenderApi->senderRouterGetAll: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ModelsSender[]**](../Model/ModelsSender.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **senderRouterUpdate**
> \Swagger\Client\Model\ModelsSender senderRouterUpdate($x_sub_account_api_key, $sender_id, $body)



Update Sender

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountsenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$sender_id = 789; // int | The SenderId you want to update
$body = new \Swagger\Client\Model\ModelsESender(); // \Swagger\Client\Model\ModelsESender | The body

try {
    $result = $apiInstance->senderRouterUpdate($x_sub_account_api_key, $sender_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountsenderApi->senderRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **sender_id** | **int**| The SenderId you want to update |
 **body** | [**\Swagger\Client\Model\ModelsESender**](../Model/ModelsESender.md)| The body |

### Return type

[**\Swagger\Client\Model\ModelsSender**](../Model/ModelsSender.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

