# Swagger\Client\AccountpaymentApi

All URIs are relative to *https://api.sendpost.io/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**paymentRouterCreateCustomerPortal**](AccountpaymentApi.md#paymentRouterCreateCustomerPortal) | **POST** /account/payment/portal | 
[**paymentRouterCreatePaymentSubscription**](AccountpaymentApi.md#paymentRouterCreatePaymentSubscription) | **POST** /account/payment/subscription | 
[**paymentRouterHandlePaymentWebhook**](AccountpaymentApi.md#paymentRouterHandlePaymentWebhook) | **POST** /account/payment/webhook | 


# **paymentRouterCreateCustomerPortal**
> \Swagger\Client\Model\ModelsBillingPortalSession paymentRouterCreateCustomerPortal($x_account_api_key)



Create Customer Portal for account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountpaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key

try {
    $result = $apiInstance->paymentRouterCreateCustomerPortal($x_account_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountpaymentApi->paymentRouterCreateCustomerPortal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |

### Return type

[**\Swagger\Client\Model\ModelsBillingPortalSession**](../Model/ModelsBillingPortalSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentRouterCreatePaymentSubscription**
> \Swagger\Client\Model\ModelsPaymentStatus paymentRouterCreatePaymentSubscription($x_account_api_key, $body)



Create Payment Subscription for Stripe

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountpaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_account_api_key = "x_account_api_key_example"; // string | Account API Key
$body = new \Swagger\Client\Model\ModelsPaymentOptions(); // \Swagger\Client\Model\ModelsPaymentOptions | PaymentOptions content

try {
    $result = $apiInstance->paymentRouterCreatePaymentSubscription($x_account_api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountpaymentApi->paymentRouterCreatePaymentSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_account_api_key** | **string**| Account API Key |
 **body** | [**\Swagger\Client\Model\ModelsPaymentOptions**](../Model/ModelsPaymentOptions.md)| PaymentOptions content |

### Return type

[**\Swagger\Client\Model\ModelsPaymentStatus**](../Model/ModelsPaymentStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **paymentRouterHandlePaymentWebhook**
> paymentRouterHandlePaymentWebhook()



Handle Payment Related Webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountpaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->paymentRouterHandlePaymentWebhook();
} catch (Exception $e) {
    echo 'Exception when calling AccountpaymentApi->paymentRouterHandlePaymentWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

