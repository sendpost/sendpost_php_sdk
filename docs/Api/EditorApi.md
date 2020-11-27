# Swagger\Client\EditorApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**editorApiRouterGetToken**](EditorApi.md#editorApiRouterGetToken) | **GET** /editor/ | 


# **editorApiRouterGetToken**
> \Swagger\Client\Model\ModelsEditorTokenResponse editorApiRouterGetToken($x_account_api_key)



fetch Bee editor token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EditorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->editorApiRouterGetToken($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EditorApi->editorApiRouterGetToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsEditorTokenResponse**](../Model/ModelsEditorTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

