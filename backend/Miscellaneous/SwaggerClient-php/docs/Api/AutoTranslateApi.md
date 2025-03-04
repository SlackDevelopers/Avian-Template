# Swagger\Client\AutoTranslateApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1AutotranslateGetSupportedLanguages**](AutoTranslateApi.md#getapiv1autotranslategetsupportedlanguages) | **GET** /api/v1/autotranslate.getSupportedLanguages | Get Supported Languages
[**postApiV1AutotranslateSaveSettings**](AutoTranslateApi.md#postapiv1autotranslatesavesettings) | **POST** /api/v1/autotranslate.saveSettings | Save Auto-Translate  Settings
[**postApiV1AutotranslateTranslateMessage**](AutoTranslateApi.md#postapiv1autotranslatetranslatemessage) | **POST** /api/v1/autotranslate.translateMessage | Translate Message

# **getApiV1AutotranslateGetSupportedLanguages**
> \Swagger\Client\Model\InlineResponse200 getApiV1AutotranslateGetSupportedLanguages($x_auth_token, $x_user_id, $target_language)

Get Supported Languages

To learn how to enable the auto-translate feature, see the <a href=\"https://docs.rocket.chat/docs/message#autotranslate\" target=\"_blank\">Auto-Translate</a> user guide.  Get the supported languages by the auto-translate. ### Changelog | Version      | Description | | ---------------- | ------------| |1.3.0          | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AutoTranslateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$target_language = "target_language_example"; // string | Language in which the language names will be returned.

try {
    $result = $apiInstance->getApiV1AutotranslateGetSupportedLanguages($x_auth_token, $x_user_id, $target_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoTranslateApi->getApiV1AutotranslateGetSupportedLanguages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **target_language** | **string**| Language in which the language names will be returned. |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1AutotranslateSaveSettings**
> \Swagger\Client\Model\InlineResponse2001 postApiV1AutotranslateSaveSettings($x_auth_token, $x_user_id, $body)

Save Auto-Translate  Settings

Saves autotranslate settings for a room. ### Changelog | Version      | Description | | ---------------- | ------------| |1.3.0          | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AutoTranslateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1AutotranslateSaveSettingsBody(); // \Swagger\Client\Model\V1AutotranslateSaveSettingsBody | 

try {
    $result = $apiInstance->postApiV1AutotranslateSaveSettings($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoTranslateApi->postApiV1AutotranslateSaveSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1AutotranslateSaveSettingsBody**](../Model/V1AutotranslateSaveSettingsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1AutotranslateTranslateMessage**
> \Swagger\Client\Model\InlineResponse2002 postApiV1AutotranslateTranslateMessage($x_auth_token, $x_user_id, $body)

Translate Message

Auto-translates the provided message. ### Changelog | Version      | Description | | ---------------- | ------------| |1.3.0          | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AutoTranslateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1AutotranslateTranslateMessageBody(); // \Swagger\Client\Model\V1AutotranslateTranslateMessageBody | 

try {
    $result = $apiInstance->postApiV1AutotranslateTranslateMessage($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoTranslateApi->postApiV1AutotranslateTranslateMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1AutotranslateTranslateMessageBody**](../Model/V1AutotranslateTranslateMessageBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

