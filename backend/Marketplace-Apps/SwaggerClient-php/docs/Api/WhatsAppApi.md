# Swagger\Client\WhatsAppApi

All URIs are relative to *https://rcadmin.sexteo.chat*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postApiAppsPublicAppIdTemplateMessage**](WhatsAppApi.md#postapiappspublicappidtemplatemessage) | **POST** /api/apps/public/{appId}/templateMessage | Send a WhatsApp Template Message

# **postApiAppsPublicAppIdTemplateMessage**
> \Swagger\Client\Model\InlineResponse2001 postApiAppsPublicAppIdTemplateMessage($app_id, $body)

Send a WhatsApp Template Message

Use this endpoint to send WhatsApp template messages directly to specified contacts from your workspace.  1. Navigate to **Administration > Apps > Marketplace**. 2. Locate your preferred <a href=\"https://docs.rocket.chat/docs/whatsapp-apps\" target=\"_blank\">WhatsApp App</a>. 3. Go to *App Info > Details > APIs* and find the `POST templateMessage` section. 4. Copy the `POST templateMessage` endpoint URL for your WhatsApp app from the provided curl example. This URL includes the required `appId`. Send a template message request using this URL as the endpoint.  Before sending template messages from Rocket.Chat through any <a href=\"https://docs.rocket.chat/docs/whatsapp-apps\" target=\"_blank\">WhatsApp App</a>, ensure that you have set up the templates in respective WhatsApp provider account. Refer to the official guide for details on <a href=\"https://developer.rocket.chat/docs/whatsapp-business-template-messages#set-up-template-messages-on-whatsapp\" target=\"_blank\">configuring template messages for each WhatsApp app</a>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\WhatsAppApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$app_id = "app_id_example"; // string | 
$body = new \Swagger\Client\Model\AppIdTemplateMessageBody(); // \Swagger\Client\Model\AppIdTemplateMessageBody | We strongly recommend including the + prefix for all phone numbers in the payload. While you can submit numbers without the leading + sign, we have encountered cases where WhatsApp will return an invalid response despite the number being in use.

try {
    $result = $apiInstance->postApiAppsPublicAppIdTemplateMessage($app_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatsAppApi->postApiAppsPublicAppIdTemplateMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\AppIdTemplateMessageBody**](../Model/AppIdTemplateMessageBody.md)| We strongly recommend including the + prefix for all phone numbers in the payload. While you can submit numbers without the leading + sign, we have encountered cases where WhatsApp will return an invalid response despite the number being in use. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

