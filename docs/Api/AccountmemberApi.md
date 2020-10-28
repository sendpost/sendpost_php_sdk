# Swagger\Client\AccountmemberApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**memberRouterDelete**](AccountmemberApi.md#memberRouterDelete) | **DELETE** /account/member/{memberId} | 
[**memberRouterGet**](AccountmemberApi.md#memberRouterGet) | **GET** /account/member/{memberId} | 
[**memberRouterGetAll**](AccountmemberApi.md#memberRouterGetAll) | **GET** /account/member/ | 


# **memberRouterDelete**
> \Swagger\Client\Model\ModelsDeleteResponse memberRouterDelete($x_account_api_key, $member_id)



Delete Member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountmemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$member_id = 789; // int | The MemberId you want to delete

try {
    $result = $apiInstance->memberRouterDelete($x_account_api_key, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountmemberApi->memberRouterDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **member_id** | **int**| The MemberId you want to delete |

### Return type

[**\Swagger\Client\Model\ModelsDeleteResponse**](../Model/ModelsDeleteResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memberRouterGet**
> \Swagger\Client\Model\ModelsMember memberRouterGet($x_account_api_key, $member_id)



Find Member by MemberId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountmemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$member_id = 789; // int | the MemberId you want to get

try {
    $result = $apiInstance->memberRouterGet($x_account_api_key, $member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountmemberApi->memberRouterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **member_id** | **int**| the MemberId you want to get |

### Return type

[**\Swagger\Client\Model\ModelsMember**](../Model/ModelsMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memberRouterGetAll**
> \Swagger\Client\Model\ModelsMember[] memberRouterGetAll($x_account_api_key)



Get All Members

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountmemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->memberRouterGetAll($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountmemberApi->memberRouterGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsMember[]**](../Model/ModelsMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

