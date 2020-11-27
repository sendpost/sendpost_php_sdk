# Swagger\Client\AccounttemplateApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTemplateRouterCreate**](AccounttemplateApi.md#accountTemplateRouterCreate) | **POST** /account/template/ | 
[**accountTemplateRouterDelete**](AccounttemplateApi.md#accountTemplateRouterDelete) | **DELETE** /account/template/{templateid} | 
[**accountTemplateRouterGet**](AccounttemplateApi.md#accountTemplateRouterGet) | **GET** /account/template/{templateid} | 
[**accountTemplateRouterGetAll**](AccounttemplateApi.md#accountTemplateRouterGetAll) | **GET** /account/template/ | 
[**accountTemplateRouterUpdate**](AccounttemplateApi.md#accountTemplateRouterUpdate) | **PUT** /account/template/{templateid} | 


# **accountTemplateRouterCreate**
> \Swagger\Client\Model\ModelsAccountTemplate accountTemplateRouterCreate($x_account_api_key, $body)



Create a new template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounttemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsAccountTemplate(); // \Swagger\Client\Model\ModelsAccountTemplate | The AccountTemplate content

try {
    $result = $apiInstance->accountTemplateRouterCreate($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounttemplateApi->accountTemplateRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsAccountTemplate**](../Model/ModelsAccountTemplate.md)| The AccountTemplate content |

### Return type

[**\Swagger\Client\Model\ModelsAccountTemplate**](../Model/ModelsAccountTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountTemplateRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse accountTemplateRouterDelete($x_account_api_key, $templateid)



Delete AccountTemplate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounttemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$templateid = 789; // int | The id of the template you want to delete

try {
    $result = $apiInstance->accountTemplateRouterDelete($x_account_api_key, $templateid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounttemplateApi->accountTemplateRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **templateid** | **int**| The id of the template you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountTemplateRouterGet**
> \Swagger\Client\Model\ModelsAccountTemplate accountTemplateRouterGet($x_account_api_key, $templateid)



Get single template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounttemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$templateid = 789; // int | ID of the template required

try {
    $result = $apiInstance->accountTemplateRouterGet($x_account_api_key, $templateid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounttemplateApi->accountTemplateRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **templateid** | **int**| ID of the template required |

### Return type

[**\Swagger\Client\Model\ModelsAccountTemplate**](../Model/ModelsAccountTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountTemplateRouterGetAll**
> \Swagger\Client\Model\ModelsAccountTemplate[] accountTemplateRouterGetAll($x_account_api_key)



Get all templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounttemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->accountTemplateRouterGetAll($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounttemplateApi->accountTemplateRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsAccountTemplate[]**](../Model/ModelsAccountTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountTemplateRouterUpdate**
> \Swagger\Client\Model\ModelsAccountTemplate accountTemplateRouterUpdate($x_account_api_key, $templateid, $body)



update template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccounttemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$templateid = 789; // int | The id of the template you want to update
$body = new \Swagger\Client\Model\ModelsAccountTemplate(); // \Swagger\Client\Model\ModelsAccountTemplate | The template content

try {
    $result = $apiInstance->accountTemplateRouterUpdate($x_account_api_key, $templateid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccounttemplateApi->accountTemplateRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **templateid** | **int**| The id of the template you want to update |
 **body** | [**\Swagger\Client\Model\ModelsAccountTemplate**](../Model/ModelsAccountTemplate.md)| The template content |

### Return type

[**\Swagger\Client\Model\ModelsAccountTemplate**](../Model/ModelsAccountTemplate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

