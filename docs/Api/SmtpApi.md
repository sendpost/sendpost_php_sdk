# Swagger\Client\SmtpApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sMTPRouterReceiveWebhooksRaisedFromSMTPServers**](SmtpApi.md#sMTPRouterReceiveWebhooksRaisedFromSMTPServers) | **POST** /smtp/webhook | 


# **sMTPRouterReceiveWebhooksRaisedFromSMTPServers**
> sMTPRouterReceiveWebhooksRaisedFromSMTPServers($body)



Receive webhooks raised from SMTP servers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SmtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ModelsWMessage(); // \Swagger\Client\Model\ModelsWMessage | The Webhook content

try {
    $apiInstance->sMTPRouterReceiveWebhooksRaisedFromSMTPServers($body);
} catch (Exception $e) {
    echo 'Exception when calling SmtpApi->sMTPRouterReceiveWebhooksRaisedFromSMTPServers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ModelsWMessage**](../Model/ModelsWMessage.md)| The Webhook content |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

