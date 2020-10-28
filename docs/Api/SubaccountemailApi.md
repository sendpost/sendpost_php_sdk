# Swagger\Client\SubaccountemailApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailRouterSendEmail**](SubaccountemailApi.md#emailRouterSendEmail) | **POST** /subaccount/email/ | 


# **emailRouterSendEmail**
> \Swagger\Client\Model\ModelsEmailResponse[] emailRouterSendEmail($x_sub_account_api_key, $body)



Send Email To Contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$body = new \Swagger\Client\Model\ModelsEmailMessage(); // \Swagger\Client\Model\ModelsEmailMessage | The Email Message

try {
    $result = $apiInstance->emailRouterSendEmail($x_sub_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountemailApi->emailRouterSendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsEmailMessage**](../Model/ModelsEmailMessage.md)| The Email Message |

### Return type

[**\Swagger\Client\Model\ModelsEmailResponse[]**](../Model/ModelsEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

