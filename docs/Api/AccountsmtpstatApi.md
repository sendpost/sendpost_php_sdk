# Swagger\Client\AccountsmtpstatApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sMTPStatRouterGetAllAggregateIPProviderSMTPStats**](AccountsmtpstatApi.md#sMTPStatRouterGetAllAggregateIPProviderSMTPStats) | **GET** /account/smtp/stat/ip/{ipid}/provider/{pname}/aggregate | 
[**sMTPStatRouterGetAllAggregateIPSMTPStats**](AccountsmtpstatApi.md#sMTPStatRouterGetAllAggregateIPSMTPStats) | **GET** /account/smtp/stat/ip/{ipid}/aggregate | 
[**sMTPStatRouterGetAllAggregateIPSMTPStatsForSubAccount**](AccountsmtpstatApi.md#sMTPStatRouterGetAllAggregateIPSMTPStatsForSubAccount) | **GET** /account/smtp/stat/ip/{ipid}/subaccount/{sid}/aggregate | 
[**sMTPStatRouterGetAllAggregateSubAccountProviderSMTPStats**](AccountsmtpstatApi.md#sMTPStatRouterGetAllAggregateSubAccountProviderSMTPStats) | **GET** /account/smtp/stat/subaccount/{sid}/provider/{pname}/aggregate | 
[**sMTPStatRouterGetAllAggregateSubAccountSMTPStats**](AccountsmtpstatApi.md#sMTPStatRouterGetAllAggregateSubAccountSMTPStats) | **GET** /account/smtp/stat/subaccount/{sid}/aggregate | 
[**sMTPStatRouterGetAllAggregateSubAccountSMTPStatsForIP**](AccountsmtpstatApi.md#sMTPStatRouterGetAllAggregateSubAccountSMTPStatsForIP) | **GET** /account/smtp/stat/subaccount/{sid}/ip/{ipid}/aggregate | 


# **sMTPStatRouterGetAllAggregateIPProviderSMTPStats**
> \Swagger\Client\Model\ModelsSMTPStat[] sMTPStatRouterGetAllAggregateIPProviderSMTPStats($x_account_api_key, $ipid, $pname, $from, $to)



Get All Aggregate IP Provider SMTP Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsmtpstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IP ID you want to get
$pname = "pname_example"; // string | the provider name
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->sMTPStatRouterGetAllAggregateIPProviderSMTPStats($x_account_api_key, $ipid, $pname, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsmtpstatApi->sMTPStatRouterGetAllAggregateIPProviderSMTPStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IP ID you want to get |
 **pname** | **string**| the provider name |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSMTPStat[]**](../Model/ModelsSMTPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sMTPStatRouterGetAllAggregateIPSMTPStats**
> \Swagger\Client\Model\ModelsSMTPStat[] sMTPStatRouterGetAllAggregateIPSMTPStats($x_account_api_key, $ipid, $from, $to)



Get All Aggregate IP SMTP Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsmtpstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->sMTPStatRouterGetAllAggregateIPSMTPStats($x_account_api_key, $ipid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsmtpstatApi->sMTPStatRouterGetAllAggregateIPSMTPStats: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ModelsSMTPStat[]**](../Model/ModelsSMTPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sMTPStatRouterGetAllAggregateIPSMTPStatsForSubAccount**
> \Swagger\Client\Model\ModelsSMTPStat[] sMTPStatRouterGetAllAggregateIPSMTPStatsForSubAccount($x_account_api_key, $ipid, $sid, $from, $to)



Get All Aggregate IP SMTP Stats For SubAccount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsmtpstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IP ID you want to get
$sid = 789; // int | the SubAccount ID you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->sMTPStatRouterGetAllAggregateIPSMTPStatsForSubAccount($x_account_api_key, $ipid, $sid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsmtpstatApi->sMTPStatRouterGetAllAggregateIPSMTPStatsForSubAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IP ID you want to get |
 **sid** | **int**| the SubAccount ID you want to get |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSMTPStat[]**](../Model/ModelsSMTPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sMTPStatRouterGetAllAggregateSubAccountProviderSMTPStats**
> \Swagger\Client\Model\ModelsSMTPStat[] sMTPStatRouterGetAllAggregateSubAccountProviderSMTPStats($x_account_api_key, $sid, $pname, $from, $to)



Get All Aggregate SubAccount Provider SMTP Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsmtpstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$sid = 789; // int | the SubAccount ID you want to get
$pname = "pname_example"; // string | the provider name
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->sMTPStatRouterGetAllAggregateSubAccountProviderSMTPStats($x_account_api_key, $sid, $pname, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsmtpstatApi->sMTPStatRouterGetAllAggregateSubAccountProviderSMTPStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **sid** | **int**| the SubAccount ID you want to get |
 **pname** | **string**| the provider name |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSMTPStat[]**](../Model/ModelsSMTPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sMTPStatRouterGetAllAggregateSubAccountSMTPStats**
> \Swagger\Client\Model\ModelsSMTPStat[] sMTPStatRouterGetAllAggregateSubAccountSMTPStats($x_account_api_key, $sid, $from, $to)



Get All Aggregate SubAccount SMTP Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsmtpstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$sid = 789; // int | the Sub-Account ID you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->sMTPStatRouterGetAllAggregateSubAccountSMTPStats($x_account_api_key, $sid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsmtpstatApi->sMTPStatRouterGetAllAggregateSubAccountSMTPStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **sid** | **int**| the Sub-Account ID you want to get |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSMTPStat[]**](../Model/ModelsSMTPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sMTPStatRouterGetAllAggregateSubAccountSMTPStatsForIP**
> \Swagger\Client\Model\ModelsSMTPStat[] sMTPStatRouterGetAllAggregateSubAccountSMTPStatsForIP($x_account_api_key, $sid, $ipid, $from, $to)



Get All Aggregate SubAccount SMTP Stats For IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountsmtpstatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$sid = 789; // int | the Sub-Account ID you want to get
$ipid = 789; // int | the IP  ID you want to get
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->sMTPStatRouterGetAllAggregateSubAccountSMTPStatsForIP($x_account_api_key, $sid, $ipid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountsmtpstatApi->sMTPStatRouterGetAllAggregateSubAccountSMTPStatsForIP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **sid** | **int**| the Sub-Account ID you want to get |
 **ipid** | **int**| the IP  ID you want to get |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsSMTPStat[]**](../Model/ModelsSMTPStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

