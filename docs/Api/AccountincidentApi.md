# Swagger\Client\AccountincidentApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**incidentRouterAdd**](AccountincidentApi.md#incidentRouterAdd) | **POST** /account/incident/{incidentId}/comment | 
[**incidentRouterCount**](AccountincidentApi.md#incidentRouterCount) | **GET** /account/incident/count | 
[**incidentRouterCreate**](AccountincidentApi.md#incidentRouterCreate) | **POST** /account/incident/ | 
[**incidentRouterGetAll**](AccountincidentApi.md#incidentRouterGetAll) | **GET** /account/incident/ | 
[**incidentRouterGetAllComments**](AccountincidentApi.md#incidentRouterGetAllComments) | **GET** /account/incident/{incidentId}/comment | 
[**incidentRouterGetIncident**](AccountincidentApi.md#incidentRouterGetIncident) | **GET** /account/incident/{incidentId} | 
[**incidentRouterUpdate**](AccountincidentApi.md#incidentRouterUpdate) | **PUT** /account/incident/{incidentId} | 


# **incidentRouterAdd**
> \Swagger\Client\Model\ModelsComment incidentRouterAdd($x_account_api_key, $incident_id, $body)



Add comment to Incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountincidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$incident_id = 789; // int | the incident id
$body = new \Swagger\Client\Model\ModelsEComment(); // \Swagger\Client\Model\ModelsEComment | The Comment content

try {
    $result = $apiInstance->incidentRouterAdd($x_account_api_key, $incident_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountincidentApi->incidentRouterAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **incident_id** | **int**| the incident id |
 **body** | [**\Swagger\Client\Model\ModelsEComment**](../Model/ModelsEComment.md)| The Comment content |

### Return type

[**\Swagger\Client\Model\ModelsComment**](../Model/ModelsComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incidentRouterCount**
> \Swagger\Client\Model\ModelsCountStat incidentRouterCount($x_account_api_key, $status, $tag, $search)



Count Total Incidents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountincidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$status = 789; // int | status
$tag = 789; // int | status
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->incidentRouterCount($x_account_api_key, $status, $tag, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountincidentApi->incidentRouterCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **status** | **int**| status | [optional]
 **tag** | **int**| status | [optional]
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incidentRouterCreate**
> \Swagger\Client\Model\ModelsIncident incidentRouterCreate($x_account_api_key, $body)



Create Incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountincidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsEIncident(); // \Swagger\Client\Model\ModelsEIncident | The Incident content

try {
    $result = $apiInstance->incidentRouterCreate($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountincidentApi->incidentRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsEIncident**](../Model/ModelsEIncident.md)| The Incident content |

### Return type

[**\Swagger\Client\Model\ModelsIncident**](../Model/ModelsIncident.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incidentRouterGetAll**
> \Swagger\Client\Model\ModelsIncident[] incidentRouterGetAll($x_account_api_key, $offset, $limit, $search, $status, $tag)



Get All Incidents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountincidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search term
$status = 789; // int | status
$tag = 789; // int | status

try {
    $result = $apiInstance->incidentRouterGetAll($x_account_api_key, $offset, $limit, $search, $status, $tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountincidentApi->incidentRouterGetAll: ', $e->getMessage(), PHP_EOL;
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
 **status** | **int**| status | [optional]
 **tag** | **int**| status | [optional]

### Return type

[**\Swagger\Client\Model\ModelsIncident[]**](../Model/ModelsIncident.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incidentRouterGetAllComments**
> \Swagger\Client\Model\ModelsComment[] incidentRouterGetAllComments($x_account_api_key, $incident_id)



Get All Comments Associated with Incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountincidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$incident_id = 789; // int | the IncidentId you want to get comments for

try {
    $result = $apiInstance->incidentRouterGetAllComments($x_account_api_key, $incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountincidentApi->incidentRouterGetAllComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **incident_id** | **int**| the IncidentId you want to get comments for |

### Return type

[**\Swagger\Client\Model\ModelsComment[]**](../Model/ModelsComment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incidentRouterGetIncident**
> \Swagger\Client\Model\ModelsIncident incidentRouterGetIncident($x_account_api_key, $incident_id)



Find Incident by incidentId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountincidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$incident_id = 789; // int | the IncidentId you want to get

try {
    $result = $apiInstance->incidentRouterGetIncident($x_account_api_key, $incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountincidentApi->incidentRouterGetIncident: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **incident_id** | **int**| the IncidentId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsIncident**](../Model/ModelsIncident.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **incidentRouterUpdate**
> \Swagger\Client\Model\ModelsIncident incidentRouterUpdate($x_account_api_key, $incident_id, $body)



Update Incident

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountincidentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$incident_id = 789; // int | the Incident Id you want to update
$body = new \Swagger\Client\Model\ModelsEIncident(); // \Swagger\Client\Model\ModelsEIncident | The Incident content

try {
    $result = $apiInstance->incidentRouterUpdate($x_account_api_key, $incident_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountincidentApi->incidentRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **incident_id** | **int**| the Incident Id you want to update |
 **body** | [**\Swagger\Client\Model\ModelsEIncident**](../Model/ModelsEIncident.md)| The Incident content |

### Return type

[**\Swagger\Client\Model\ModelsIncident**](../Model/ModelsIncident.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

