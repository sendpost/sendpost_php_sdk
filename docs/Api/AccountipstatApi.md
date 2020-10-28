# Swagger\Client\AccountipstatApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**iPStatRouterGetAllAggregateIPStats**](AccountipstatApi.md#iPStatRouterGetAllAggregateIPStats) | **GET** /account/ip/stat/{ipid}/aggregate | 
[**iPStatRouterGetAllAggregateIPStatsByGroup**](AccountipstatApi.md#iPStatRouterGetAllAggregateIPStatsByGroup) | **GET** /account/ip/stat/{ipid}/aggregate/provider | 
[**iPStatRouterGetAllAggregatedProviderStatsForAIP**](AccountipstatApi.md#iPStatRouterGetAllAggregatedProviderStatsForAIP) | **GET** /account/ip/stat/{ipid}/aggregate/providers | 
[**iPStatRouterGetAllAggregatedProviderStatsForASpecificSubAccountOfAIP**](AccountipstatApi.md#iPStatRouterGetAllAggregatedProviderStatsForASpecificSubAccountOfAIP) | **GET** /account/ip/stat/{ipid}/aggregate/sid/{sid}/providers | 
[**iPStatRouterGetAllAggregatedSubAccountStatsForAnIP**](AccountipstatApi.md#iPStatRouterGetAllAggregatedSubAccountStatsForAnIP) | **GET** /account/ip/stat/{ipid}/aggregate/subaccounts | 
[**iPStatRouterGetAllIPStats**](AccountipstatApi.md#iPStatRouterGetAllIPStats) | **GET** /account/ip/stat/{ipid} | 
[**iPStatRouterGetAllIPStatsByGroup**](AccountipstatApi.md#iPStatRouterGetAllIPStatsByGroup) | **GET** /account/ip/stat/{ipid}/provider | 


# **iPStatRouterGetAllAggregateIPStats**
> \Swagger\Client\Model\ModelsStat iPStatRouterGetAllAggregateIPStats($x_account_api_key, $ipid, $from, $to)



Get All Aggregate Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->iPStatRouterGetAllAggregateIPStats($x_account_api_key, $ipid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipstatApi->iPStatRouterGetAllAggregateIPStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to get |
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

# **iPStatRouterGetAllAggregateIPStatsByGroup**
> \Swagger\Client\Model\ModelsStat iPStatRouterGetAllAggregateIPStatsByGroup($x_account_api_key, $ipid, $provider, $from, $to)



Get All Aggregate Stats by Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to get
$provider = "provider_example"; // string | the group whose stats you want
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->iPStatRouterGetAllAggregateIPStatsByGroup($x_account_api_key, $ipid, $provider, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipstatApi->iPStatRouterGetAllAggregateIPStatsByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to get |
 **provider** | **string**| the group whose stats you want |
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

# **iPStatRouterGetAllAggregatedProviderStatsForAIP**
> \Swagger\Client\Model\ModelsPIPStat[] iPStatRouterGetAllAggregatedProviderStatsForAIP($x_account_api_key, $ipid, $from, $to)



Get All Aggregated Provider Stats for a IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->iPStatRouterGetAllAggregatedProviderStatsForAIP($x_account_api_key, $ipid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipstatApi->iPStatRouterGetAllAggregatedProviderStatsForAIP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to get |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsPIPStat[]**](../Model/ModelsPIPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPStatRouterGetAllAggregatedProviderStatsForASpecificSubAccountOfAIP**
> \Swagger\Client\Model\ModelsPIPStat[] iPStatRouterGetAllAggregatedProviderStatsForASpecificSubAccountOfAIP($x_account_api_key, $ipid, $sid, $from, $to)



Get All Aggregated Provider Stats for a Specific Sub-Account of a IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to get
$sid = 789; // int | the Sub Account Id you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->iPStatRouterGetAllAggregatedProviderStatsForASpecificSubAccountOfAIP($x_account_api_key, $ipid, $sid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipstatApi->iPStatRouterGetAllAggregatedProviderStatsForASpecificSubAccountOfAIP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to get |
 **sid** | **int**| the Sub Account Id you want to get |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsPIPStat[]**](../Model/ModelsPIPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPStatRouterGetAllAggregatedSubAccountStatsForAnIP**
> \Swagger\Client\Model\ModelsSIPStat[] iPStatRouterGetAllAggregatedSubAccountStatsForAnIP($x_account_api_key, $ipid, $from, $to)



Get All Aggregated Sub-Account Stats for an IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->iPStatRouterGetAllAggregatedSubAccountStatsForAnIP($x_account_api_key, $ipid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipstatApi->iPStatRouterGetAllAggregatedSubAccountStatsForAnIP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to get |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSIPStat[]**](../Model/ModelsSIPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPStatRouterGetAllIPStats**
> \Swagger\Client\Model\ModelsRIPStat[] iPStatRouterGetAllIPStats($x_account_api_key, $ipid, $from, $to)



Get All IP Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->iPStatRouterGetAllIPStats($x_account_api_key, $ipid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipstatApi->iPStatRouterGetAllIPStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to get |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsRIPStat[]**](../Model/ModelsRIPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **iPStatRouterGetAllIPStatsByGroup**
> \Swagger\Client\Model\ModelsRIPStat[] iPStatRouterGetAllIPStatsByGroup($ipid, $x_account_api_key, $provider, $from, $to)



Get All IP Stats by Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountipstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ipid = 789; // int | the IPId you want to get
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$provider = "provider_example"; // string | the provider whose stats you want
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->iPStatRouterGetAllIPStatsByGroup($ipid, $x_account_api_key, $provider, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountipstatApi->iPStatRouterGetAllIPStatsByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ipid** | **int**| the IPId you want to get |
 **x_account_api_key** | **string**| Account API Key |
 **provider** | **string**| the provider whose stats you want |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsRIPStat[]**](../Model/ModelsRIPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

