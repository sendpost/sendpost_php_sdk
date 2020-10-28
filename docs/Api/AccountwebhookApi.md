# Swagger\Client\AccountwebhookApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountWebhookRouterCount**](AccountwebhookApi.md#accountWebhookRouterCount) | **GET** /account/webhook/count | 
[**accountWebhookRouterCreate**](AccountwebhookApi.md#accountWebhookRouterCreate) | **POST** /account/webhook/ | 
[**accountWebhookRouterCreateAccountWebhookInAccountWebhookCache**](AccountwebhookApi.md#accountWebhookRouterCreateAccountWebhookInAccountWebhookCache) | **POST** /account/webhook/cache | 
[**accountWebhookRouterDelete**](AccountwebhookApi.md#accountWebhookRouterDelete) | **DELETE** /account/webhook/{webhookId} | 
[**accountWebhookRouterDeleteAccountWebhookInAccountWebhookCache**](AccountwebhookApi.md#accountWebhookRouterDeleteAccountWebhookInAccountWebhookCache) | **DELETE** /account/webhook/cache | 
[**accountWebhookRouterGet**](AccountwebhookApi.md#accountWebhookRouterGet) | **GET** /account/webhook/{webhookId} | 
[**accountWebhookRouterGetAll**](AccountwebhookApi.md#accountWebhookRouterGetAll) | **GET** /account/webhook/ | 
[**accountWebhookRouterUpdate**](AccountwebhookApi.md#accountWebhookRouterUpdate) | **PUT** /account/webhook/{webhookId} | 


# **accountWebhookRouterCount**
> \Swagger\Client\Model\ModelsCountStat accountWebhookRouterCount($x_account_api_key)



Count Total AccountWebhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountwebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->accountWebhookRouterCount($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountwebhookApi->accountWebhookRouterCount: ', $e->getMessage(), PHP_EOL;
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

# **accountWebhookRouterCreate**
> \Swagger\Client\Model\ModelsAccountWebhook accountWebhookRouterCreate($x_account_api_key, $body)



Create AccountWebhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountwebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsEWebhook(); // \Swagger\Client\Model\ModelsEWebhook | The AccountWebhook content

try {
    $result = $apiInstance->accountWebhookRouterCreate($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountwebhookApi->accountWebhookRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsEWebhook**](../Model/ModelsEWebhook.md)| The AccountWebhook content |

### Return type

[**\Swagger\Client\Model\ModelsAccountWebhook**](../Model/ModelsAccountWebhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountWebhookRouterCreateAccountWebhookInAccountWebhookCache**
> accountWebhookRouterCreateAccountWebhookInAccountWebhookCache($body)



Add Account Webhook To AccountWebhook Cache

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountwebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ModelsAccountWebhook(); // \Swagger\Client\Model\ModelsAccountWebhook | Add account webhook to cache

try {
    $apiInstance->accountWebhookRouterCreateAccountWebhookInAccountWebhookCache($body);
} catch (Exception $e) {
    echo 'Exception when calling AccountwebhookApi->accountWebhookRouterCreateAccountWebhookInAccountWebhookCache: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ModelsAccountWebhook**](../Model/ModelsAccountWebhook.md)| Add account webhook to cache |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountWebhookRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse accountWebhookRouterDelete($x_account_api_key, $webhook_id)



Delete AccountWebhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountwebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$webhook_id = 789; // int | The AccountWebhookId you want to delete

try {
    $result = $apiInstance->accountWebhookRouterDelete($x_account_api_key, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountwebhookApi->accountWebhookRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **webhook_id** | **int**| The AccountWebhookId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountWebhookRouterDeleteAccountWebhookInAccountWebhookCache**
> accountWebhookRouterDeleteAccountWebhookInAccountWebhookCache($body)



Delete Account Webhook which is in AccountWebhook Cache

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountwebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ModelsAccountWebhook(); // \Swagger\Client\Model\ModelsAccountWebhook | AccountWebhook content

try {
    $apiInstance->accountWebhookRouterDeleteAccountWebhookInAccountWebhookCache($body);
} catch (Exception $e) {
    echo 'Exception when calling AccountwebhookApi->accountWebhookRouterDeleteAccountWebhookInAccountWebhookCache: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ModelsAccountWebhook**](../Model/ModelsAccountWebhook.md)| AccountWebhook content |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountWebhookRouterGet**
> \Swagger\Client\Model\ModelsAccountWebhook accountWebhookRouterGet($x_account_api_key, $webhook_id)



Find AccountWebhook by AccountWebhookId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountwebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$webhook_id = 789; // int | the AccountWebhookId you want to get

try {
    $result = $apiInstance->accountWebhookRouterGet($x_account_api_key, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountwebhookApi->accountWebhookRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **webhook_id** | **int**| the AccountWebhookId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsAccountWebhook**](../Model/ModelsAccountWebhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountWebhookRouterGetAll**
> \Swagger\Client\Model\ModelsAccountWebhook[] accountWebhookRouterGetAll($x_account_api_key, $offset, $limit, $search)



Get All AccountWebhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountwebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search

try {
    $result = $apiInstance->accountWebhookRouterGetAll($x_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountwebhookApi->accountWebhookRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **search** | **string**| search | [optional]

### Return type

[**\Swagger\Client\Model\ModelsAccountWebhook[]**](../Model/ModelsAccountWebhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountWebhookRouterUpdate**
> \Swagger\Client\Model\ModelsAccountWebhook accountWebhookRouterUpdate($x_account_api_key, $webhook_id, $body)



Update AccountWebhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountwebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$webhook_id = 789; // int | The AccountWebhookId you want to update
$body = new \Swagger\Client\Model\ModelsEWebhook(); // \Swagger\Client\Model\ModelsEWebhook | The body

try {
    $result = $apiInstance->accountWebhookRouterUpdate($x_account_api_key, $webhook_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountwebhookApi->accountWebhookRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **webhook_id** | **int**| The AccountWebhookId you want to update |
 **body** | [**\Swagger\Client\Model\ModelsEWebhook**](../Model/ModelsEWebhook.md)| The body |

### Return type

[**\Swagger\Client\Model\ModelsAccountWebhook**](../Model/ModelsAccountWebhook.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

