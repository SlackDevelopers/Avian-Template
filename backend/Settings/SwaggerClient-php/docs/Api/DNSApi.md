# Swagger\Client\DNSApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiV1DnsResolveSrv**](DNSApi.md#postapiv1dnsresolvesrv) | **POST** /api/v1/dns.resolve.srv | Resolve DNS URL Records
[**postApiV1DnsResolveTxt**](DNSApi.md#postapiv1dnsresolvetxt) | **POST** /api/v1/dns.resolve.txt | Resolve DNS Text Records

# **postApiV1DnsResolveSrv**
> \Swagger\Client\Model\InlineResponse2002 postApiV1DnsResolveSrv($x_user_id, $x_auth_token, $url)

Resolve DNS URL Records

Resolves DNS URL records for a hostname.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$url = "url_example"; // string | The hostname.

try {
    $result = $apiInstance->postApiV1DnsResolveSrv($x_user_id, $x_auth_token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->postApiV1DnsResolveSrv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **url** | **string**| The hostname. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1DnsResolveTxt**
> \Swagger\Client\Model\InlineResponse2002 postApiV1DnsResolveTxt($x_user_id, $x_auth_token, $url)

Resolve DNS Text Records

Resolves DNS text records (TXT records) for a hostname.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DNSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$url = "url_example"; // string | The hostname.

try {
    $result = $apiInstance->postApiV1DnsResolveTxt($x_user_id, $x_auth_token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DNSApi->postApiV1DnsResolveTxt: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **url** | **string**| The hostname. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

