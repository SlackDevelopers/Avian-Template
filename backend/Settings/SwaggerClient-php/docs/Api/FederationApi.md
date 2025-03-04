# Swagger\Client\FederationApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getApiV1FederationListServersByUser**](FederationApi.md#getapiv1federationlistserversbyuser) | **GET** /api/v1/federation/listServersByUser | Get Federated Servers
[**getApiV1FederationSearchPublicRooms**](FederationApi.md#getapiv1federationsearchpublicrooms) | **GET** /api/v1/federation/searchPublicRooms | Search Public Rooms
[**postApiV1FederationAddServerByUser**](FederationApi.md#postapiv1federationaddserverbyuser) | **POST** /api/v1/federation/addServerByUser | Add Federated Server
[**postApiV1FederationJoinExternalPublicRoom**](FederationApi.md#postapiv1federationjoinexternalpublicroom) | **POST** /api/v1/federation/joinExternalPublicRoom | Join External Public Room
[**postApiV1FederationRemoveServerByUser**](FederationApi.md#postapiv1federationremoveserverbyuser) | **POST** /api/v1/federation/removeServerByUser | Remove Federated Server

# **getApiV1FederationListServersByUser**
> \Swagger\Client\Model\InlineResponse20015 getApiV1FederationListServersByUser($x_user_id, $x_auth_token)

Get Federated Servers

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Lists all the servers the user has already saved.  ### Changelog | Version      | Description | | ---------------- | ------------| |6.0.0            | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.

try {
    $result = $apiInstance->getApiV1FederationListServersByUser($x_user_id, $x_auth_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->getApiV1FederationListServersByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiV1FederationSearchPublicRooms**
> \Swagger\Client\Model\InlineResponse20016 getApiV1FederationSearchPublicRooms($x_user_id, $x_auth_token, $server_name, $room_name, $page_token, $count)

Search Public Rooms

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Search for federated public rooms by the server name or room name.  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$server_name = "server_name_example"; // string | The server name.
$room_name = "room_name_example"; // string | The room name you want to search for in the server.
$page_token = "page_token_example"; // string | The page you want to retrieve, use it for pagination. Make sure to URL encode this.
$count = 56; // int | How many items to return.

try {
    $result = $apiInstance->getApiV1FederationSearchPublicRooms($x_user_id, $x_auth_token, $server_name, $room_name, $page_token, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->getApiV1FederationSearchPublicRooms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **server_name** | **string**| The server name. |
 **room_name** | **string**| The room name you want to search for in the server. | [optional]
 **page_token** | **string**| The page you want to retrieve, use it for pagination. Make sure to URL encode this. | [optional]
 **count** | **int**| How many items to return. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1FederationAddServerByUser**
> \Swagger\Client\Model\InlineResponse2002 postApiV1FederationAddServerByUser($x_user_id, $x_auth_token, $body)

Add Federated Server

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Add a new federated server.  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\FederationAddServerByUserBody(); // \Swagger\Client\Model\FederationAddServerByUserBody | 

try {
    $result = $apiInstance->postApiV1FederationAddServerByUser($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->postApiV1FederationAddServerByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\FederationAddServerByUserBody**](../Model/FederationAddServerByUserBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1FederationJoinExternalPublicRoom**
> \Swagger\Client\Model\InlineResponse2002 postApiV1FederationJoinExternalPublicRoom($x_user_id, $x_auth_token, $body)

Join External Public Room

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>  Join a public external federated room.  ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0         | Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\FederationJoinExternalPublicRoomBody(); // \Swagger\Client\Model\FederationJoinExternalPublicRoomBody | 

try {
    $result = $apiInstance->postApiV1FederationJoinExternalPublicRoom($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->postApiV1FederationJoinExternalPublicRoom: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\FederationJoinExternalPublicRoomBody**](../Model/FederationJoinExternalPublicRoomBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApiV1FederationRemoveServerByUser**
> \Swagger\Client\Model\InlineResponse2002 postApiV1FederationRemoveServerByUser($x_user_id, $x_auth_token, $body)

Remove Federated Server

<div style=\"text-align: center; margin: 1rem 0 1rem 0;\"><img src=\"https://raw.githubusercontent.com/RocketChat/Rocket.Chat-Open-API/main/images/premium.svg\" alt=\"Premium tag\" style=\"display: block; margin: auto;\"></div>   Remove a federated server.   ### Changelog | Version      | Description | | ------------ | ------------| |6.0.0          Added       |

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\FederationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$x_user_id = "x_user_id_example"; // string | The user ID.
$x_auth_token = "x_auth_token_example"; // string | The authentication token.
$body = new \Swagger\Client\Model\FederationRemoveServerByUserBody(); // \Swagger\Client\Model\FederationRemoveServerByUserBody | 

try {
    $result = $apiInstance->postApiV1FederationRemoveServerByUser($x_user_id, $x_auth_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FederationApi->postApiV1FederationRemoveServerByUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_user_id** | **string**| The user ID. |
 **x_auth_token** | **string**| The authentication token. |
 **body** | [**\Swagger\Client\Model\FederationRemoveServerByUserBody**](../Model/FederationRemoveServerByUserBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

