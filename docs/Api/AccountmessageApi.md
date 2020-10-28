# Swagger\Client\AccountmessageApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messageRouterGet**](AccountmessageApi.md#messageRouterGet) | **GET** /account/message/{messageId} | 
[**messageRouterGetAllEventsForAMessageId**](AccountmessageApi.md#messageRouterGetAllEventsForAMessageId) | **GET** /account/message/{messageId}/events | 
[**messageRouterGetAllEventsForAMessageIdFromANode**](AccountmessageApi.md#messageRouterGetAllEventsForAMessageIdFromANode) | **GET** /account/message/node/{messageId}/events | 
[**messageRouterGetMessageFromNode**](AccountmessageApi.md#messageRouterGetMessageFromNode) | **GET** /account/message/node/{messageId} | 


# **messageRouterGet**
> \Swagger\Client\Model\ModelsQEmailMessage messageRouterGet($x_account_api_key, $message_id)



Find Message By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountmessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Sub-Account API Key
$message_id = "message_id_example"; // string | the messageId that you want to retrieve

try {
    $result = $apiInstance->messageRouterGet($x_account_api_key, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountmessageApi->messageRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Sub-Account API Key |
 **message_id** | **string**| the messageId that you want to retrieve |

### Return type

[**\Swagger\Client\Model\ModelsQEmailMessage**](../Model/ModelsQEmailMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageRouterGetAllEventsForAMessageId**
> \Swagger\Client\Model\ModelsQEvent[] messageRouterGetAllEventsForAMessageId($x_account_api_key, $message_id)



Find all events associated with a message id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountmessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$message_id = "message_id_example"; // string | the messageId that you want to retrieve

try {
    $result = $apiInstance->messageRouterGetAllEventsForAMessageId($x_account_api_key, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountmessageApi->messageRouterGetAllEventsForAMessageId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **message_id** | **string**| the messageId that you want to retrieve |

### Return type

[**\Swagger\Client\Model\ModelsQEvent[]**](../Model/ModelsQEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageRouterGetAllEventsForAMessageIdFromANode**
> \Swagger\Client\Model\ModelsQEvent[] messageRouterGetAllEventsForAMessageIdFromANode($x_account_api_key, $message_id)



Find all message events associated with a message id from a specific node

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountmessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$message_id = "message_id_example"; // string | the messageId that you want to retrieve

try {
    $result = $apiInstance->messageRouterGetAllEventsForAMessageIdFromANode($x_account_api_key, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountmessageApi->messageRouterGetAllEventsForAMessageIdFromANode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **message_id** | **string**| the messageId that you want to retrieve |

### Return type

[**\Swagger\Client\Model\ModelsQEvent[]**](../Model/ModelsQEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageRouterGetMessageFromNode**
> \Swagger\Client\Model\ModelsQEmailMessage messageRouterGetMessageFromNode($x_account_api_key, $message_id)



Find Message from node by specific Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountmessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$message_id = "message_id_example"; // string | the messageId that you want to retrieve

try {
    $result = $apiInstance->messageRouterGetMessageFromNode($x_account_api_key, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountmessageApi->messageRouterGetMessageFromNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **message_id** | **string**| the messageId that you want to retrieve |

### Return type

[**\Swagger\Client\Model\ModelsQEmailMessage**](../Model/ModelsQEmailMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

