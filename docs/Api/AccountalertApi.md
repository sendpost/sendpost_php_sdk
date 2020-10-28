# Swagger\Client\AccountalertApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**alertRouterCount**](AccountalertApi.md#alertRouterCount) | **GET** /account/alert/count | 
[**alertRouterCreateAlert**](AccountalertApi.md#alertRouterCreateAlert) | **POST** /account/alert/ | 
[**alertRouterGetAll**](AccountalertApi.md#alertRouterGetAll) | **GET** /account/alert/ | 
[**alertRouterUpdate**](AccountalertApi.md#alertRouterUpdate) | **PUT** /account/alert/{alertid} | 


# **alertRouterCount**
> \Swagger\Client\Model\ModelsCountStat alertRouterCount($x_account_api_key, $search)



Count Total Alerts for account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountalertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->alertRouterCount($x_account_api_key, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountalertApi->alertRouterCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **alertRouterCreateAlert**
> \Swagger\Client\Model\ModelsAlert alertRouterCreateAlert($x_account_api_key, $body)



create an alert

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountalertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsAlertRequest(); // \Swagger\Client\Model\ModelsAlertRequest | The List to br sent

try {
    $result = $apiInstance->alertRouterCreateAlert($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountalertApi->alertRouterCreateAlert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsAlertRequest**](../Model/ModelsAlertRequest.md)| The List to br sent |

### Return type

[**\Swagger\Client\Model\ModelsAlert**](../Model/ModelsAlert.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **alertRouterGetAll**
> \Swagger\Client\Model\ModelsDetailedAlert[] alertRouterGetAll($x_account_api_key, $offset, $limit, $search)



Get All Alerts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountalertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->alertRouterGetAll($x_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountalertApi->alertRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsDetailedAlert[]**](../Model/ModelsDetailedAlert.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **alertRouterUpdate**
> \Swagger\Client\Model\Alert alertRouterUpdate($x_account_api_key, $alertid, $body)



Update an Alert

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountalertApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$alertid = 789; // int | The alert you want to update
$body = new \Swagger\Client\Model\Alert(); // \Swagger\Client\Model\Alert | The alert  Settings

try {
    $result = $apiInstance->alertRouterUpdate($x_account_api_key, $alertid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountalertApi->alertRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **alertid** | **int**| The alert you want to update |
 **body** | [**\Swagger\Client\Model\Alert**](../Model/Alert.md)| The alert  Settings |

### Return type

[**\Swagger\Client\Model\Alert**](../Model/Alert.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

