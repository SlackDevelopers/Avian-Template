# Swagger\Client\InviteApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1RemoveInviteId**](InviteApi.md#deleteapiv1removeinviteid) | **DELETE** /api/v1/removeInvite/{_id} | Delete Invite by ID
[**getApiV1ListInvites**](InviteApi.md#getapiv1listinvites) | **GET** /api/v1/listInvites | List Invites
[**postApiV1FindOrCreateInvite**](InviteApi.md#postapiv1findorcreateinvite) | **POST** /api/v1/findOrCreateInvite | Find or Create Invite
[**postApiV1UseInviteToken**](InviteApi.md#postapiv1useinvitetoken) | **POST** /api/v1/useInviteToken | Report Invite Token Usage
[**postApiV1ValidateInviteToken**](InviteApi.md#postapiv1validateinvitetoken) | **POST** /api/v1/validateInviteToken | Validate Invite Token

# **deleteApiV1RemoveInviteId**
> \Swagger\Client\Model\InlineResponse2001 deleteApiV1RemoveInviteId($x_auth_token, $x_user_id, $_id)

Delete Invite by ID

Deletes an invite from the workspace.    <a href='https://docs.rocket.chat/docs/permissions' target='_blank'>Permission</a> required: `create-invite-links`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$_id = "_id_example"; // string | The invite ID to be deleted.

try {
    $result = $apiInstance->deleteApiV1RemoveInviteId($x_auth_token, $x_user_id, $_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->deleteApiV1RemoveInviteId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **_id** | **string**| The invite ID to be deleted. |

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1ListInvites**
> \Swagger\Client\Model\InlineResponse20014[] getApiV1ListInvites()

List Invites

Lists all of the invites on the workspace.   <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">Permission</a> required: `create-invite-links`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getApiV1ListInvites();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->getApiV1ListInvites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1FindOrCreateInvite**
> \Swagger\Client\Model\InlineResponse20014[] postApiV1FindOrCreateInvite($x_auth_token, $x_user_id, $body)

Find or Create Invite

Creates or return an existing invite with the specified parameters.   <a href=\"https://docs.rocket.chat/docs/permissions\" target=\"_blank\">Permission</a> required: `create-invite-links`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1FindOrCreateInviteBody(); // \Swagger\Client\Model\V1FindOrCreateInviteBody | 

try {
    $result = $apiInstance->postApiV1FindOrCreateInvite($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->postApiV1FindOrCreateInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1FindOrCreateInviteBody**](../Model/V1FindOrCreateInviteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014[]**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UseInviteToken**
> \Swagger\Client\Model\InlineResponse20015 postApiV1UseInviteToken($x_auth_token, $x_user_id, $body)

Report Invite Token Usage

Report to the workspace that an invite token was used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\V1UseInviteTokenBody(); // \Swagger\Client\Model\V1UseInviteTokenBody | 

try {
    $result = $apiInstance->postApiV1UseInviteToken($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->postApiV1UseInviteToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\V1UseInviteTokenBody**](../Model/V1UseInviteTokenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ValidateInviteToken**
> \Swagger\Client\Model\InlineResponse20016 postApiV1ValidateInviteToken($body)

Validate Invite Token

Checks if an invite token is valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\InviteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1ValidateInviteTokenBody(); // \Swagger\Client\Model\V1ValidateInviteTokenBody | 

try {
    $result = $apiInstance->postApiV1ValidateInviteToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InviteApi->postApiV1ValidateInviteToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1ValidateInviteTokenBody**](../Model/V1ValidateInviteTokenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

