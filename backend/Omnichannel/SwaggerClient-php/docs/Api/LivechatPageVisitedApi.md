# Swagger\Client\LivechatPageVisitedApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiV1LivechatPageVisited**](LivechatPageVisitedApi.md#postapiv1livechatpagevisited) | **POST** /api/v1/livechat/page.visited | Send Visitor navigation history

# **postApiV1LivechatPageVisited**
> \Swagger\Client\Model\InlineResponse20044 postApiV1LivechatPageVisited($body)

Send Visitor navigation history

Retrieves the pages your omnichannel user navigated on your website.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatPageVisitedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LivechatPageVisitedBody(); // \Swagger\Client\Model\LivechatPageVisitedBody | 

try {
    $result = $apiInstance->postApiV1LivechatPageVisited($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatPageVisitedApi->postApiV1LivechatPageVisited: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LivechatPageVisitedBody**](../Model/LivechatPageVisitedBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

