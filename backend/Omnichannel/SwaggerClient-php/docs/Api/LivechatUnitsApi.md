# Swagger\Client\LivechatUnitsApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteApiV1LivechatUnitsId**](LivechatUnitsApi.md#deleteapiv1livechatunitsid) | **DELETE** /api/v1/livechat/units/{id} | Delete a Unit
[**getApiV1LivechatUnits**](LivechatUnitsApi.md#getapiv1livechatunits) | **GET** /api/v1/livechat/units | Get List of Units
[**getApiV1LivechatUnitsGetOne**](LivechatUnitsApi.md#getapiv1livechatunitsgetone) | **GET** /api/v1/livechat/units.getOne | Get One Unit
[**getApiV1LivechatUnitsList**](LivechatUnitsApi.md#getapiv1livechatunitslist) | **GET** /api/v1/livechat/units.list | List of Units
[**getApiV1LivechatUnitsMonitorsList**](LivechatUnitsApi.md#getapiv1livechatunitsmonitorslist) | **GET** /api/v1/livechat/unitMonitors.list | List of Unit Monitors
[**getApiV1LivechatUnitsUnitId**](LivechatUnitsApi.md#getapiv1livechatunitsunitid) | **GET** /api/v1/livechat/units/{id} | Get a Unit
[**getApiV1LivechatUnitsUnitIdDepartments**](LivechatUnitsApi.md#getapiv1livechatunitsunitiddepartments) | **GET** /api/v1/livechat/units/{unitId}/departments | Get Departments by Unit ID
[**getApiV1LivechatUnitsUnitIdDepartmentsAvailable**](LivechatUnitsApi.md#getapiv1livechatunitsunitiddepartmentsavailable) | **GET** /api/v1/livechat/units/{unitId}/departments/available | Get Available Departments by Unit Id
[**getApiV1LivechatUnitsUnitIdMonitors**](LivechatUnitsApi.md#getapiv1livechatunitsunitidmonitors) | **GET** /api/v1/livechat/units/{unitId}/monitors | Get List of Unit Monitors
[**postApiV1LivechatUnits**](LivechatUnitsApi.md#postapiv1livechatunits) | **POST** /api/v1/livechat/units | Create Unit
[**postApiV1LivechatUnitsId**](LivechatUnitsApi.md#postapiv1livechatunitsid) | **POST** /api/v1/livechat/units/{id} | Update Unit

# **deleteApiV1LivechatUnitsId**
> \Swagger\Client\Model\InlineResponse2003 deleteApiV1LivechatUnitsId($id, $x_auth_token, $x_user_id)

Delete a Unit

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`  ### Changelog | Version      | Description |  | ------------ | ------------| |4.2.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The unit ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->deleteApiV1LivechatUnitsId($id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->deleteApiV1LivechatUnitsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unit ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUnits**
> \Swagger\Client\Model\InlineResponse20082 getApiV1LivechatUnits($x_auth_token, $x_user_id, $text, $offset, $count, $sort)

Get List of Units

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$text = "text_example"; // string | Enter some text to filter the results.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatUnits($x_auth_token, $x_user_id, $text, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **text** | **string**| Enter some text to filter the results. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20082**](../Model/InlineResponse20082.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUnitsGetOne**
> \Swagger\Client\Model\InlineResponse20089 getApiV1LivechatUnitsGetOne($x_auth_token, $x_user_id, $unit_id)

Get One Unit

<div style='text-align: center; margin: 1rem 0 1rem 0;'><img src='https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg' alt='Premium tag' style='display: block; margin: auto;'></div>  This endpoint has been renamed to Get a Unit from Rocket.Chat 5.0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$unit_id = "unit_id_example"; // string | The unit ID.

try {
    $result = $apiInstance->getApiV1LivechatUnitsGetOne($x_auth_token, $x_user_id, $unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **unit_id** | **string**| The unit ID. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20089**](../Model/InlineResponse20089.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUnitsList**
> \Swagger\Client\Model\InlineResponse20088 getApiV1LivechatUnitsList($x_auth_token, $x_user_id)

List of Units

<div style='text-align: center; margin: 1rem 0 1rem 0;'><img src='https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg' alt='Premium tag' style='display: block; margin: auto;'></div>  This endpoint has been renamed to Get List of Units from Rocket.Chat 5.0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatUnitsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20088**](../Model/InlineResponse20088.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUnitsMonitorsList**
> \Swagger\Client\Model\InlineResponse20090 getApiV1LivechatUnitsMonitorsList($x_auth_token, $x_user_id)

List of Unit Monitors

<div style='text-align: center; margin: 1rem 0 1rem 0;'><img src='https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg' alt='Premium tag' style='display: block; margin: auto;'></div>  This endpoint has been renamed to Get List of Unit Monitors from Rocket.Chat 5.0.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatUnitsMonitorsList($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsMonitorsList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20090**](../Model/InlineResponse20090.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUnitsUnitId**
> \Swagger\Client\Model\InlineResponse20084 getApiV1LivechatUnitsUnitId($id, $x_auth_token, $x_user_id)

Get a Unit

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get details of a specific unit. <br> Permission required: `manage-livechat-units`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The unit ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatUnitsUnitId($id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsUnitId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The unit ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20084**](../Model/InlineResponse20084.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUnitsUnitIdDepartments**
> \Swagger\Client\Model\InlineResponse20087 getApiV1LivechatUnitsUnitIdDepartments($unit_id, $x_auth_token, $x_user_id, $offset, $count)

Get Departments by Unit ID

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The unit ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.

try {
    $result = $apiInstance->getApiV1LivechatUnitsUnitIdDepartments($unit_id, $x_auth_token, $x_user_id, $offset, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsUnitIdDepartments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The unit ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20087**](../Model/InlineResponse20087.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUnitsUnitIdDepartmentsAvailable**
> \Swagger\Client\Model\InlineResponse20086 getApiV1LivechatUnitsUnitIdDepartmentsAvailable($unit_id, $x_auth_token, $x_user_id, $offset, $count, $text, $only_my_departments)

Get Available Departments by Unit Id

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The unit ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$text = "text_example"; // string | Filter the result with the text.
$only_my_departments = true; // bool | Whether you want the result for the departments that you are part of.

try {
    $result = $apiInstance->getApiV1LivechatUnitsUnitIdDepartmentsAvailable($unit_id, $x_auth_token, $x_user_id, $offset, $count, $text, $only_my_departments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsUnitIdDepartmentsAvailable: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The unit ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **text** | **string**| Filter the result with the text. | [optional]
 **only_my_departments** | **bool**| Whether you want the result for the departments that you are part of. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20086**](../Model/InlineResponse20086.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatUnitsUnitIdMonitors**
> \Swagger\Client\Model\InlineResponse20085 getApiV1LivechatUnitsUnitIdMonitors($unit_id, $x_auth_token, $x_user_id)

Get List of Unit Monitors

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Get the list of monitors associated with a specific unit. <br> Permission required: `manage-livechat-units`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$unit_id = "unit_id_example"; // string | The unit ID.
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatUnitsUnitIdMonitors($unit_id, $x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->getApiV1LivechatUnitsUnitIdMonitors: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **string**| The unit ID. |
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20085**](../Model/InlineResponse20085.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatUnits**
> \Swagger\Client\Model\InlineResponse20083 postApiV1LivechatUnits($x_auth_token, $x_user_id, $body)

Create Unit

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Create a <a href='https://docs.rocket.chat/docs/units' target='_blank'>unit</a> to group departments. Permission required: `manage-livechat-units` ### Changelog | Version      | Description | | ------------ | ------------| |4.2.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$body = new \Swagger\Client\Model\LivechatUnitsBody(); // \Swagger\Client\Model\LivechatUnitsBody | 

try {
    $result = $apiInstance->postApiV1LivechatUnits($x_auth_token, $x_user_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->postApiV1LivechatUnits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **body** | [**\Swagger\Client\Model\LivechatUnitsBody**](../Model/LivechatUnitsBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20083**](../Model/InlineResponse20083.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatUnitsId**
> \Swagger\Client\Model\InlineResponse20083 postApiV1LivechatUnitsId($x_auth_token, $x_user_id, $id, $body)

Update Unit

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Permission required: `manage-livechat-units`  ### Changelog | Version      | Description | | ------------ | ------------| |4.2.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatUnitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$id = "id_example"; // string | The unit ID.
$body = new \Swagger\Client\Model\UnitsIdBody(); // \Swagger\Client\Model\UnitsIdBody | 

try {
    $result = $apiInstance->postApiV1LivechatUnitsId($x_auth_token, $x_user_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatUnitsApi->postApiV1LivechatUnitsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **id** | **string**| The unit ID. |
 **body** | [**\Swagger\Client\Model\UnitsIdBody**](../Model/UnitsIdBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20083**](../Model/InlineResponse20083.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

