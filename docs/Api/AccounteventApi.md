# Swagger\Client\AccounteventApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eventRouterCountAllEventsFromAAccountForAGivenTimeRange**](AccounteventApi.md#eventRouterCountAllEventsFromAAccountForAGivenTimeRange) | **GET** /account/event/count | 
[**eventRouterCountAllEventsFromANodeOfASubAccountForAGivenTimeRange**](AccounteventApi.md#eventRouterCountAllEventsFromANodeOfASubAccountForAGivenTimeRange) | **GET** /account/event/node/count | 
[**eventRouterGet**](AccounteventApi.md#eventRouterGet) | **GET** /account/event/{eventId} | 
[**eventRouterGetAllEventTimestampKeysOfASubAccountFromASpecificNodeForAGivenTimeRange**](AccounteventApi.md#eventRouterGetAllEventTimestampKeysOfASubAccountFromASpecificNodeForAGivenTimeRange) | **GET** /account/event/node/timestampkeys | 
[**eventRouterGetAllEventsOfAAccountFromASpecificNode**](AccounteventApi.md#eventRouterGetAllEventsOfAAccountFromASpecificNode) | **POST** /account/event/node | 
[**eventRouterGetEventInNode**](AccounteventApi.md#eventRouterGetEventInNode) | **GET** /account/event/node/{eventId} | 


# **eventRouterCountAllEventsFromAAccountForAGivenTimeRange**
> \Swagger\Client\Model\ModelsCountStat eventRouterCountAllEventsFromAAccountForAGivenTimeRange($x_account_api_key, $search, $type, $from, $to, $source, $source_id)



Count all events from a account for a given time-range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounteventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$search = "search_example"; // string | search term
$type = "type_example"; // string | search type
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date
$source = "source_example"; // string | data source from which to get timestamp keys subaccount or ip
$source_id = "source_id_example"; // string | source id from which to get timestamp keys subaccount or ip

try {
    $result = $apiInstance->eventRouterCountAllEventsFromAAccountForAGivenTimeRange($x_account_api_key, $search, $type, $from, $to, $source, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounteventApi->eventRouterCountAllEventsFromAAccountForAGivenTimeRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **search** | **string**| search term | [optional]
 **type** | **string**| search type | [optional]
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]
 **source** | **string**| data source from which to get timestamp keys subaccount or ip | [optional]
 **source_id** | **string**| source id from which to get timestamp keys subaccount or ip | [optional]

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventRouterCountAllEventsFromANodeOfASubAccountForAGivenTimeRange**
> \Swagger\Client\Model\ModelsCountStat eventRouterCountAllEventsFromANodeOfASubAccountForAGivenTimeRange($x_account_api_key, $search, $type, $from, $to, $source, $source_id)



Count all events from a node of a sub-account for a given time-range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounteventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$search = "search_example"; // string | search term
$type = "type_example"; // string | search type
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date
$source = "source_example"; // string | data source from which to get timestamp keys subaccount or ip
$source_id = "source_id_example"; // string | source id from which to get timestamp keys subaccount or ip

try {
    $result = $apiInstance->eventRouterCountAllEventsFromANodeOfASubAccountForAGivenTimeRange($x_account_api_key, $search, $type, $from, $to, $source, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounteventApi->eventRouterCountAllEventsFromANodeOfASubAccountForAGivenTimeRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **search** | **string**| search term | [optional]
 **type** | **string**| search type | [optional]
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]
 **source** | **string**| data source from which to get timestamp keys subaccount or ip | [optional]
 **source_id** | **string**| source id from which to get timestamp keys subaccount or ip | [optional]

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventRouterGet**
> \Swagger\Client\Model\ModelsQEvent eventRouterGet($x_account_api_key, $event_id)



Find Event By Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounteventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$event_id = "event_id_example"; // string | the eventId that you want to retrieve

try {
    $result = $apiInstance->eventRouterGet($x_account_api_key, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounteventApi->eventRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **event_id** | **string**| the eventId that you want to retrieve |

### Return type

[**\Swagger\Client\Model\ModelsQEvent**](../Model/ModelsQEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventRouterGetAllEventTimestampKeysOfASubAccountFromASpecificNodeForAGivenTimeRange**
> \Swagger\Client\Model\ModelsQEvent[] eventRouterGetAllEventTimestampKeysOfASubAccountFromASpecificNodeForAGivenTimeRange($x_account_api_key, $search, $type, $from, $to, $source, $source_id)



Find all events of a sub-account from a specific node for a give time-range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounteventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$search = "search_example"; // string | search term
$type = "type_example"; // string | search type
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date
$source = "source_example"; // string | data source from which to get timestamp keys subaccount or ip
$source_id = "source_id_example"; // string | source id from which to get timestamp keys subaccount or ip

try {
    $result = $apiInstance->eventRouterGetAllEventTimestampKeysOfASubAccountFromASpecificNodeForAGivenTimeRange($x_account_api_key, $search, $type, $from, $to, $source, $source_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounteventApi->eventRouterGetAllEventTimestampKeysOfASubAccountFromASpecificNodeForAGivenTimeRange: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **search** | **string**| search term | [optional]
 **type** | **string**| search type | [optional]
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]
 **source** | **string**| data source from which to get timestamp keys subaccount or ip | [optional]
 **source_id** | **string**| source id from which to get timestamp keys subaccount or ip | [optional]

### Return type

[**\Swagger\Client\Model\ModelsQEvent[]**](../Model/ModelsQEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventRouterGetAllEventsOfAAccountFromASpecificNode**
> \Swagger\Client\Model\ModelsQEvent[] eventRouterGetAllEventsOfAAccountFromASpecificNode($x_account_api_key)



Find all events of a account from a specific node

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounteventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->eventRouterGetAllEventsOfAAccountFromASpecificNode($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounteventApi->eventRouterGetAllEventsOfAAccountFromASpecificNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsQEvent[]**](../Model/ModelsQEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **eventRouterGetEventInNode**
> \Swagger\Client\Model\ModelsQEvent eventRouterGetEventInNode($x_account_api_key, $event_id)



Find Event From Node by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounteventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$event_id = "event_id_example"; // string | the eventId that you want to retrieve

try {
    $result = $apiInstance->eventRouterGetEventInNode($x_account_api_key, $event_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounteventApi->eventRouterGetEventInNode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **event_id** | **string**| the eventId that you want to retrieve |

### Return type

[**\Swagger\Client\Model\ModelsQEvent**](../Model/ModelsQEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

