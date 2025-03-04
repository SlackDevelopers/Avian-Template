# Swagger\Client\SettingsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1ServiceConfigurations**](SettingsApi.md#getapiv1serviceconfigurations) | **GET** /api/v1/service.configurations | Get OAuth Service Configuration
[**getApiV1Settings**](SettingsApi.md#getapiv1settings) | **GET** /api/v1/settings | Get Private Settings
[**getApiV1SettingsId**](SettingsApi.md#getapiv1settingsid) | **GET** /api/v1/settings/{_id} | Get Setting
[**getApiV1SettingsOauth**](SettingsApi.md#getapiv1settingsoauth) | **GET** /api/v1/settings.oauth | Get OAuth Settings
[**getApiV1SettingsPublic**](SettingsApi.md#getapiv1settingspublic) | **GET** /api/v1/settings.public | Get Public Settings
[**postApiV1SettingsAddCustomOAuth**](SettingsApi.md#postapiv1settingsaddcustomoauth) | **POST** /api/v1/settings.addCustomOAuth | Add Custom OAuth
[**postApiV1SettingsId**](SettingsApi.md#postapiv1settingsid) | **POST** /api/v1/settings/{_id} | Update Setting

# **getApiV1ServiceConfigurations**
> \Swagger\Client\Model\InlineResponse2004 getApiV1ServiceConfigurations()

Get OAuth Service Configuration

List out all the active OAuth services configured with details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiV1ServiceConfigurations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1ServiceConfigurations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1Settings**
> \Swagger\Client\Model\InlineResponse200 getApiV1Settings($x_user_id, $x_auth_token, $include_defaults, $offset, $count)

Get Private Settings

List all private settings. Learn how this can be used in configuring your server in this <a href=\"https://docs.rocket.chat/docs/deployment-environment-variables\" target=\"_blank\">guide</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$include_defaults = true; // bool | When set to true, it fetches both the current value and the default value (packageValue) of the settings
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | How many items to return.

try {
    $result = $apiInstance->getApiV1Settings($x_user_id, $x_auth_token, $include_defaults, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1Settings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **include_defaults** | **bool**| When set to true, it fetches both the current value and the default value (packageValue) of the settings | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| How many items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1SettingsId**
> \Swagger\Client\Model\InlineResponse2003 getApiV1SettingsId($_id, $x_user_id, $x_auth_token)

Get Setting

Get details of a setting by ID. Permission required: `view-privileged-setting` ### Changelog | Version      | Description | | ---------------- | ------------| |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$_id = "_id_example"; // string | The unique ID of the setting that you want to update or fetch.
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1SettingsId($_id, $x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1SettingsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_id** | **string**| The unique ID of the setting that you want to update or fetch. |
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1SettingsOauth**
> \Swagger\Client\Model\InlineResponse2001 getApiV1SettingsOauth()

Get OAuth Settings

List all the <a href=\"https://docs.rocket.chat/docs/oauth\" target=\"_blank\"> OAuth services</a>. enabled in the workspace. ### Changelog | Version      | Description | | ---------------- | ------------| |0.64.0            | Renamed field `appId` to `clientId` and added flag `custom` to indicate whether the OAuth service is customized and fix `id` inconsistence (set all cases to `_id`)       | |0.63.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiV1SettingsOauth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1SettingsOauth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1SettingsPublic**
> \Swagger\Client\Model\InlineResponse200 getApiV1SettingsPublic($offset, $count, $sort, $fields, $_id)

Get Public Settings

List all public settings. Learn how this can be used in configuring your workspace in this <a href=\"https://docs.rocket.chat/docs/manage-settings-using-environmental-variables\" target=\"_blank\">guide</a>.  ### Changelog | Version      | Description | | ---------------- | ------------| |7.0.0            | Added the `_id` query parameter for filtering.| |7.0.0            | Removed the `query` parameter.      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | How many items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$fields = new \Swagger\Client\Model\null(); //  | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: `fields={ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$_id = "_id_example"; // string | Filter by the `_id` of the settings.

try {
    $result = $apiInstance->getApiV1SettingsPublic($offset, $count, $sort, $fields, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->getApiV1SettingsPublic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| How many items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **fields** | [****](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: &#x60;fields&#x3D;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **_id** | **string**| Filter by the &#x60;_id&#x60; of the settings. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1SettingsAddCustomOAuth**
> \Swagger\Client\Model\InlineResponse2002 postApiV1SettingsAddCustomOAuth($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $body)

Add Custom OAuth

Add a <a href=\" https://docs.rocket.chat/docs/oauth#add-custom-oauth\" target=\"_blank\">custom OAuth integration</a> to your workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$x_2fa_code = "x_2fa_code_example"; // string | The 2FA code from the authentication method. If the method is password, encrypt it as SHA256.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\V1SettingsAddCustomOAuthBody(); // \Swagger\Client\Model\V1SettingsAddCustomOAuthBody | 

try {
    $result = $apiInstance->postApiV1SettingsAddCustomOAuth($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->postApiV1SettingsAddCustomOAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **x_2fa_code** | **string**| The 2FA code from the authentication method. If the method is password, encrypt it as SHA256. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\V1SettingsAddCustomOAuthBody**](../Model/V1SettingsAddCustomOAuthBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1SettingsId**
> \Swagger\Client\Model\InlineResponse2002 postApiV1SettingsId($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $_id, $body)

Update Setting

Permission required: `edit-privileged-setting`  The `_id` of a setting is the first argument of the `RocketChat.settings.add` method used in `Rocket.Chat/packages/rocketchat-lib/server/startup/settings.js` (among other files).   For example, the following code in `settings.js` file:   ```json   this.add('Accounts_AllowAnonymousRead', false, {     type: 'boolean',     public: true  });   ```   This means that the setting labeled `Allow anonymous read` in the section `Accounts` has `_id` equal to `Accounts_AllowAnonymousRead`. The second argument is the default value (false). The third argument specifies the variable's type and whether it is public, hidden, and so on.       To set a color, you can send:   ```json   { value: '<color-code>',     editor: 'color' }   ```      And also to trigger a action-button, use:   ```json   { execute: true }   ```   ### Changelog   | Version      | Description |   | ---------------- | ------------|   |0.65.0            | Added option to set a color and trigger an action       |   |0.42.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SettingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$x_2fa_code = "x_2fa_code_example"; // string | The 2FA code from the authentication method. If the method is password, encrypt it as SHA256.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$_id = "_id_example"; // string | The unique ID of the setting that you want to update or fetch.
$body = new \Swagger\Client\Model\SettingsIdBody(); // \Swagger\Client\Model\SettingsIdBody | 

try {
    $result = $apiInstance->postApiV1SettingsId($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->postApiV1SettingsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **x_2fa_code** | **string**| The 2FA code from the authentication method. If the method is password, encrypt it as SHA256. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **_id** | **string**| The unique ID of the setting that you want to update or fetch. |
 **body** | [**\Swagger\Client\Model\SettingsIdBody**](../Model/SettingsIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

