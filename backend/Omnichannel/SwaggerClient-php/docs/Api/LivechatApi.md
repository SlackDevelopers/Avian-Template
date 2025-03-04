# Swagger\Client\LivechatApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1LivechatConfig**](LivechatApi.md#getapiv1livechatconfig) | **GET** /api/v1/livechat/config | Get Livechat Configurations
[**getApiV1LivechatIntegrationsSettings**](LivechatApi.md#getapiv1livechatintegrationssettings) | **GET** /api/v1/livechat/integrations.settings | Get Livechat Integrations
[**getApiV1LivechatQueue**](LivechatApi.md#getapiv1livechatqueue) | **GET** /api/v1/livechat/queue | Get Livechat Queue
[**postApiV1LivechatSmsIncomingService**](LivechatApi.md#postapiv1livechatsmsincomingservice) | **POST** /api/v1/livechat/sms-incoming/{service} | Livechat SMS Incoming (Twilio)

# **getApiV1LivechatConfig**
> \Swagger\Client\Model\InlineResponse20017 getApiV1LivechatConfig($token, $department)

Get Livechat Configurations

Get Livechat widget configuration information and additional visitor data.  ### Changelog | Version      | Description |  | ---------------- | ------------| |0.70.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | The visitor token.
$department = "department_example"; // string | The visitor's department.

try {
    $result = $apiInstance->getApiV1LivechatConfig($token, $department);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatApi->getApiV1LivechatConfig: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| The visitor token. | [optional]
 **department** | **string**| The visitor&#x27;s department. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatIntegrationsSettings**
> \Swagger\Client\Model\InlineResponse20064 getApiV1LivechatIntegrationsSettings($x_auth_token, $x_user_id)

Get Livechat Integrations

Retrieves a list of integration settings. Permission required: `view-livechat-manager` ### Changelog | Version      | Description |  | ---------------- | ------------| |2.2.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.

try {
    $result = $apiInstance->getApiV1LivechatIntegrationsSettings($x_auth_token, $x_user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatApi->getApiV1LivechatIntegrationsSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |

### Return type

[**\Swagger\Client\Model\InlineResponse20064**](../Model/InlineResponse20064.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1LivechatQueue**
> \Swagger\Client\Model\InlineResponse20065 getApiV1LivechatQueue($x_auth_token, $x_user_id, $department_id, $agent_id, $include_offline_agents, $offset, $count, $sort)

Get Livechat Queue

Permission required: `view-l-room` ### Changelog | Version      | Description |  | ---------------- | ------------| |2.4.0             | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_auth_token = "x_auth_token_example"; // string | The `authToken` of the authenticated user.
$x_user_id = "x_user_id_example"; // string | The `userId` of the authenticated user.
$department_id = "department_id_example"; // string | The department ID.
$agent_id = "agent_id_example"; // string | The agent ID.
$include_offline_agents = "include_offline_agents_example"; // string | Whether you want to include offline agents or not.
$offset = 56; // int | Number of items to \"skip\" in the query, i.e. requests return count items, skipping the first offset items.
$count = 56; // int | The number of items to return.
$sort = new \Swagger\Client\Model\null(); //  | List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort = `{\"value\": -1, \"_id\": 1}`

try {
    $result = $apiInstance->getApiV1LivechatQueue($x_auth_token, $x_user_id, $department_id, $agent_id, $include_offline_agents, $offset, $count, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatApi->getApiV1LivechatQueue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_auth_token** | **string**| The &#x60;authToken&#x60; of the authenticated user. |
 **x_user_id** | **string**| The &#x60;userId&#x60; of the authenticated user. |
 **department_id** | **string**| The department ID. | [optional]
 **agent_id** | **string**| The agent ID. | [optional]
 **include_offline_agents** | **string**| Whether you want to include offline agents or not. | [optional]
 **offset** | **int**| Number of items to \&quot;skip\&quot; in the query, i.e. requests return count items, skipping the first offset items. | [optional]
 **count** | **int**| The number of items to return. | [optional]
 **sort** | [****](../Model/.md)| List of fields to order by, and in which direction. JSON object, with properties listed in desired order, with values of 1 for ascending, or -1 for descending. For example, sort &#x3D; &#x60;{\&quot;value\&quot;: -1, \&quot;_id\&quot;: 1}&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20065**](../Model/InlineResponse20065.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1LivechatSmsIncomingService**
> string postApiV1LivechatSmsIncomingService($service, $body)

Livechat SMS Incoming (Twilio)

Receive SMS.  ### Changelog | Version      | Description | | ---------------- | ------------| |0.42.0            | Added      |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\LivechatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service = "service_example"; // string | Only the server `twilio` is accepted at moment.
$body = new \Swagger\Client\Model\SmsincomingServiceBody(); // \Swagger\Client\Model\SmsincomingServiceBody | 

try {
    $result = $apiInstance->postApiV1LivechatSmsIncomingService($service, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LivechatApi->postApiV1LivechatSmsIncomingService: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **service** | **string**| Only the server &#x60;twilio&#x60; is accepted at moment. |
 **body** | [**\Swagger\Client\Model\SmsincomingServiceBody**](../Model/SmsincomingServiceBody.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

