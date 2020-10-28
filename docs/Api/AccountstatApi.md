# Swagger\Client\AccountstatApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountStatRouterGetAllAccountStats**](AccountstatApi.md#accountStatRouterGetAllAccountStats) | **GET** /account/stat/ | 
[**accountStatRouterGetAllAccountStatsByGroup**](AccountstatApi.md#accountStatRouterGetAllAccountStatsByGroup) | **GET** /account/stat/group | 
[**accountStatRouterGetAllAggregateAccountStats**](AccountstatApi.md#accountStatRouterGetAllAggregateAccountStats) | **GET** /account/stat/aggregate | 
[**accountStatRouterGetAllAggregateAccountStatsByGroup**](AccountstatApi.md#accountStatRouterGetAllAggregateAccountStatsByGroup) | **GET** /account/stat/aggregate/group | 


# **accountStatRouterGetAllAccountStats**
> \Swagger\Client\Model\ModelsRStat[] accountStatRouterGetAllAccountStats($x_account_api_key, $from, $to)



Get All Account Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Sub-Account API Key
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->accountStatRouterGetAllAccountStats($x_account_api_key, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountstatApi->accountStatRouterGetAllAccountStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Sub-Account API Key |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsRStat[]**](../Model/ModelsRStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountStatRouterGetAllAccountStatsByGroup**
> \Swagger\Client\Model\ModelsRStat[] accountStatRouterGetAllAccountStatsByGroup($x_account_api_key, $group, $from, $to)



Get All Account Stats by Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Sub-Account API Key
$group = "group_example"; // string | the group whose stats you want
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->accountStatRouterGetAllAccountStatsByGroup($x_account_api_key, $group, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountstatApi->accountStatRouterGetAllAccountStatsByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Sub-Account API Key |
 **group** | **string**| the group whose stats you want |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsRStat[]**](../Model/ModelsRStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountStatRouterGetAllAggregateAccountStats**
> \Swagger\Client\Model\ModelsStat accountStatRouterGetAllAggregateAccountStats($x_account_api_key, $from, $to)



Get All Aggregate Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Sub-Account API Key
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->accountStatRouterGetAllAggregateAccountStats($x_account_api_key, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountstatApi->accountStatRouterGetAllAggregateAccountStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Sub-Account API Key |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsStat**](../Model/ModelsStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountStatRouterGetAllAggregateAccountStatsByGroup**
> \Swagger\Client\Model\ModelsStat accountStatRouterGetAllAggregateAccountStatsByGroup($x_account_api_key, $group, $from, $to)



Get All Aggregate Stats by Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Sub-Account API Key
$group = "group_example"; // string | the group whose stats you want
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->accountStatRouterGetAllAggregateAccountStatsByGroup($x_account_api_key, $group, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountstatApi->accountStatRouterGetAllAggregateAccountStatsByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Sub-Account API Key |
 **group** | **string**| the group whose stats you want |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsStat**](../Model/ModelsStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

