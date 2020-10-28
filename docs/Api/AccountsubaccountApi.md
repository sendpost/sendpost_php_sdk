# Swagger\Client\AccountsubaccountApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subAccountRouterCount**](AccountsubaccountApi.md#subAccountRouterCount) | **GET** /account/subaccount/count | 
[**subAccountRouterCreate**](AccountsubaccountApi.md#subAccountRouterCreate) | **POST** /account/subaccount/ | 
[**subAccountRouterDelete**](AccountsubaccountApi.md#subAccountRouterDelete) | **DELETE** /account/subaccount/{subAccountId} | 
[**subAccountRouterGet**](AccountsubaccountApi.md#subAccountRouterGet) | **GET** /account/subaccount/{subAccountId} | 
[**subAccountRouterGetAll**](AccountsubaccountApi.md#subAccountRouterGetAll) | **GET** /account/subaccount/ | 
[**subAccountRouterUpdate**](AccountsubaccountApi.md#subAccountRouterUpdate) | **PUT** /account/subaccount/{subAccountId} | 


# **subAccountRouterCount**
> \Swagger\Client\Model\ModelsCountStat subAccountRouterCount($x_account_api_key, $filter_by, $filter_value, $search)



Count Total Subaccounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$filter_by = "filter_by_example"; // string | filterBy
$filter_value = 789; // int | filterValue
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->subAccountRouterCount($x_account_api_key, $filter_by, $filter_value, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsubaccountApi->subAccountRouterCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **filter_by** | **string**| filterBy | [optional]
 **filter_value** | **int**| filterValue | [optional]
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subAccountRouterCreate**
> \Swagger\Client\Model\ModelsSubAccount subAccountRouterCreate($x_account_api_key, $body)



Create SubAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsESubAccount(); // \Swagger\Client\Model\ModelsESubAccount | The SubAccount content

try {
    $result = $apiInstance->subAccountRouterCreate($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsubaccountApi->subAccountRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsESubAccount**](../Model/ModelsESubAccount.md)| The SubAccount content |

### Return type

[**\Swagger\Client\Model\ModelsSubAccount**](../Model/ModelsSubAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subAccountRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse subAccountRouterDelete($x_account_api_key, $sub_account_id)



Delete SubAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$sub_account_id = 789; // int | The SubAccountId you want to delete

try {
    $result = $apiInstance->subAccountRouterDelete($x_account_api_key, $sub_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsubaccountApi->subAccountRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **sub_account_id** | **int**| The SubAccountId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subAccountRouterGet**
> \Swagger\Client\Model\ModelsSubAccount subAccountRouterGet($x_account_api_key, $sub_account_id)



Find SubAccount by SubAccountId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$sub_account_id = 789; // int | the SubAccountId you want to get

try {
    $result = $apiInstance->subAccountRouterGet($x_account_api_key, $sub_account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsubaccountApi->subAccountRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **sub_account_id** | **int**| the SubAccountId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsSubAccount**](../Model/ModelsSubAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subAccountRouterGetAll**
> \Swagger\Client\Model\ModelsSubAccount[] subAccountRouterGetAll($x_account_api_key, $offset, $limit, $filter_by, $filter_value, $search)



Get All SubAccounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$filter_by = "filter_by_example"; // string | filterBy
$filter_value = 789; // int | filterValue
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->subAccountRouterGetAll($x_account_api_key, $offset, $limit, $filter_by, $filter_value, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsubaccountApi->subAccountRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **filter_by** | **string**| filterBy | [optional]
 **filter_value** | **int**| filterValue | [optional]
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSubAccount[]**](../Model/ModelsSubAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subAccountRouterUpdate**
> \Swagger\Client\Model\ModelsSubAccount subAccountRouterUpdate($x_account_api_key, $sub_account_id, $body)



Update SubAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsubaccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$sub_account_id = 789; // int | The SubAccountId you want to update
$body = new \Swagger\Client\Model\ModelsESubAccount(); // \Swagger\Client\Model\ModelsESubAccount | The body

try {
    $result = $apiInstance->subAccountRouterUpdate($x_account_api_key, $sub_account_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsubaccountApi->subAccountRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **sub_account_id** | **int**| The SubAccountId you want to update |
 **body** | [**\Swagger\Client\Model\ModelsESubAccount**](../Model/ModelsESubAccount.md)| The body |

### Return type

[**\Swagger\Client\Model\ModelsSubAccount**](../Model/ModelsSubAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

