# Swagger\Client\RolesApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1RolesGetUsersInRole**](RolesApi.md#getapiv1rolesgetusersinrole) | **GET** /api/v1/roles.getUsersInRole | Get Users of a Role
[**getApiV1RolesList**](RolesApi.md#getapiv1roleslist) | **GET** /api/v1/roles.list | Get Roles
[**getApiV1RolesSync**](RolesApi.md#getapiv1rolessync) | **GET** /api/v1/roles.sync | Get Updated Roles
[**postApiV1RolesAddUserToRole**](RolesApi.md#postapiv1rolesaddusertorole) | **POST** /api/v1/roles.addUserToRole | Assign Role to User
[**postApiV1RolesCreate**](RolesApi.md#postapiv1rolescreate) | **POST** /api/v1/roles.create | Create Role
[**postApiV1RolesDelete**](RolesApi.md#postapiv1rolesdelete) | **POST** /api/v1/roles.delete | Delete Role
[**postApiV1RolesRemoveUserFromRole**](RolesApi.md#postapiv1rolesremoveuserfromrole) | **POST** /api/v1/roles.removeUserFromRole | Remove Role from User
[**postApiV1RolesUpdate**](RolesApi.md#postapiv1rolesupdate) | **POST** /api/v1/roles.update | Update Role

# **getApiV1RolesGetUsersInRole**
> \Swagger\Client\Model\InlineResponse2004 getApiV1RolesGetUsersInRole($role, $x_user_id, $x_auth_token, $room_id, $offset, $count)

Get Users of a Role

Gets the users that belong to a specific role. **Permissions required**:  - `access-permissions`: Required to modify permissions for various roles - `view-other-user-channels`: Permission to view channels owned by other users. Required if the request includes a `roomId`  ### Changelog | Version      | Description | | ---------------- | ------------| |1.3.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$role = "role_example"; // string | The role name or the role ID. For custom roles, use the role ID.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$room_id = "room_id_example"; // string | The room ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | How many items to return.

try {
    $result = $apiInstance->getApiV1RolesGetUsersInRole($role, $x_user_id, $x_auth_token, $room_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getApiV1RolesGetUsersInRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **role** | **string**| The role name or the role ID. For custom roles, use the role ID. |
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **room_id** | **string**| The room ID. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| How many items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RolesList**
> \Swagger\Client\Model\InlineResponse2005 getApiV1RolesList($x_user_id, $x_auth_token)

Get Roles

Gets all the roles in the workspace. ### Changelog | Version      | Description |  | ---------------- | ------------| |0.73.0            | Added `mandatory2fa` property       | |0.70.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.

try {
    $result = $apiInstance->getApiV1RolesList($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getApiV1RolesList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1RolesSync**
> \Swagger\Client\Model\InlineResponse2006 getApiV1RolesSync($updated_since, $x_user_id, $x_auth_token)

Get Updated Roles

Gets all the roles in the workspace which are updated after a given date.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.1.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$updated_since = "updated_since_example"; // string | Date as ISO string.
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.

try {
    $result = $apiInstance->getApiV1RolesSync($updated_since, $x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->getApiV1RolesSync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updated_since** | **string**| Date as ISO string. |
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RolesAddUserToRole**
> \Swagger\Client\Model\InlineResponse2003 postApiV1RolesAddUserToRole($x_user_id, $x_auth_token, $body)

Assign Role to User

Assign a role to a user. Optionally, you can set this role to a user for a specific room. <br> **Permissions required**: - `access-permissions`: Required to modify permissions for various roles - `assign-admin-role`: Permission to assign the admin role to other users  ### Changelog | Version      | Description | | ---------------- | ------------| |0.70.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1RolesAddUserToRoleBody(); // \Swagger\Client\Model\V1RolesAddUserToRoleBody | By default, the three major room roles are available in Rocket.Chat are **Owner**, **Leader**, and **Moderator**.  [Creating custom roles](https://docs.rocket.chat/use-rocket.chat/user-management/custom-roles) is exclusively available on the Enterprise plan.  Refer to [Roles](https://docs.rocket.chat/setup-and-configure/roles-in-rocket.chat) for more information.

try {
    $result = $apiInstance->postApiV1RolesAddUserToRole($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesAddUserToRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1RolesAddUserToRoleBody**](../Model/V1RolesAddUserToRoleBody.md)| By default, the three major room roles are available in Rocket.Chat are **Owner**, **Leader**, and **Moderator**.  [Creating custom roles](https://docs.rocket.chat/use-rocket.chat/user-management/custom-roles) is exclusively available on the Enterprise plan.  Refer to [Roles](https://docs.rocket.chat/setup-and-configure/roles-in-rocket.chat) for more information. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RolesCreate**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RolesCreate($x_user_id, $x_auth_token, $body)

Create Role

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/Enterprise%20tag.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>   Create a new <a href='https://docs.rocket.chat/docs/roles-in-rocketchat' target='_blank'>role</a> in the workspace. See <a href='https://docs.rocket.chat/v1/docs/custom-roles' target='_blank'>Custom Roles</a> for further information.   * You can't create new roles with the same name as existing roles. For example, it is not possible to create a new role with the name `admin`.  * The scope can either be `Users`(user level) or `Subscriptions`(room level).  * Permission required: `access-permissions`    ### Changelog  | Version      | Description |  | ---------------- | ------------|  |6.0.0            | Moved to Enterprise plan.       |  |3.15.0            | The endpoint is no longer used to update roles.       |  |0.70.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1RolesCreateBody(); // \Swagger\Client\Model\V1RolesCreateBody | 

try {
    $result = $apiInstance->postApiV1RolesCreate($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1RolesCreateBody**](../Model/V1RolesCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RolesDelete**
> \Swagger\Client\Model\InlineResponse2007 postApiV1RolesDelete($x_user_id, $x_auth_token, $body)

Delete Role

Permission required: `access-permissions` - Roles that have the protected value as true can't be deleted (such as: `admin`, `moderator`, `user` and so on). - You cannot delete roles that are assigned to users. To do that, you must first remove this role from all the users.  ### Changelog | Version      | Description | | ---------------- | ------------| |3.17.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1RolesDeleteBody(); // \Swagger\Client\Model\V1RolesDeleteBody | 

try {
    $result = $apiInstance->postApiV1RolesDelete($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1RolesDeleteBody**](../Model/V1RolesDeleteBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RolesRemoveUserFromRole**
> \Swagger\Client\Model\InlineResponse2007 postApiV1RolesRemoveUserFromRole($x_user_id, $x_auth_token, $body)

Remove Role from User

Permission required: `access-permissions` Remove a role from a user. Optionally, you can remove this role from a specified scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1RolesRemoveUserFromRoleBody(); // \Swagger\Client\Model\V1RolesRemoveUserFromRoleBody | 

try {
    $result = $apiInstance->postApiV1RolesRemoveUserFromRole($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesRemoveUserFromRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1RolesRemoveUserFromRoleBody**](../Model/V1RolesRemoveUserFromRoleBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1RolesUpdate**
> \Swagger\Client\Model\InlineResponse2002 postApiV1RolesUpdate($x_user_id, $x_auth_token, $body)

Update Role

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/Enterprise%20tag.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Update a role in the workspace. <br>  Permission required: `access-permissions`          ### Changelog | Version      | Description | | ---------------- | ------------| |6.0.0            | Moved to Enterprise plan.       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The authenticated user ID.
$x_auth_token = "x_auth_token_example"; // string | The authenticated user token.
$body = new \Swagger\Client\Model\V1RolesUpdateBody(); // \Swagger\Client\Model\V1RolesUpdateBody | 

try {
    $result = $apiInstance->postApiV1RolesUpdate($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->postApiV1RolesUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The authenticated user ID. |
 **x_auth_token** | **string**| The authenticated user token. |
 **body** | [**\Swagger\Client\Model\V1RolesUpdateBody**](../Model/V1RolesUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

