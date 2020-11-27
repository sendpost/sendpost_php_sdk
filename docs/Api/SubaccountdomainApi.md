# Swagger\Client\SubaccountdomainApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**domainRouterCount**](SubaccountdomainApi.md#domainRouterCount) | **GET** /subaccount/domain/count | 
[**domainRouterCreate**](SubaccountdomainApi.md#domainRouterCreate) | **POST** /subaccount/domain/ | 
[**domainRouterDelete**](SubaccountdomainApi.md#domainRouterDelete) | **DELETE** /subaccount/domain/{domainId} | 
[**domainRouterGet**](SubaccountdomainApi.md#domainRouterGet) | **GET** /subaccount/domain/{domainId} | 
[**domainRouterGetAll**](SubaccountdomainApi.md#domainRouterGetAll) | **GET** /subaccount/domain/ | 
[**domainRouterUpdate**](SubaccountdomainApi.md#domainRouterUpdate) | **PUT** /subaccount/domain/{domainId} | 
[**domainRouterVerify**](SubaccountdomainApi.md#domainRouterVerify) | **POST** /subaccount/domain/{domainId}/verify | 
[**domainRouterVerifyByToken**](SubaccountdomainApi.md#domainRouterVerifyByToken) | **POST** /subaccount/domain/{domainId}/verify/email/{token} | 
[**domainRouterVerifyRequest**](SubaccountdomainApi.md#domainRouterVerifyRequest) | **POST** /subaccount/domain/{domainId}/verify/email | 


# **domainRouterCount**
> \Swagger\Client\Model\ModelsCountStat domainRouterCount($x_sub_account_api_key)



Count Total Domains

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key

try {
    $result = $apiInstance->domainRouterCount($x_sub_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsCountStat**](../Model/ModelsCountStat.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRouterCreate**
> \Swagger\Client\Model\ModelsDomain domainRouterCreate($x_sub_account_api_key, $body)



Create Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$body = new \Swagger\Client\Model\ModelsEDomain(); // \Swagger\Client\Model\ModelsEDomain | The Domain content

try {
    $result = $apiInstance->domainRouterCreate($x_sub_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsEDomain**](../Model/ModelsEDomain.md)| The Domain content |

### Return type

[**\Swagger\Client\Model\ModelsDomain**](../Model/ModelsDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse domainRouterDelete($x_sub_account_api_key, $domain_id)



Delete Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$domain_id = 789; // int | The DomainId you want to delete

try {
    $result = $apiInstance->domainRouterDelete($x_sub_account_api_key, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **domain_id** | **int**| The DomainId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRouterGet**
> \Swagger\Client\Model\ModelsDomain domainRouterGet($x_sub_account_api_key, $domain_id)



Find Domain by DomainId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$domain_id = 789; // int | the DomainId you want to get

try {
    $result = $apiInstance->domainRouterGet($x_sub_account_api_key, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **domain_id** | **int**| the DomainId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsDomain**](../Model/ModelsDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRouterGetAll**
> \Swagger\Client\Model\ModelsDomain[] domainRouterGetAll($x_sub_account_api_key, $offset, $limit, $search)



Get All Domains

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$offset = 789; // int | offset
$limit = 789; // int | limit
$search = "search_example"; // string | search term

try {
    $result = $apiInstance->domainRouterGetAll($x_sub_account_api_key, $offset, $limit, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **offset** | **int**| offset | [optional]
 **limit** | **int**| limit | [optional]
 **search** | **string**| search term | [optional]

### Return type

[**\Swagger\Client\Model\ModelsDomain[]**](../Model/ModelsDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRouterUpdate**
> \Swagger\Client\Model\ModelsDomain domainRouterUpdate($x_sub_account_api_key, $domain_id, $body)



Update Domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$domain_id = 789; // int | The DomainId you want to update
$body = new \Swagger\Client\Model\ModelsEDomain(); // \Swagger\Client\Model\ModelsEDomain | The body

try {
    $result = $apiInstance->domainRouterUpdate($x_sub_account_api_key, $domain_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **domain_id** | **int**| The DomainId you want to update |
 **body** | [**\Swagger\Client\Model\ModelsEDomain**](../Model/ModelsEDomain.md)| The body |

### Return type

[**\Swagger\Client\Model\ModelsDomain**](../Model/ModelsDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRouterVerify**
> \Swagger\Client\Model\ModelsDomain domainRouterVerify($x_sub_account_api_key, $domain_id)



Verify Domain By Domain Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$domain_id = 789; // int | the DomainId you want to get

try {
    $result = $apiInstance->domainRouterVerify($x_sub_account_api_key, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterVerify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **domain_id** | **int**| the DomainId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsDomain**](../Model/ModelsDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRouterVerifyByToken**
> \Swagger\Client\Model\ModelsDomain domainRouterVerifyByToken($x_sub_account_api_key, $domain_id, $token)



Verify Domain By Signed Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$domain_id = 789; // int | the DomainId you want to get
$token = "token_example"; // string | The signed token used to verify

try {
    $result = $apiInstance->domainRouterVerifyByToken($x_sub_account_api_key, $domain_id, $token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterVerifyByToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **domain_id** | **int**| the DomainId you want to get |
 **token** | **string**| The signed token used to verify |

### Return type

[**\Swagger\Client\Model\ModelsDomain**](../Model/ModelsDomain.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **domainRouterVerifyRequest**
> domainRouterVerifyRequest($x_sub_account_api_key, $domain_id, $body)



Verify Domain By Email Request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SubaccountdomainApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_sub_account_api_key = "x_sub_account_api_key_example"; // string | Sub-Account API Key
$domain_id = 789; // int | the DomainId you want to get
$body = new \Swagger\Client\Model\ModelsVerifyByTokenRequest(); // \Swagger\Client\Model\ModelsVerifyByTokenRequest | The Email to be used to verify

try {
    $apiInstance->domainRouterVerifyRequest($x_sub_account_api_key, $domain_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountdomainApi->domainRouterVerifyRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_sub_account_api_key** | **string**| Sub-Account API Key |
 **domain_id** | **int**| the DomainId you want to get |
 **body** | [**\Swagger\Client\Model\ModelsVerifyByTokenRequest**](../Model/ModelsVerifyByTokenRequest.md)| The Email to be used to verify |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

