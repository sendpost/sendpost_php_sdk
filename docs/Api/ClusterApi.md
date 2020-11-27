# Swagger\Client\ClusterApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clusterRouterDeleteItemFromCacheOfEveryNodeInCluster**](ClusterApi.md#clusterRouterDeleteItemFromCacheOfEveryNodeInCluster) | **DELETE** /cluster/cache | 
[**clusterRouterDeleteItemFromCacheOfSpecificNodeInCluster**](ClusterApi.md#clusterRouterDeleteItemFromCacheOfSpecificNodeInCluster) | **DELETE** /cluster/cache/node | 


# **clusterRouterDeleteItemFromCacheOfEveryNodeInCluster**
> clusterRouterDeleteItemFromCacheOfEveryNodeInCluster($x_system_api_key, $name, $key)



Delete item from cache of every node in cluster

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_system_api_key = "x_system_api_key_example"; // string | System API Key
$name = "name_example"; // string | cache name
$key = "key_example"; // string | cache item key to delete

try {
    $apiInstance->clusterRouterDeleteItemFromCacheOfEveryNodeInCluster($x_system_api_key, $name, $key);
} catch (Exception $e) {
    echo 'Exception when calling ClusterApi->clusterRouterDeleteItemFromCacheOfEveryNodeInCluster: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_system_api_key** | **string**| System API Key |
 **name** | **string**| cache name | [optional]
 **key** | **string**| cache item key to delete | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clusterRouterDeleteItemFromCacheOfSpecificNodeInCluster**
> clusterRouterDeleteItemFromCacheOfSpecificNodeInCluster($x_system_api_key, $name, $key)



Delete item from cache of specific node in cluster

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_system_api_key = "x_system_api_key_example"; // string | System API Key
$name = "name_example"; // string | cache name
$key = "key_example"; // string | cache item key to delete

try {
    $apiInstance->clusterRouterDeleteItemFromCacheOfSpecificNodeInCluster($x_system_api_key, $name, $key);
} catch (Exception $e) {
    echo 'Exception when calling ClusterApi->clusterRouterDeleteItemFromCacheOfSpecificNodeInCluster: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_system_api_key** | **string**| System API Key |
 **name** | **string**| cache name | [optional]
 **key** | **string**| cache item key to delete | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

