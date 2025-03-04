# Swagger\Client\IntegrationApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1IntegrationsGet**](IntegrationApi.md#getapiv1integrationsget) | **GET** /api/v1/integrations.get | Get Integration
[**getApiV1IntegrationsHistory**](IntegrationApi.md#getapiv1integrationshistory) | **GET** /api/v1/integrations.history | Get Integration History
[**getApiV1IntegrationsList**](IntegrationApi.md#getapiv1integrationslist) | **GET** /api/v1/integrations.list | Get List of Integrations
[**postApiV1IntegrationsCreate**](IntegrationApi.md#postapiv1integrationscreate) | **POST** /api/v1/integrations.create | Create Integration
[**postApiV1IntegrationsRemove**](IntegrationApi.md#postapiv1integrationsremove) | **POST** /api/v1/integrations.remove | Remove Integration
[**putApiV1IntegrationsUpdate**](IntegrationApi.md#putapiv1integrationsupdate) | **PUT** /api/v1/integrations.update | Update Integration

# **getApiV1IntegrationsGet**
> \Swagger\Client\Model\InlineResponse2001 getApiV1IntegrationsGet($x_auth_token, $x_user_id, $integration_id, $created_by)

Get Integration

Get the information of a specific integration.  Permissions required: * `manage-incoming-integrations` * `manage-own-incoming-integrations` * `manage-outgoing-integrations` * `manage-own-outgoing-integrations`  ### Changelog | Version      | Description | | ---------------- | ------------| |2.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$integration_id = "integration_id_example"; // string | The integration ID.
$created_by = "created_by_example"; // string | The user ID who created the integration.

try {
    $result = $apiInstance->getApiV1IntegrationsGet($x_auth_token, $x_user_id, $integration_id, $created_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getApiV1IntegrationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **integration_id** | **string**| The integration ID. |
 **created_by** | **string**| The user ID who created the integration. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1IntegrationsHistory**
> \Swagger\Client\Model\InlineResponse2002 getApiV1IntegrationsHistory($x_auth_token, $x_user_id, $id, $offset, $count, $sort, $query, $fields)

Get Integration History

Any of the following permissions is required:  * `manage-incoming-integrations`  * `manage-own-incoming-integrations`  * `manage-outgoing-integrations`  * `manage-own-outgoing-integrations`    The endpoint returns the integration history based on the user permissions.  ### Changelog  |Version      | Description |   | ---------------- | ------------|  |1.1.0            | Separate permissions in incoming and outgoing.       |  |0.53.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$id = "id_example"; // string | The integration ID.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{\"value\": -1, \"_id\": 1}`
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.

try {
    $result = $apiInstance->getApiV1IntegrationsHistory($x_auth_token, $x_user_id, $id, $offset, $count, $sort, $query, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getApiV1IntegrationsHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **id** | **string**| The integration ID. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1IntegrationsList**
> \Swagger\Client\Model\InlineResponse2003 getApiV1IntegrationsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $name, $type)

Get List of Integrations

Any of the following permissions is required: * `manage-incoming-integrations` * `manage-own-incoming-integrations` * `manage-outgoing-integrations` * `manage-own-outgoing-integrations`  The endpoint returns the integrations based on the user permissions. ### Changelog | Version      | Description |  | ---------------- | ------------| |7.0.0            | Added `name` and `type` query parameters for filtering.       | |1.1.0            | Separate permissions in incoming and outgoing.       | |0.49.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, `{\"value\": -1, \"_id\": 1}`
$query = new \Swagger\Client\Model\null(); //  | This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \"g\": query=`{ \"name\": { \"$regex\": \"g\" } }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$fields = "fields_example"; // string | This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields=`{ \"username\": 1 }`. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more.
$name = "name_example"; // string | Filter list by the name of the integration.
$type = "type_example"; // string | Filter list by the type of the integration. It can be `webhook-outgoing` or `webhook-incoming`.

try {
    $result = $apiInstance->getApiV1IntegrationsList($x_auth_token, $x_user_id, $offset, $count, $sort, $query, $fields, $name, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->getApiV1IntegrationsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. This is a JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]
 **query** | [****](../Model/.md)| This parameter allows you to use MongoDB query operators to search for specific data. For example, to query users with a name that contains the letter \&quot;g\&quot;: query&#x3D;&#x60;{ \&quot;name\&quot;: { \&quot;$regex\&quot;: \&quot;g\&quot; } }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **fields** | **string**| This parameter accepts a JSON object with properties that have a value of 1 or 0 to include or exclude them in the response. For example, to only retrieve the usernames of users: fields&#x3D;&#x60;{ \&quot;username\&quot;: 1 }&#x60;. Refer to the [official documentation](https://developer.rocket.chat/apidocs/query-parameters#query-and-fields) to learn more. | [optional]
 **name** | **string**| Filter list by the name of the integration. | [optional]
 **type** | **string**| Filter list by the type of the integration. It can be &#x60;webhook-outgoing&#x60; or &#x60;webhook-incoming&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1IntegrationsCreate**
> \Swagger\Client\Model\InlineResponse200 postApiV1IntegrationsCreate($x_auth_token, $x_user_id, $body)

Create Integration

Permissions required to create incoming integrations: * `manage-incoming-integrations` * `manage-own-incoming-integrations`  Permissions required to create outgoing integrations: * `manage-outgoing-integrations` * `manage-own-outgoing-integrations` ### Changelog | Version      | Description | | ---------------- | ------------| |1.1.0            | Separate permissions in incoming and outgoing.       | |0.49.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1IntegrationsCreateBody(); // \Swagger\Client\Model\V1IntegrationsCreateBody | 

try {
    $result = $apiInstance->postApiV1IntegrationsCreate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->postApiV1IntegrationsCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1IntegrationsCreateBody**](../Model/V1IntegrationsCreateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1IntegrationsRemove**
> \Swagger\Client\Model\InlineResponse2005 postApiV1IntegrationsRemove($x_auth_token, $x_user_id, $body)

Remove Integration

Remove an integration from the workspace.  Any of the following permissions is required: * `manage-incoming-integrations` * `manage-own-incoming-integrations` * `manage-outgoing-integrations` * `manage-own-outgoing-integrations`   ### Changelog | Version      | Description | | ---------------- | ------------| |1.1.0            | Separate permissions in incoming and outgoing.       | |0.49.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1IntegrationsRemoveBody(); // \Swagger\Client\Model\V1IntegrationsRemoveBody | 

try {
    $result = $apiInstance->postApiV1IntegrationsRemove($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->postApiV1IntegrationsRemove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1IntegrationsRemoveBody**](../Model/V1IntegrationsRemoveBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putApiV1IntegrationsUpdate**
> \Swagger\Client\Model\InlineResponse2004 putApiV1IntegrationsUpdate($x_auth_token, $x_user_id, $body)

Update Integration

Update an existing integration.  Permissions required: * `manage-incoming-integrations` * `manage-own-incoming-integrations` * `manage-outgoing-integrations` * `manage-own-outgoing-integrations`  ### Changelog | Version      | Description |  | ---------------- | ------------| |3.4.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\IntegrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The authorization token of the user.
$x_user_id = "x_user_id_example"; // string | The user ID of the user.
$body = new \Swagger\Client\Model\V1IntegrationsUpdateBody(); // \Swagger\Client\Model\V1IntegrationsUpdateBody | 

try {
    $result = $apiInstance->putApiV1IntegrationsUpdate($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationApi->putApiV1IntegrationsUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The authorization token of the user. |
 **x_user_id** | **string**| The user ID of the user. |
 **body** | [**\Swagger\Client\Model\V1IntegrationsUpdateBody**](../Model/V1IntegrationsUpdateBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

