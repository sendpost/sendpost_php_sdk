# Swagger\Client\AccountrecipientApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**recipientRouterGetAllMessagesForARecipient**](AccountrecipientApi.md#recipientRouterGetAllMessagesForARecipient) | **GET** /account/recipient/{recipient}/messages | 
[**recipientRouterGetAllMessagesForARecipientFromANode**](AccountrecipientApi.md#recipientRouterGetAllMessagesForARecipientFromANode) | **GET** /account/recipient/node/{recipient}/messages | 


# **recipientRouterGetAllMessagesForARecipient**
> \Swagger\Client\Model\ModelsQEmailMessage[] recipientRouterGetAllMessagesForARecipient($x_account_api_key, $recipient)



Find all messages sent to a specific recipient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountrecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$recipient = "recipient_example"; // string | email of the recipient

try {
    $result = $apiInstance->recipientRouterGetAllMessagesForARecipient($x_account_api_key, $recipient);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountrecipientApi->recipientRouterGetAllMessagesForARecipient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **recipient** | **string**| email of the recipient |

### Return type

[**\Swagger\Client\Model\ModelsQEmailMessage[]**](../Model/ModelsQEmailMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recipientRouterGetAllMessagesForARecipientFromANode**
> \Swagger\Client\Model\ModelsQEmailMessage[] recipientRouterGetAllMessagesForARecipientFromANode($x_account_api_key, $recipient)



Find all message sent to a recipient from a specific node

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountrecipientApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$recipient = "recipient_example"; // string | email of the recipient

try {
    $result = $apiInstance->recipientRouterGetAllMessagesForARecipientFromANode($x_account_api_key, $recipient);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountrecipientApi->recipientRouterGetAllMessagesForARecipientFromANode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **recipient** | **string**| email of the recipient |

### Return type

[**\Swagger\Client\Model\ModelsQEmailMessage[]**](../Model/ModelsQEmailMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

