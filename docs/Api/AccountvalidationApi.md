# Swagger\Client\AccountvalidationApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**validateRouterValidateEmailBulk**](AccountvalidationApi.md#validateRouterValidateEmailBulk) | **POST** /account/validation/bulk | 
[**validationRouterCount**](AccountvalidationApi.md#validationRouterCount) | **GET** /account/validation/count | 
[**validationRouterDeleteValidation**](AccountvalidationApi.md#validationRouterDeleteValidation) | **DELETE** /account/validation/ | 
[**validationRouterGetAll**](AccountvalidationApi.md#validationRouterGetAll) | **GET** /account/validation/ | 
[**validationRouterValidateEmailList**](AccountvalidationApi.md#validationRouterValidateEmailList) | **POST** /account/validation/ | 


# **validateRouterValidateEmailBulk**
> \Swagger\Client\Model\ModelsBulkResponse validateRouterValidateEmailBulk($fileinput, $x_account_api_key)



Validate Emails In File Asynchronously

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountvalidationApi(
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
    echo 'Exception when calling AccountvalidationApi->validateRouterValidateEmailBulk: ', $e->getMessage(), PHP_EOL;
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

# **validationRouterCount**
> \Swagger\Client\Model\ModelsCountStat validationRouterCount($x_account_api_key)



Count Total Validations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountvalidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->validationRouterCount($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountvalidationApi->validationRouterCount: ', $e->getMessage(), PHP_EOL;
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

# **validationRouterDeleteValidation**
> \Swagger\Client\Model\ModelsValidation validationRouterDeleteValidation($x_account_api_key, $body)



Delete a specific validation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountvalidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsEValidation(); // \Swagger\Client\Model\ModelsEValidation | List of emails to be deleted from validation

try {
    $result = $apiInstance->validationRouterDeleteValidation($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountvalidationApi->validationRouterDeleteValidation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsEValidation**](../Model/ModelsEValidation.md)| List of emails to be deleted from validation |

### Return type

[**\Swagger\Client\Model\ModelsValidation**](../Model/ModelsValidation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validationRouterGetAll**
> \Swagger\Client\Model\ModelsValidation[] validationRouterGetAll($x_account_api_key, $offset, $limit, $search)



Get all validation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountvalidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search

try {
    $result = $apiInstance->validationRouterGetAll($x_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountvalidationApi->validationRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **search** | **string**| search | [optional]

### Return type

[**\Swagger\Client\Model\ModelsValidation[]**](../Model/ModelsValidation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validationRouterValidateEmailList**
> \Swagger\Client\Model\ModelsCleanedList validationRouterValidateEmailList($x_account_api_key, $body)



Validate Email List Synchronously

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountvalidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsEmailList(); // \Swagger\Client\Model\ModelsEmailList | The email list to be sent for being validated

try {
    $result = $apiInstance->validationRouterValidateEmailList($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountvalidationApi->validationRouterValidateEmailList: ', $e->getMessage(), PHP_EOL;
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

