# Swagger\Client\AccountintegrationApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountIntegrationRouterCount**](AccountintegrationApi.md#accountIntegrationRouterCount) | **GET** /account/integration/count | 
[**accountIntegrationRouterCreate**](AccountintegrationApi.md#accountIntegrationRouterCreate) | **POST** /account/integration/{itype} | 
[**accountIntegrationRouterDelete**](AccountintegrationApi.md#accountIntegrationRouterDelete) | **DELETE** /account/integration/{itype} | 
[**accountIntegrationRouterDisableGlockappsIPMonitoring**](AccountintegrationApi.md#accountIntegrationRouterDisableGlockappsIPMonitoring) | **DELETE** /account/integration/glockapps/monitor/{ipid} | 
[**accountIntegrationRouterEnableGlockappsIPMonitoring**](AccountintegrationApi.md#accountIntegrationRouterEnableGlockappsIPMonitoring) | **POST** /account/integration/glockapps/monitor/{ipid} | 
[**accountIntegrationRouterGetAll**](AccountintegrationApi.md#accountIntegrationRouterGetAll) | **GET** /account/integration/ | 
[**accountIntegrationRouterGetMonitoredIPStats**](AccountintegrationApi.md#accountIntegrationRouterGetMonitoredIPStats) | **GET** /account/integration/glockapps/monitor/stat/{ipid} | 
[**accountIntegrationRouterUpdate**](AccountintegrationApi.md#accountIntegrationRouterUpdate) | **PUT** /account/integration/{itype} | 


# **accountIntegrationRouterCount**
> \Swagger\Client\Model\ModelsCountStat accountIntegrationRouterCount($x_account_api_key)



Count Total AccountIntegrations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountintegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->accountIntegrationRouterCount($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountintegrationApi->accountIntegrationRouterCount: ', $e->getMessage(), PHP_EOL;
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

# **accountIntegrationRouterCreate**
> \Swagger\Client\Model\ModelsIntegration accountIntegrationRouterCreate($x_account_api_key, $itype, $body)



Create Integration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountintegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$itype = "itype_example"; // string | The integration type you want to create
$body = new \Swagger\Client\Model\ModelsEIntegration(); // \Swagger\Client\Model\ModelsEIntegration | The Integration content

try {
    $result = $apiInstance->accountIntegrationRouterCreate($x_account_api_key, $itype, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountintegrationApi->accountIntegrationRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **itype** | **string**| The integration type you want to create |
 **body** | [**\Swagger\Client\Model\ModelsEIntegration**](../Model/ModelsEIntegration.md)| The Integration content |

### Return type

[**\Swagger\Client\Model\ModelsIntegration**](../Model/ModelsIntegration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIntegrationRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse accountIntegrationRouterDelete($x_account_api_key, $itype)



Delete Integration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountintegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$itype = "itype_example"; // string | The integration type you want to update

try {
    $result = $apiInstance->accountIntegrationRouterDelete($x_account_api_key, $itype);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountintegrationApi->accountIntegrationRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **itype** | **string**| The integration type you want to update |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIntegrationRouterDisableGlockappsIPMonitoring**
> \Swagger\Client\Model\ModelsDeleteResponse accountIntegrationRouterDisableGlockappsIPMonitoring($x_account_api_key, $ipid)



Disable IP Monitoring for a single IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountintegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to disable monitoring for

try {
    $result = $apiInstance->accountIntegrationRouterDisableGlockappsIPMonitoring($x_account_api_key, $ipid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountintegrationApi->accountIntegrationRouterDisableGlockappsIPMonitoring: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to disable monitoring for |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIntegrationRouterEnableGlockappsIPMonitoring**
> \Swagger\Client\Model\ModelsResponse accountIntegrationRouterEnableGlockappsIPMonitoring($x_account_api_key, $ipid)



Enable IP Monitoring for a single IP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountintegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId you want to enable monitoring for

try {
    $result = $apiInstance->accountIntegrationRouterEnableGlockappsIPMonitoring($x_account_api_key, $ipid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountintegrationApi->accountIntegrationRouterEnableGlockappsIPMonitoring: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId you want to enable monitoring for |

### Return type

[**\Swagger\Client\Model\ModelsResponse**](../Model/ModelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIntegrationRouterGetAll**
> \Swagger\Client\Model\ModelsIntegration[] accountIntegrationRouterGetAll($x_account_api_key)



Get All Integrations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountintegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->accountIntegrationRouterGetAll($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountintegrationApi->accountIntegrationRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsIntegration[]**](../Model/ModelsIntegration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIntegrationRouterGetMonitoredIPStats**
> \Swagger\Client\Model\ModelsRGlockappsMonitorStat[] accountIntegrationRouterGetMonitoredIPStats($x_account_api_key, $ipid, $from, $to)



Get Monitored IP Stats

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountintegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$ipid = 789; // int | the IPId for which you want monitored stats
$from = "from_example"; // string | from date
$to = "to_example"; // string | to date

try {
    $result = $apiInstance->accountIntegrationRouterGetMonitoredIPStats($x_account_api_key, $ipid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountintegrationApi->accountIntegrationRouterGetMonitoredIPStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **ipid** | **int**| the IPId for which you want monitored stats |
 **from** | **string**| from date | [optional]
 **to** | **string**| to date | [optional]

### Return type

[**\Swagger\Client\Model\ModelsRGlockappsMonitorStat[]**](../Model/ModelsRGlockappsMonitorStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountIntegrationRouterUpdate**
> \Swagger\Client\Model\ModelsIntegration accountIntegrationRouterUpdate($x_account_api_key, $itype, $body)



Update Integration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountintegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$itype = "itype_example"; // string | The integration type you want to update
$body = new \Swagger\Client\Model\ModelsEIntegration(); // \Swagger\Client\Model\ModelsEIntegration | The Integration content

try {
    $result = $apiInstance->accountIntegrationRouterUpdate($x_account_api_key, $itype, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountintegrationApi->accountIntegrationRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **itype** | **string**| The integration type you want to update |
 **body** | [**\Swagger\Client\Model\ModelsEIntegration**](../Model/ModelsEIntegration.md)| The Integration content |

### Return type

[**\Swagger\Client\Model\ModelsIntegration**](../Model/ModelsIntegration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

