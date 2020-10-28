# Swagger\Client\AccountlabelApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**labelRouterCount**](AccountlabelApi.md#labelRouterCount) | **GET** /account/label/count | 
[**labelRouterCreate**](AccountlabelApi.md#labelRouterCreate) | **POST** /account/label/ | 
[**labelRouterDelete**](AccountlabelApi.md#labelRouterDelete) | **DELETE** /account/label/{labelId} | 
[**labelRouterGet**](AccountlabelApi.md#labelRouterGet) | **GET** /account/label/{labelId} | 
[**labelRouterGetAll**](AccountlabelApi.md#labelRouterGetAll) | **GET** /account/label/ | 
[**labelRouterUpdate**](AccountlabelApi.md#labelRouterUpdate) | **PUT** /account/label/{labelId} | 


# **labelRouterCount**
> \Swagger\Client\Model\ModelsCountStat labelRouterCount($x_account_api_key)



Count Total Labels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountlabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->labelRouterCount($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountlabelApi->labelRouterCount: ', $e->getMessage(), PHP_EOL;
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

# **labelRouterCreate**
> \Swagger\Client\Model\ModelsLabel labelRouterCreate($x_account_api_key, $body)



Create Label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountlabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsLabel(); // \Swagger\Client\Model\ModelsLabel | The Label content

try {
    $result = $apiInstance->labelRouterCreate($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountlabelApi->labelRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsLabel**](../Model/ModelsLabel.md)| The Label content |

### Return type

[**\Swagger\Client\Model\ModelsLabel**](../Model/ModelsLabel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse labelRouterDelete($x_account_api_key, $label_id)



Delete Label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountlabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$label_id = 789; // int | The LabelId you want to delete

try {
    $result = $apiInstance->labelRouterDelete($x_account_api_key, $label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountlabelApi->labelRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **label_id** | **int**| The LabelId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelRouterGet**
> \Swagger\Client\Model\ModelsLabel labelRouterGet($x_account_api_key, $label_id)



Find Label by LabelId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountlabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$label_id = 789; // int | the LabelId you want to get

try {
    $result = $apiInstance->labelRouterGet($x_account_api_key, $label_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountlabelApi->labelRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **label_id** | **int**| the LabelId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsLabel**](../Model/ModelsLabel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelRouterGetAll**
> \Swagger\Client\Model\ModelsLabel[] labelRouterGetAll($x_account_api_key)



Get All Labels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountlabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->labelRouterGetAll($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountlabelApi->labelRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsLabel[]**](../Model/ModelsLabel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **labelRouterUpdate**
> \Swagger\Client\Model\ModelsLabel labelRouterUpdate($x_account_api_key, $label_id, $body)



Update Label

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountlabelApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$label_id = 789; // int | The LabelId you want to update
$body = new \Swagger\Client\Model\ModelsLabel(); // \Swagger\Client\Model\ModelsLabel | The body

try {
    $result = $apiInstance->labelRouterUpdate($x_account_api_key, $label_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountlabelApi->labelRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **label_id** | **int**| The LabelId you want to update |
 **body** | [**\Swagger\Client\Model\ModelsLabel**](../Model/ModelsLabel.md)| The body |

### Return type

[**\Swagger\Client\Model\ModelsLabel**](../Model/ModelsLabel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

