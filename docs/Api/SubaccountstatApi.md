# Swagger\Client\SubaccountstatApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**subAccountStatRouterGetAllAggregateSubAccountStats**](SubaccountstatApi.md#subAccountStatRouterGetAllAggregateSubAccountStats) | **GET** /subaccount/stat/aggregate | 
[**subAccountStatRouterGetAllAggregateSubAccountStatsByGroup**](SubaccountstatApi.md#subAccountStatRouterGetAllAggregateSubAccountStatsByGroup) | **GET** /subaccount/stat/aggregate/group | 
[**subAccountStatRouterGetAllAggregatedGroupStatsForASubAccount**](SubaccountstatApi.md#subAccountStatRouterGetAllAggregatedGroupStatsForASubAccount) | **GET** /subaccount/stat/aggregate/groups | 
[**subAccountStatRouterGetAllAggregatedIPStatsForASubAccount**](SubaccountstatApi.md#subAccountStatRouterGetAllAggregatedIPStatsForASubAccount) | **GET** /subaccount/stat/aggregate/ips | 
[**subAccountStatRouterGetAllAggregatedProviderStatsForASpecificIPOfASubAccount**](SubaccountstatApi.md#subAccountStatRouterGetAllAggregatedProviderStatsForASpecificIPOfASubAccount) | **GET** /subaccount/stat/aggregate/ip/{ipid}/providers | 
[**subAccountStatRouterGetAllAggregatedProviderStatsForASubAccount**](SubaccountstatApi.md#subAccountStatRouterGetAllAggregatedProviderStatsForASubAccount) | **GET** /subaccount/stat/aggregate/providers | 
[**subAccountStatRouterGetAllSubAccountStats**](SubaccountstatApi.md#subAccountStatRouterGetAllSubAccountStats) | **GET** /subaccount/stat/ | 
[**subAccountStatRouterGetAllSubAccountStatsByGroup**](SubaccountstatApi.md#subAccountStatRouterGetAllSubAccountStatsByGroup) | **GET** /subaccount/stat/group | 


# **subAccountStatRouterGetAllAggregateSubAccountStats**
> \Swagger\Client\Model\ModelsStat subAccountStatRouterGetAllAggregateSubAccountStats($x_sub_account_api_key, $from, $to)



Get All Aggregate Sub-Account Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->subAccountStatRouterGetAllAggregateSubAccountStats($x_sub_account_api_key, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountstatApi->subAccountStatRouterGetAllAggregateSubAccountStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
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

# **subAccountStatRouterGetAllAggregateSubAccountStatsByGroup**
> \Swagger\Client\Model\ModelsStat subAccountStatRouterGetAllAggregateSubAccountStatsByGroup($x_sub_account_api_key, $group, $from, $to)



Get All Aggregate Sub-Account Stats by Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$group = "group_example"; // string | the group whose stats you want
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->subAccountStatRouterGetAllAggregateSubAccountStatsByGroup($x_sub_account_api_key, $group, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountstatApi->subAccountStatRouterGetAllAggregateSubAccountStatsByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
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

# **subAccountStatRouterGetAllAggregatedGroupStatsForASubAccount**
> \Swagger\Client\Model\ModelsAGStat[] subAccountStatRouterGetAllAggregatedGroupStatsForASubAccount($x_sub_account_api_key, $from, $to)



Get All Aggregated Group Stats for a Sub-Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->subAccountStatRouterGetAllAggregatedGroupStatsForASubAccount($x_sub_account_api_key, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountstatApi->subAccountStatRouterGetAllAggregatedGroupStatsForASubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsAGStat[]**](../Model/ModelsAGStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subAccountStatRouterGetAllAggregatedIPStatsForASubAccount**
> \Swagger\Client\Model\ModelsAIPStat[] subAccountStatRouterGetAllAggregatedIPStatsForASubAccount($x_sub_account_api_key, $from, $to)



Get All Aggregated IP Stats for a Sub-Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->subAccountStatRouterGetAllAggregatedIPStatsForASubAccount($x_sub_account_api_key, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountstatApi->subAccountStatRouterGetAllAggregatedIPStatsForASubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsAIPStat[]**](../Model/ModelsAIPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subAccountStatRouterGetAllAggregatedProviderStatsForASpecificIPOfASubAccount**
> \Swagger\Client\Model\ModelsPIPStat[] subAccountStatRouterGetAllAggregatedProviderStatsForASpecificIPOfASubAccount($x_sub_account_api_key, $ipid, $from, $to)



Get All Aggregated Provider Stats for a Specific IP of a Sub-Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$ipid = 789; // int | the IPId you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->subAccountStatRouterGetAllAggregatedProviderStatsForASpecificIPOfASubAccount($x_sub_account_api_key, $ipid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountstatApi->subAccountStatRouterGetAllAggregatedProviderStatsForASpecificIPOfASubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
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

# **subAccountStatRouterGetAllAggregatedProviderStatsForASubAccount**
> \Swagger\Client\Model\ModelsPIPStat[] subAccountStatRouterGetAllAggregatedProviderStatsForASubAccount($x_sub_account_api_key, $from, $to)



Get All Aggregated Provider Stats for a Sub-Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->subAccountStatRouterGetAllAggregatedProviderStatsForASubAccount($x_sub_account_api_key, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountstatApi->subAccountStatRouterGetAllAggregatedProviderStatsForASubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
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

# **subAccountStatRouterGetAllSubAccountStats**
> \Swagger\Client\Model\ModelsRStat[] subAccountStatRouterGetAllSubAccountStats($x_sub_account_api_key, $from, $to)



Get All Sub-Account Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->subAccountStatRouterGetAllSubAccountStats($x_sub_account_api_key, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountstatApi->subAccountStatRouterGetAllSubAccountStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
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

# **subAccountStatRouterGetAllSubAccountStatsByGroup**
> \Swagger\Client\Model\ModelsRStat[] subAccountStatRouterGetAllSubAccountStatsByGroup($x_sub_account_api_key, $group, $from, $to)



Get All Sub-Account Stats by Group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$group = "group_example"; // string | the tag whose stats you want
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->subAccountStatRouterGetAllSubAccountStatsByGroup($x_sub_account_api_key, $group, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountstatApi->subAccountStatRouterGetAllSubAccountStatsByGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **group** | **string**| the tag whose stats you want |
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

