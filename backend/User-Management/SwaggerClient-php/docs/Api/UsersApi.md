# Swagger\Client\UsersApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1AvatarSubject**](UsersApi.md#getapiv1avatarsubject) | **GET** /api/v1/avatar/{subject} | Get Avatars
[**getApiV1UsersAutocomplete**](UsersApi.md#getapiv1usersautocomplete) | **GET** /api/v1/users.autocomplete | Autocomplete User
[**getApiV1UsersCheckUsernameAvailability**](UsersApi.md#getapiv1userscheckusernameavailability) | **GET** /api/v1/users.checkUsernameAvailability | Check Username Availability
[**getApiV1UsersGetAvatar**](UsersApi.md#getapiv1usersgetavatar) | **GET** /api/v1/users.getAvatar | Get User Avatar
[**getApiV1UsersGetPersonalAccessTokens**](UsersApi.md#getapiv1usersgetpersonalaccesstokens) | **GET** /api/v1/users.getPersonalAccessTokens | Get Personal Access Tokens
[**getApiV1UsersGetPreferences**](UsersApi.md#getapiv1usersgetpreferences) | **GET** /api/v1/users.getPreferences | Get User&#x27;s Preferences
[**getApiV1UsersGetPresence**](UsersApi.md#getapiv1usersgetpresence) | **GET** /api/v1/users.getPresence | Get Specific User&#x27;s Presence
[**getApiV1UsersGetStatus**](UsersApi.md#getapiv1usersgetstatus) | **GET** /api/v1/users.getStatus | Get Status
[**getApiV1UsersGetUsernameSuggestion**](UsersApi.md#getapiv1usersgetusernamesuggestion) | **GET** /api/v1/users.getUsernameSuggestion | Get Username Suggestion
[**getApiV1UsersInfo**](UsersApi.md#getapiv1usersinfo) | **GET** /api/v1/users.info | Get User&#x27;s Info
[**getApiV1UsersList**](UsersApi.md#getapiv1userslist) | **GET** /api/v1/users.list | Get Users List
[**getApiV1UsersListByStatus**](UsersApi.md#getapiv1userslistbystatus) | **GET** /api/v1/users.listByStatus | List Users by Status
[**getApiV1UsersListTeams**](UsersApi.md#getapiv1userslistteams) | **GET** /api/v1/users.listTeams | List User&#x27;s Teams
[**getApiV1UsersPresence**](UsersApi.md#getapiv1userspresence) | **GET** /api/v1/users.presence | Get Users Presence
[**getApiV1UsersRequestDataDownload**](UsersApi.md#getapiv1usersrequestdatadownload) | **GET** /api/v1/users.requestDataDownload | Request Data Download
[**getApiV1UsersSendWelcomeEmail**](UsersApi.md#getapiv1userssendwelcomeemail) | **POST** /api/v1/users.sendWelcomeEmail | Send Welcome Email to User
[**postApiV1ModerationReportUser**](UsersApi.md#postapiv1moderationreportuser) | **POST** /api/v1/moderation.reportUser | Report User
[**postApiV1UsersCreate**](UsersApi.md#postapiv1userscreate) | **POST** /api/v1/users.create | Create User
[**postApiV1UsersCreateToken**](UsersApi.md#postapiv1userscreatetoken) | **POST** /api/v1/users.createToken | Create Users Token
[**postApiV1UsersDeactivateIdle**](UsersApi.md#postapiv1usersdeactivateidle) | **POST** /api/v1/users.deactivateIdle | Deactivate Idle Users
[**postApiV1UsersDelete**](UsersApi.md#postapiv1usersdelete) | **POST** /api/v1/users.delete | Delete User
[**postApiV1UsersDeleteOwnAccount**](UsersApi.md#postapiv1usersdeleteownaccount) | **POST** /api/v1/users.deleteOwnAccount | Delete Own Account
[**postApiV1UsersForgotPassword**](UsersApi.md#postapiv1usersforgotpassword) | **POST** /api/v1/users.forgotPassword | Forgot Password
[**postApiV1UsersGeneratePersonalAccessToken**](UsersApi.md#postapiv1usersgeneratepersonalaccesstoken) | **POST** /api/v1/users.generatePersonalAccessToken | Generate Personal Access Token
[**postApiV1UsersLogout**](UsersApi.md#postapiv1userslogout) | **POST** /api/v1/users.logout | Logout User
[**postApiV1UsersLogoutOtherClients**](UsersApi.md#postapiv1userslogoutotherclients) | **POST** /api/v1/users.logoutOtherClients | Logout Other Clients
[**postApiV1UsersRegeneratePersonalAccessToken**](UsersApi.md#postapiv1usersregeneratepersonalaccesstoken) | **POST** /api/v1/users.regeneratePersonalAccessToken | Regenerate Personal Access Token
[**postApiV1UsersRegister**](UsersApi.md#postapiv1usersregister) | **POST** /api/v1/users.register | Register User
[**postApiV1UsersRemoveOtherTokens**](UsersApi.md#postapiv1usersremoveothertokens) | **POST** /api/v1/users.removeOtherTokens | Remove Other Tokens
[**postApiV1UsersRemovePersonalAccessToken**](UsersApi.md#postapiv1usersremovepersonalaccesstoken) | **POST** /api/v1/users.removePersonalAccessToken | Remove Personal Access Token
[**postApiV1UsersResetAvatar**](UsersApi.md#postapiv1usersresetavatar) | **POST** /api/v1/users.resetAvatar | Reset Avatar
[**postApiV1UsersResetE2EKey**](UsersApi.md#postapiv1usersresete2ekey) | **POST** /api/v1/users.resetE2EKey | Reset Users E2E Key
[**postApiV1UsersResetTOTP**](UsersApi.md#postapiv1usersresettotp) | **POST** /api/v1/users.resetTOTP | Reset Users TOTP
[**postApiV1UsersSetActiveStatus**](UsersApi.md#postapiv1userssetactivestatus) | **POST** /api/v1/users.setActiveStatus | Set User&#x27;s Status Active
[**postApiV1UsersSetAvatar**](UsersApi.md#postapiv1userssetavatar) | **POST** /api/v1/users.setAvatar | Set User Avatar
[**postApiV1UsersSetPreferences**](UsersApi.md#postapiv1userssetpreferences) | **POST** /api/v1/users.setPreferences | Set User Preferences
[**postApiV1UsersSetStatus**](UsersApi.md#postapiv1userssetstatus) | **POST** /api/v1/users.setStatus | Set User Status
[**postApiV1UsersUpdate**](UsersApi.md#postapiv1usersupdate) | **POST** /api/v1/users.update | Update User Details
[**postApiV1UsersUpdateOwnBasicInfo**](UsersApi.md#postapiv1usersupdateownbasicinfo) | **POST** /api/v1/users.updateOwnBasicInfo | Update Own Basic Information

# **getApiV1AvatarSubject**
> string getApiV1AvatarSubject($subject, $format, $size, $rc_uid, $rc_token)

Get Avatars

Note:   * This is a RESTful endpoint that sits separately from the REST API in the server codebase and behaves slightly differently.   * The `rc_uid` and `rc_token` can alternately be provided as cookies (already present in the web interface), but not as auth headers.   * When requesting the avatar of a user, if they have a custom avatar set, this will override the user's choices of format or size.   * If no uploaded avatar exists for a user, a default one will be generated for them based on the initial of their username in a randomly colored square.   * If `UI_Use_Name_Avatar` is set and the user has a real name set, the generated avatar will be based on their actual name instead of the username.   * If no format is requested, or the format requested isn't supported, the format returned will be SVG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subject = "subject_example"; // string | Name of the user or channel.  Channels are always preceded by an `@` symbol. Rooms that are DMs are always represented by the other participant's user avatar.
$format = "format_example"; // string | Format of the image requested.  The values can be one of: jpg, jpeg, png.
$size = 56; // int | Width and height of the image. Default: 200
$rc_uid = "rc_uid_example"; // string | User ID for authenticating is only required if `Accounts_AvatarBlockUnauthenticatedAccess` is enabled.
$rc_token = "rc_token_example"; // string | User auth token for authenticating is only required if `Accounts_AvatarBlockUnauthenticatedAccess` is enabled.

try {
    $result = $apiInstance->getApiV1AvatarSubject($subject, $format, $size, $rc_uid, $rc_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1AvatarSubject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subject** | **string**| Name of the user or channel.  Channels are always preceded by an &#x60;@&#x60; symbol. Rooms that are DMs are always represented by the other participant&#x27;s user avatar. |
 **format** | **string**| Format of the image requested.  The values can be one of: jpg, jpeg, png. | [optional]
 **size** | **int**| Width and height of the image. Default: 200 | [optional]
 **rc_uid** | **string**| User ID for authenticating is only required if &#x60;Accounts_AvatarBlockUnauthenticatedAccess&#x60; is enabled. | [optional]
 **rc_token** | **string**| User auth token for authenticating is only required if &#x60;Accounts_AvatarBlockUnauthenticatedAccess&#x60; is enabled. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/svg+xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersAutocomplete**
> \Swagger\Client\Model\InlineResponse20029 getApiV1UsersAutocomplete($x_auth_token, $x_user_id, $selector)

Autocomplete User

List the users whose names match a given pattern.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$selector = new \stdClass; // object | Filter the response with the parameters.

try {
    $result = $apiInstance->getApiV1UsersAutocomplete($x_auth_token, $x_user_id, $selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersAutocomplete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **selector** | [**object**](../Model/.md)| Filter the response with the parameters. |

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersCheckUsernameAvailability**
> \Swagger\Client\Model\InlineResponse20024 getApiV1UsersCheckUsernameAvailability($x_auth_token, $x_user_id)

Check Username Availability

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.

try {
    $result = $apiInstance->getApiV1UsersCheckUsernameAvailability($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersCheckUsernameAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersGetAvatar**
> string getApiV1UsersGetAvatar($user_id)

Get User Avatar

### Changelog | Version      | Description | | ------------ | ------------| |0.50.0        | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | The user ID. Alternatively, you can enter the `username` parameter.

try {
    $result = $apiInstance->getApiV1UsersGetAvatar($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The user ID. Alternatively, you can enter the &#x60;username&#x60; parameter. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/svg+xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersGetPersonalAccessTokens**
> \Swagger\Client\Model\InlineResponse20026 getApiV1UsersGetPersonalAccessTokens($x_user_id, $x_auth_token)

Get Personal Access Tokens

Permission required: `create-personal-access-tokens`  ### Changelog | Version      | Description | | ---------------- | ------------| |0.69.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.

try {
    $result = $apiInstance->getApiV1UsersGetPersonalAccessTokens($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetPersonalAccessTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |

### Return type

[**\Swagger\Client\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersGetPreferences**
> \Swagger\Client\Model\InlineResponse20020 getApiV1UsersGetPreferences($x_auth_token, $x_user_id)

Get User's Preferences

Gets all the preferences of the authenticated user in the workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.

try {
    $result = $apiInstance->getApiV1UsersGetPreferences($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersGetPresence**
> \Swagger\Client\Model\InlineResponse20017 getApiV1UsersGetPresence($x_user_id, $x_auth_token, $user_id)

Get Specific User's Presence

### Changelog | Version      | Description | | ---------------- | ------------| |0.49.0            | Updated to support `userId` or `username`       | |0.48.0            | Renamed to `users.getPresence`       | |0.35.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$user_id = "user_id_example"; // string | The user ID. Alternatively, you can enter the `username` parameter. If not provided, the user who sending the request is retrieved.

try {
    $result = $apiInstance->getApiV1UsersGetPresence($x_user_id, $x_auth_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetPresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **user_id** | **string**| The user ID. Alternatively, you can enter the &#x60;username&#x60; parameter. If not provided, the user who sending the request is retrieved. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersGetStatus**
> \Swagger\Client\Model\InlineResponse20014 getApiV1UsersGetStatus($user_id)

Get Status

Gets a user's status in your workspace.  ### Changelog | Version      | Description | | ---------------- | ------------| |1.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_id = "user_id_example"; // string | The `userId` of the user. Alternatively, you can use the `username` property and value. If the value is not provided, the authenticated user is used.

try {
    $result = $apiInstance->getApiV1UsersGetStatus($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| The &#x60;userId&#x60; of the user. Alternatively, you can use the &#x60;username&#x60; property and value. If the value is not provided, the authenticated user is used. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersGetUsernameSuggestion**
> \Swagger\Client\Model\InlineResponse20023 getApiV1UsersGetUsernameSuggestion($x_auth_token, $x_user_id)

Get Username Suggestion

Get a username suggestion for the authenticated user.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.65.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.

try {
    $result = $apiInstance->getApiV1UsersGetUsernameSuggestion($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersGetUsernameSuggestion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersInfo**
> \Swagger\Client\Model\InlineResponse20012 getApiV1UsersInfo($x_auth_token, $x_user_id, $user_id, $include_user_rooms)

Get User's Info

Retrieves information about a user. The result is only limited to what the callee has access to view.  From version `7.0.0`, this endpoint no longer supports the `fields` parameter, even when the `ALLOW_UNSAFE_QUERY_AND_FIELDS_API_PARAMS: true` environment variable is set. Instead, use the `includeUserRooms` parameter.  ### Changelog | Version      | Description | | ---------------- | ------------| |7.0.0             | Removed the `fields` query parameter       | |3.4.0             | Added `unread` property inside `rooms` object       | |0.70.0            | Added `rooms` property to response if the user request it and has the `view-other-user-channels` permission       | |0.49.0            | Updated to support `userId` or `username`       | |0.48.0            | Renamed to `users.info`       | |0.35.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$user_id = "user_id_example"; // string | The `userId` of the user. Alternatively, you can use the `username` parameter and value.
$include_user_rooms = true; // bool | Specifies whether the rooms the user is a member of should be included in the response.

try {
    $result = $apiInstance->getApiV1UsersInfo($x_auth_token, $x_user_id, $user_id, $include_user_rooms);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **user_id** | **string**| The &#x60;userId&#x60; of the user. Alternatively, you can use the &#x60;username&#x60; parameter and value. |
 **include_user_rooms** | **bool**| Specifies whether the rooms the user is a member of should be included in the response. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersList**
> \Swagger\Client\Model\InlineResponse20013 getApiV1UsersList($x_auth_token, $x_user_id, $query, $fields, $offset, $sort, $count)

Get Users List

Gets all of the users in the system and their information. The result is limited to what the request sender has permission to view. <br> **Permissons required**: - `view-d-room`: Required to view direct messages - `view-full-other-user-info`: Required to view complete user information (e.g., account creation date, last login) - `view-outside-room`: (Only required if the setting `Apply_permission_view-outside-room` is enabled on under **Settings** > **General** > **Rest API**). Required to view rooms outside of which the request sender is a member of  ### Changelog | Version      | Description | | ---------------- | ------------| |0.49.0            | `Count` and `offset` query parameters supported.       | |0.35.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use [MongoDB query](https://www.mongodb.com/docs/manual/reference/operator/query/) operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = new \Swagger\Client\Model\null(); //  | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 56; // int | How many items to return.

try {
    $result = $apiInstance->getApiV1UsersList($x_auth_token, $x_user_id, $query, $fields, $offset, $sort, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **query** | [****](../Model/.md)| This parameter allows you to use [MongoDB query](https://www.mongodb.com/docs/manual/reference/operator/query/) operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | [****](../Model/.md)| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **count** | **int**| How many items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersListByStatus**
> \Swagger\Client\Model\InlineResponse20032 getApiV1UsersListByStatus($x_auth_token, $x_user_id, $offset, $sort, $count, $status, $has_logged_in, $type, $roles, $search_term)

List Users by Status

Returns a list of filtered users based on activation status, first-time log-in, and type of users to be returned.  <br> **Permissions required**:  - `view-d-room`: Required to view direct message  - `view-outside-room`: (Only required if the setting `Apply_permission_view-outside-room` is enabled on under **Settings** > **General** > **Rest API**). Required to view rooms outside of which the request sender is a member of  ### Changelog | Version      | Description | | ---------------- | ------------| |6.8.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\"value\": -1, \"_id\": 1}
$count = 56; // int | How many items to return.
$status = "status_example"; // string | Filter users based on their activation status. It can either  be `active` or `deactivated`
$has_logged_in = true; // bool | Filter the users who have logged into their accounts for the first time.
$type = "type_example"; // string | Filter the type of users to be returned. For example, 'bot', 'user', 'app', etc.
$roles = "roles_example"; // string | Filter the users returned based on a list of roles.
$search_term = "search_term_example"; // string | Filter the list of users returned based on a search term

try {
    $result = $apiInstance->getApiV1UsersListByStatus($x_auth_token, $x_user_id, $offset, $sort, $count, $status, $has_logged_in, $type, $roles, $search_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersListByStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, {\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1} | [optional]
 **count** | **int**| How many items to return. | [optional]
 **status** | **string**| Filter users based on their activation status. It can either  be &#x60;active&#x60; or &#x60;deactivated&#x60; | [optional]
 **has_logged_in** | **bool**| Filter the users who have logged into their accounts for the first time. | [optional]
 **type** | **string**| Filter the type of users to be returned. For example, &#x27;bot&#x27;, &#x27;user&#x27;, &#x27;app&#x27;, etc. | [optional]
 **roles** | **string**| Filter the users returned based on a list of roles. | [optional]
 **search_term** | **string**| Filter the list of users returned based on a search term | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersListTeams**
> \Swagger\Client\Model\InlineResponse20030 getApiV1UsersListTeams($x_auth_token, $x_user_id, $user_id)

List User's Teams

The teams returned by the endpoint depends on your permissions. To view all teams, you need the `view-all-teams` permission.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$user_id = "user_id_example"; // string | The `userId` of the user.

try {
    $result = $apiInstance->getApiV1UsersListTeams($x_auth_token, $x_user_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersListTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **user_id** | **string**| The &#x60;userId&#x60; of the user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersPresence**
> \Swagger\Client\Model\InlineResponse20018 getApiV1UsersPresence($x_user_id, $x_auth_token, $from, $ids)

Get Users Presence

If the `Presence_broadcast_disabled` setting is true, the endpoint returns an empty array. You can find this setting under **Administration** > **Settings** > **Troubleshoot**.  ### Changelog | Version      | Description | | ---------------- | ------------| |1.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$from = "from_example"; // string | The last date when the status was changed. Format: ISO 8601 datetime. Timezone, milliseconds and seconds are optional. If you don't pass `from` parameter, you'll get a list of all users' presence and the result will have a `full` field with value `true` .
$ids = "ids_example"; // string | The user IDs whose status you want.

try {
    $result = $apiInstance->getApiV1UsersPresence($x_user_id, $x_auth_token, $from, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersPresence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **from** | **string**| The last date when the status was changed. Format: ISO 8601 datetime. Timezone, milliseconds and seconds are optional. If you don&#x27;t pass &#x60;from&#x60; parameter, you&#x27;ll get a list of all users&#x27; presence and the result will have a &#x60;full&#x60; field with value &#x60;true&#x60; . | [optional]
 **ids** | **string**| The user IDs whose status you want. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersRequestDataDownload**
> \Swagger\Client\Model\InlineResponse20027 getApiV1UsersRequestDataDownload($x_auth_token, $x_user_id, $full_export)

Request Data Download

### Changelog | Version      | Description | | ---------------- | ------------| |1.2.0            | Added as `users.requestDataDownload`       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$full_export = false; // bool | Whether you want a full export or not. By default, the value is false.

try {
    $result = $apiInstance->getApiV1UsersRequestDataDownload($x_auth_token, $x_user_id, $full_export);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersRequestDataDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **full_export** | **bool**| Whether you want a full export or not. By default, the value is false. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1UsersSendWelcomeEmail**
> \Swagger\Client\Model\InlineResponse2007 getApiV1UsersSendWelcomeEmail($x_auth_token, $x_user_id, $body)

Send Welcome Email to User

Ensure that you have configured the <a href='https://docs.rocket.chat/docs/email' target='_blank'>email settings</a> in your workspace to send emails.   Permission required: `send-mail`  ### Changelog | Version      | Description | | ------------ | ------------| |6.8.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$body = new \Swagger\Client\Model\V1UsersSendWelcomeEmailBody(); // \Swagger\Client\Model\V1UsersSendWelcomeEmailBody | 

try {
    $result = $apiInstance->getApiV1UsersSendWelcomeEmail($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getApiV1UsersSendWelcomeEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **body** | [**\Swagger\Client\Model\V1UsersSendWelcomeEmailBody**](../Model/V1UsersSendWelcomeEmailBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1ModerationReportUser**
> \Swagger\Client\Model\InlineResponse2007 postApiV1ModerationReportUser($x_auth_token, $x_user_id, $body)

Report User

### Changelog | Version      | Description | | ---------------- | ------------| |6.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$body = new \Swagger\Client\Model\V1ModerationReportUserBody(); // \Swagger\Client\Model\V1ModerationReportUserBody | 

try {
    $result = $apiInstance->postApiV1ModerationReportUser($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1ModerationReportUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **body** | [**\Swagger\Client\Model\V1ModerationReportUserBody**](../Model/V1ModerationReportUserBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersCreate**
> \Swagger\Client\Model\InlineResponse2008 postApiV1UsersCreate($x_user_id, $x_auth_token, $body)

Create User

Create a new user in your workspace. This endpoint is typically used by admins to create user accounts in the workspace. <br>Permissions required: - `create-user`: Permission to create users - `edit-other-user-active-status`: Permission to enable or disable other accounts   ### Changelog | Version      | Description |  | ---------------- | ------------| |0.48.0            | `role` property is now `roles` which is an array of strings for the roles to create the user with.       | |0.45.0            | Users created via this now join the default channels.       | |0.40.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1UsersCreateBody(); // \Swagger\Client\Model\V1UsersCreateBody | 

try {
    $result = $apiInstance->postApiV1UsersCreate($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1UsersCreateBody**](../Model/V1UsersCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersCreateToken**
> \Swagger\Client\Model\InlineResponse20019 postApiV1UsersCreateToken($x_auth_token, $x_user_id, $body)

Create Users Token

> This endpoint has been deprecated and is scheduled for removal in the 8.0.0 <a href=\"https://github.com/RocketChat/Rocket.Chat/releases\" target=\"_blank\">release</a>.  As a workspace admin, you can create temporary authentication tokens for users. This is the same type of session authentication token a user gets via <a href=\"https://developer.rocket.chat/apidocs/login-with-username-and-password\" target=\"_blank\">login</a> and expires the same way. * To be able to use this endpoint, you must add the <a href=\"https://docs.rocket.chat/docs/deployment-environment-variables\" target=\"_blank\">environment variable</a> `CREATE_TOKENS_FOR_USERS=true` in your compose file. * For SaaS workspaces, <a href=\"https://desk.rocket.chat/portal/en/signin\" target=\"_blank\">contact</a> support to set this variable. * Permission required: `user-generate-access-token` * The maximum number of login tokens per user is 50. See this <a href='https://github.com/RocketChat/Rocket.Chat/pull/32216' target='_blank'>GitHub PR</a> for details.  For example, if you use Snaps to deploy, set the environment variable as shown below:   ```   echo \"CREATE_TOKENS_FOR_USERS=true\" > /var/snap/rocketchat-server/common/create-tokens.env      sudo systemctl restart snap.rocketchat-server.rocketchat-server.service   ```      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |2.1.0            | Added ENV VAR to be able to use this endpoint (process.env.CREATE_TOKENS_FOR_USERS).       |   |0.56.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$body = new \Swagger\Client\Model\V1UsersCreateTokenBody(); // \Swagger\Client\Model\V1UsersCreateTokenBody | 

try {
    $result = $apiInstance->postApiV1UsersCreateToken($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersCreateToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **body** | [**\Swagger\Client\Model\V1UsersCreateTokenBody**](../Model/V1UsersCreateTokenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersDeactivateIdle**
> \Swagger\Client\Model\InlineResponse20016 postApiV1UsersDeactivateIdle($x_user_id, $x_auth_token, $body)

Deactivate Idle Users

Permission required: `edit-other-user-active-status`      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1UsersDeactivateIdleBody(); // \Swagger\Client\Model\V1UsersDeactivateIdleBody | 

try {
    $result = $apiInstance->postApiV1UsersDeactivateIdle($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersDeactivateIdle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1UsersDeactivateIdleBody**](../Model/V1UsersDeactivateIdleBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersDelete**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersDelete($x_auth_token, $x_user_id, $body)

Delete User

Deletes an existing user from your workspace. Permission required: `delete-user`  ### Changelog | Version      | Description | | ---------------- | ------------| |3.7.0            | Added `confirmRelinquish` to the payload.       | |0.35.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$body = new \Swagger\Client\Model\V1UsersDeleteBody(); // \Swagger\Client\Model\V1UsersDeleteBody | 

try {
    $result = $apiInstance->postApiV1UsersDelete($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **body** | [**\Swagger\Client\Model\V1UsersDeleteBody**](../Model/V1UsersDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersDeleteOwnAccount**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersDeleteOwnAccount($x_auth_token, $x_user_id, $body)

Delete Own Account

Deletes your own user account. Requires the `Allow Users to Delete Own Account` setting enabled. Access this setting from **Administration** > **Workspace** > **Settings** > **Accounts**.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.7.0            | Added `confirmRelinquish` to the payload.       | |0.67.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$body = new \Swagger\Client\Model\V1UsersDeleteOwnAccountBody(); // \Swagger\Client\Model\V1UsersDeleteOwnAccountBody | 

try {
    $result = $apiInstance->postApiV1UsersDeleteOwnAccount($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersDeleteOwnAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **body** | [**\Swagger\Client\Model\V1UsersDeleteOwnAccountBody**](../Model/V1UsersDeleteOwnAccountBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersForgotPassword**
> \Swagger\Client\Model\InlineResponse20022 postApiV1UsersForgotPassword($body)

Forgot Password

Send an email to reset your password. Ensure that you have completed the configuration of the email; otherwise, your users will not receive the mail normally. Access this from **Administration** > **Workspace** > **Settings** > **Email**. <br> To use this endpoint, the `PasswordReset` setting must be enabled in **Settings** > **Accounts** > **Registration** > **Password Reset**.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.64.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1UsersForgotPasswordBody(); // \Swagger\Client\Model\V1UsersForgotPasswordBody | 

try {
    $result = $apiInstance->postApiV1UsersForgotPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersForgotPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1UsersForgotPasswordBody**](../Model/V1UsersForgotPasswordBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersGeneratePersonalAccessToken**
> \Swagger\Client\Model\InlineResponse20025 postApiV1UsersGeneratePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body)

Generate Personal Access Token

Permission required: `create-personal-access-tokens`.   * This endpoint requires <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">two-factor authentication</a>.  * Note that the generated access tokens are irrecoverable, so storing them safely is essential. If a token is lost or forgotten, it can be regenerated or deleted. * When making calls to the API that mandate authentication, include the generated token in the `X-Auth-Token` header and your user ID in the `X-User-Id` header to authenticate the requests. Visit the <a href=\"https://docs.rocket.chat/docs/account#personal-access-tokens\" target=\"_blank\"> Personal Access Token user guide</a> for more details.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0            | Added `bypassTwoFactor` param       | |0.69.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_2fa_code = "x_2fa_code_example"; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\V1UsersGeneratePersonalAccessTokenBody(); // \Swagger\Client\Model\V1UsersGeneratePersonalAccessTokenBody | 

try {
    $result = $apiInstance->postApiV1UsersGeneratePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersGeneratePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\V1UsersGeneratePersonalAccessTokenBody**](../Model/V1UsersGeneratePersonalAccessTokenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersLogout**
> \Swagger\Client\Model\InlineResponse20031 postApiV1UsersLogout($x_auth_token, $x_user_id)

Logout User

The endpoint requires the `logout-other-user`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.

try {
    $result = $apiInstance->postApiV1UsersLogout($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersLogout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersLogoutOtherClients**
> \Swagger\Client\Model\InlineResponse20028 postApiV1UsersLogoutOtherClients($x_auth_token, $x_user_id)

Logout Other Clients

Requires the `LoginExpiration` settings enabled in **Accounts** > **Login Expiration in Days** which defines how long a login token remains valid before expiration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.

try {
    $result = $apiInstance->postApiV1UsersLogoutOtherClients($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersLogoutOtherClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersRegeneratePersonalAccessToken**
> \Swagger\Client\Model\InlineResponse20025 postApiV1UsersRegeneratePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body)

Regenerate Personal Access Token

Permission required: `create-personal-access-tokens`. This endpoint requires 2FA.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.69.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_2fa_code = "x_2fa_code_example"; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\V1UsersRegeneratePersonalAccessTokenBody(); // \Swagger\Client\Model\V1UsersRegeneratePersonalAccessTokenBody | 

try {
    $result = $apiInstance->postApiV1UsersRegeneratePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersRegeneratePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\V1UsersRegeneratePersonalAccessTokenBody**](../Model/V1UsersRegeneratePersonalAccessTokenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersRegister**
> \Swagger\Client\Model\InlineResponse2009 postApiV1UsersRegister($body)

Register User

* Use this endpoint to create an account on the workspace. * The number of requests you can make and the interval between each request depends on the workspace's rate limiter settings. You can find the settings from **Administration** > **Settings** > **Rate Limiter** > **API Rate Limiter**.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.50.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\V1UsersRegisterBody(); // \Swagger\Client\Model\V1UsersRegisterBody | 

try {
    $result = $apiInstance->postApiV1UsersRegister($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1UsersRegisterBody**](../Model/V1UsersRegisterBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersRemoveOtherTokens**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersRemoveOtherTokens($x_auth_token, $x_user_id)

Remove Other Tokens

### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.

try {
    $result = $apiInstance->postApiV1UsersRemoveOtherTokens($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersRemoveOtherTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersRemovePersonalAccessToken**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersRemovePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body)

Remove Personal Access Token

This endpoint requires 2FA and the `create-personal-access-tokens` permission.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.69.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_2fa_code = "x_2fa_code_example"; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\V1UsersRemovePersonalAccessTokenBody(); // \Swagger\Client\Model\V1UsersRemovePersonalAccessTokenBody | 

try {
    $result = $apiInstance->postApiV1UsersRemovePersonalAccessToken($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersRemovePersonalAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\V1UsersRemovePersonalAccessTokenBody**](../Model/V1UsersRemovePersonalAccessTokenBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersResetAvatar**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersResetAvatar($x_user_id, $x_auth_token, $body)

Reset Avatar

Permissions required, if the setting `AllowUserAvatarChange` is enabled:    * `edit-other-user-avatar`: Permission to change other user's avatar   * `manage-moderation-actions`: Permission to manage moderation actions, perform actions on reported users      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |0.55.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1UsersResetAvatarBody(); // \Swagger\Client\Model\V1UsersResetAvatarBody | 

try {
    $result = $apiInstance->postApiV1UsersResetAvatar($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersResetAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1UsersResetAvatarBody**](../Model/V1UsersResetAvatarBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersResetE2EKey**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersResetE2EKey($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body)

Reset Users E2E Key

<a href=\"https://docs.rocket.chat/use-rocket.chat/user-guides/user-panel/account#reset-e2e-key\" target=\"_blank\">Reset the E2E key</a> for a user in the workspace. * It requires the `edit-other-user-e2ee` permission. * This endpoint requires 2FA.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.6.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_2fa_code = "x_2fa_code_example"; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\V1UsersResetE2EKeyBody(); // \Swagger\Client\Model\V1UsersResetE2EKeyBody | 

try {
    $result = $apiInstance->postApiV1UsersResetE2EKey($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersResetE2EKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\V1UsersResetE2EKeyBody**](../Model/V1UsersResetE2EKeyBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersResetTOTP**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersResetTOTP($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body)

Reset Users TOTP

Reset 2FA via TOTP for a user in the workspace. Make sure that the `Enable Two Factor Authentication` setting is enabled under **Administration** > **Settings** > **Accounts** > **Two Factor Authentication**. * It requires the `edit-other-user-totp` permission. * It requires two-factor authentication.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.6.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_2fa_code = "x_2fa_code_example"; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\V1UsersResetTOTPBody(); // \Swagger\Client\Model\V1UsersResetTOTPBody | 

try {
    $result = $apiInstance->postApiV1UsersResetTOTP($x_auth_token, $x_user_id, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersResetTOTP: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authenticated user token. |
 **x_user_id** | **string**| The authenticated user ID. |
 **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\V1UsersResetTOTPBody**](../Model/V1UsersResetTOTPBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersSetActiveStatus**
> \Swagger\Client\Model\InlineResponse20015 postApiV1UsersSetActiveStatus($x_user_id, $x_auth_token, $body)

Set User's Status Active

Any one of the following permissions are required:   * `edit-other-user-avatar`: Permission to change other user's avatar   * `manage-moderation-actions`: Permission to manage moderation actions, perform actions on reported users      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |3.7.0            | Added `confirmRelinquish` to the payload.       |   |0.75.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1UsersSetActiveStatusBody(); // \Swagger\Client\Model\V1UsersSetActiveStatusBody | If `activeStatus=false` & `confirmRelinquish=true` and the user is the last remaining owner of a room, the oldest member of that room will be chosen as the new owner.

try {
    $result = $apiInstance->postApiV1UsersSetActiveStatus($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersSetActiveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1UsersSetActiveStatusBody**](../Model/V1UsersSetActiveStatusBody.md)| If &#x60;activeStatus&#x3D;false&#x60; &amp; &#x60;confirmRelinquish&#x3D;true&#x60; and the user is the last remaining owner of a room, the oldest member of that room will be chosen as the new owner. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersSetAvatar**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersSetAvatar($x_user_id, $x_auth_token, $body)

Set User Avatar

Permission required: `edit-other-user-avatar`, if the `AllowUserAvatarChange` setting under **Accounts** is enabled.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.56.0            | Add support for `username` argument.       | |0.48.0            | Set other users avatars if the callee has permission.       | |0.46.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1UsersSetAvatarBody(); // \Swagger\Client\Model\V1UsersSetAvatarBody | You have 2 options to set the user avatar:   * Upload the image file to use as the new avatar, as form data. For example, `image=@my-own-avatar.png`.   * Enter the image URL you want to set as the user avatar in the request body.

try {
    $result = $apiInstance->postApiV1UsersSetAvatar($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersSetAvatar: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1UsersSetAvatarBody**](../Model/V1UsersSetAvatarBody.md)| You have 2 options to set the user avatar:   * Upload the image file to use as the new avatar, as form data. For example, &#x60;image&#x3D;@my-own-avatar.png&#x60;.   * Enter the image URL you want to set as the user avatar in the request body. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersSetPreferences**
> \Swagger\Client\Model\InlineResponse20021 postApiV1UsersSetPreferences($x_user_id, $x_auth_token, $body)

Set User Preferences

If you want to edit another user's preferences, you need the permission `edit-other-user-info`. ### Changelog | Version      | Description | | ---------------- | ------------| |2.3.0            | Added `desktopNotificationRequireInteraction` property.       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1UsersSetPreferencesBody(); // \Swagger\Client\Model\V1UsersSetPreferencesBody | 

try {
    $result = $apiInstance->postApiV1UsersSetPreferences($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersSetPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1UsersSetPreferencesBody**](../Model/V1UsersSetPreferencesBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersSetStatus**
> \Swagger\Client\Model\InlineResponse2007 postApiV1UsersSetStatus($x_user_id, $x_auth_token, $body)

Set User Status

* You can set the status for yourself or another user.  * To change another user's status, the `AllowUserStatusMessageChange` setting must be enabled, and you must have the `edit-other-user-info` permission. * According to your workspace settings (under **Accounts**), you will only be able to set the invisible or `offline` status if the `Allow Invisible status option` setting is enabled.      ### Changelog   | Version      | Description |   | ---------------- | ------------|   |1.2.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1UsersSetStatusBody(); // \Swagger\Client\Model\V1UsersSetStatusBody | 

try {
    $result = $apiInstance->postApiV1UsersSetStatus($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersSetStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1UsersSetStatusBody**](../Model/V1UsersSetStatusBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersUpdate**
> \Swagger\Client\Model\InlineResponse20010 postApiV1UsersUpdate($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $body)

Update User Details

Use this endpoint to update the details of an existing user. This endpoint requires 2FA.<br> **Permissions required**: - `edit-other-user-password`: Permission to modify other user's passwords - `edit-other-user-info_description`: Permission to change other user's name, username or email address - `edit-other-user-active-status`: Permission to enable or disable other accounts  ### Changelog | Version      | Description |  | ---------------- | ------------| |7.0.0             | Removed upsert behaviour and stopped allowing `joinDefaultChannels` param| |0.48.0            | Renamed to `users.update`       | |0.35.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_2fa_code = "x_2fa_code_example"; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\V1UsersUpdateBody(); // \Swagger\Client\Model\V1UsersUpdateBody | 

try {
    $result = $apiInstance->postApiV1UsersUpdate($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\V1UsersUpdateBody**](../Model/V1UsersUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1UsersUpdateOwnBasicInfo**
> \Swagger\Client\Model\InlineResponse20011 postApiV1UsersUpdateOwnBasicInfo($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $body)

Update Own Basic Information

* To change your email or password, you must confirm it using TOTP. If you don't have 2FA enabled (token code or email), TOTP will require the current password method. * If you add the `currentPassword` encrypted in SHA256 to the request body, the request won't require TOTP again.  ### Changelog | Version      | Description | | ---------------- | ------------| |6.4.0            | Add `bio` and `statusType` parameters.       | |0.62.2            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$x_2fa_code = "x_2fa_code_example"; // string | The 2fa code. See <a href=\"https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\" target=\"_blank\">Introduction to Two-Factor Authentication</a>.
$x_2fa_method = "x_2fa_method_example"; // string | The desired method to get the 2FA code. It can be `email`, `totp`, or `password`.
$body = new \Swagger\Client\Model\V1UsersUpdateOwnBasicInfoBody(); // \Swagger\Client\Model\V1UsersUpdateOwnBasicInfoBody | 

try {
    $result = $apiInstance->postApiV1UsersUpdateOwnBasicInfo($x_user_id, $x_auth_token, $x_2fa_code, $x_2fa_method, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postApiV1UsersUpdateOwnBasicInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **x_2fa_code** | **string**| The 2fa code. See &lt;a href&#x3D;\&quot;https://developer.rocket.chat/apidocs/introduction-to-two-factor-authentication\&quot; target&#x3D;\&quot;_blank\&quot;&gt;Introduction to Two-Factor Authentication&lt;/a&gt;. |
 **x_2fa_method** | **string**| The desired method to get the 2FA code. It can be &#x60;email&#x60;, &#x60;totp&#x60;, or &#x60;password&#x60;. |
 **body** | [**\Swagger\Client\Model\V1UsersUpdateOwnBasicInfoBody**](../Model/V1UsersUpdateOwnBasicInfoBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

