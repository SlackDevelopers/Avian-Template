# Swagger\Client\CustomEmojiApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1EmojiCustomAll**](CustomEmojiApi.md#getapiv1emojicustomall) | **GET** /api/v1/emoji-custom.all | List All Custom Emojis
[**getApiV1EmojiCustomList**](CustomEmojiApi.md#getapiv1emojicustomlist) | **GET** /api/v1/emoji-custom.list | Get Updated List of Custom Emojis
[**postApiV1EmojiCustomCreate**](CustomEmojiApi.md#postapiv1emojicustomcreate) | **POST** /api/v1/emoji-custom.create | Create an Emoji
[**postApiV1EmojiCustomDelete**](CustomEmojiApi.md#postapiv1emojicustomdelete) | **POST** /api/v1/emoji-custom.delete | Delete a Custom Emoji
[**postApiV1EmojiCustomUpdate**](CustomEmojiApi.md#postapiv1emojicustomupdate) | **POST** /api/v1/emoji-custom.update | Update a Custom Emoji

# **getApiV1EmojiCustomAll**
> \Swagger\Client\Model\InlineResponse200 getApiV1EmojiCustomAll($x_auth_token, $x_user_id)

List All Custom Emojis

List all custom emojis.   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.63.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1EmojiCustomAll($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->getApiV1EmojiCustomAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1EmojiCustomList**
> \Swagger\Client\Model\InlineResponse2002 getApiV1EmojiCustomList($x_auth_token, $x_user_id, $updated_since, $_updated_at, $_id)

Get Updated List of Custom Emojis

Get a list of updated and removed emojis.  ### Changelog | Version      | Description |  | ---------------- | ------------| |7.0.0            | Added  `_id` and  `_updatedAt` query parameter     | |0.75.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$updated_since = "updated_since_example"; // string | Date since the emojis were updated. Format: ISO string. When you provide the `updatedSince` query parameter in the URL then the `update` and `remove` in the response will contain only those updated and removed since this date and time.
$_updated_at = "_updated_at_example"; // string | 
$_id = "_id_example"; // string | Filter list by custom emoji id.

try {
    $result = $apiInstance->getApiV1EmojiCustomList($x_auth_token, $x_user_id, $updated_since, $_updated_at, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->getApiV1EmojiCustomList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **updated_since** | **string**| Date since the emojis were updated. Format: ISO string. When you provide the &#x60;updatedSince&#x60; query parameter in the URL then the &#x60;update&#x60; and &#x60;remove&#x60; in the response will contain only those updated and removed since this date and time. | [optional]
 **_updated_at** | **string**|  | [optional]
 **_id** | **string**| Filter list by custom emoji id. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1EmojiCustomCreate**
> \Swagger\Client\Model\InlineResponse2001 postApiV1EmojiCustomCreate($x_auth_token, $x_user_id, $emoji, $name, $aliases)

Create an Emoji

Create a custom emoji.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.74.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$emoji = "emoji_example"; // string | 
$name = "name_example"; // string | 
$aliases = "aliases_example"; // string | 

try {
    $result = $apiInstance->postApiV1EmojiCustomCreate($x_auth_token, $x_user_id, $emoji, $name, $aliases);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->postApiV1EmojiCustomCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **emoji** | **string****string**|  | [optional]
 **name** | **string**|  | [optional]
 **aliases** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1EmojiCustomDelete**
> \Swagger\Client\Model\InlineResponse2001 postApiV1EmojiCustomDelete($x_auth_token, $x_user_id, $body)

Delete a Custom Emoji

Delete a custom emoji.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.74.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1EmojicustomDeleteBody(); // \Swagger\Client\Model\V1EmojicustomDeleteBody | 

try {
    $result = $apiInstance->postApiV1EmojiCustomDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->postApiV1EmojiCustomDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1EmojicustomDeleteBody**](../Model/V1EmojicustomDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1EmojiCustomUpdate**
> \Swagger\Client\Model\InlineResponse2001 postApiV1EmojiCustomUpdate($x_user_id, $x_auth_token, $body)

Update a Custom Emoji

Update a custom emoji. ### Changelog | Version      | Description |  | ---------------- | ------------| |0.74.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CustomEmojiApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$body = new \Swagger\Client\Model\V1EmojicustomUpdateBody(); // \Swagger\Client\Model\V1EmojicustomUpdateBody | If you are updating the image, provide the image file as form data.

try {
    $result = $apiInstance->postApiV1EmojiCustomUpdate($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomEmojiApi->postApiV1EmojiCustomUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1EmojicustomUpdateBody**](../Model/V1EmojicustomUpdateBody.md)| If you are updating the image, provide the image file as form data. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

