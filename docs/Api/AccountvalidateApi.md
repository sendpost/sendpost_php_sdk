# Swagger\Client\AccountvalidateApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateRouterValidateEmailBulk**](AccountvalidateApi.md#validateRouterValidateEmailBulk) | **POST** /account/validate/bulk | 
[**validateRouterValidateEmailList**](AccountvalidateApi.md#validateRouterValidateEmailList) | **POST** /account/validate/ | 


# **validateRouterValidateEmailBulk**
> \Swagger\Client\Model\ModelsBulkResponse validateRouterValidateEmailBulk($fileinput, $x_account_api_key)



Validate Emails In File Asynchronously

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountvalidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fileinput = "/path/to/file.txt"; // \SplFileObject | CSV whose emails need to be validated
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->validateRouterValidateEmailBulk($fileinput, $x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountvalidateApi->validateRouterValidateEmailBulk: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fileinput** | **\SplFileObject**| CSV whose emails need to be validated |
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsBulkResponse**](../Model/ModelsBulkResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateRouterValidateEmailList**
> \Swagger\Client\Model\ModelsCleanedList validateRouterValidateEmailList($x_account_api_key, $body)



Validate Email List Synchronously

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountvalidateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsEmailList(); // \Swagger\Client\Model\ModelsEmailList | The email list to be sent for being validated

try {
    $result = $apiInstance->validateRouterValidateEmailList($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountvalidateApi->validateRouterValidateEmailList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsEmailList**](../Model/ModelsEmailList.md)| The email list to be sent for being validated |

### Return type

[**\Swagger\Client\Model\ModelsCleanedList**](../Model/ModelsCleanedList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

