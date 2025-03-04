# Apiv1usersSetPreferencesData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**language** | **string** | The preferred language for the user. | [optional] 
**new_room_notification** | **string** | New room notification sound. | [optional] 
**new_message_notification** | **string** | New message notification sound. | [optional] 
**mute_focused_conversations** | **bool** | A boolean value that indicates whether the user has enabled the option to mute focused conversations. | [optional] 
**clock_mode** | **int** | The valid display formats for the clock. You can enter the values 0, 1, or 2. * &#x60;0&#x60;: System default * &#x60;1&#x60;: 12-hour clock * &#x60;2&#x60;: 24-hour clock | [optional] 
**use_emojis** | **bool** | A boolean value that indicates whether the user has enabled the option to use emojis. | [optional] 
**convert_ascii_emoji** | **bool** | A boolean value that indicates whether the user has enabled the option to convert ASCII emojis. | [optional] 
**save_mobile_bandwidth** | **bool** | A boolean value that indicates whether the user has enabled the option to save mobile bandwidth. | [optional] 
**collapse_media_by_default** | **bool** | A boolean value that indicates whether the user has enabled the option to collapse media by default. | [optional] 
**auto_image_load** | **bool** | A boolean value indicates whether the user has enabled the option to load images automatically. | [optional] 
**email_notification_mode** | **string** | The preferred mode for email notifications. The options are:   * &#x60;all&#x60;: Get desktop notifications for all messages.   * &#x60;mentions&#x60;: Get the notifications only for mentions.   * &#x60;nothing&#x60;: Get no desktop notifications. | [optional] 
**unread_alert** | **bool** | A boolean value indicates whether the user has enabled the option. | [optional] 
**notifications_sound_volume** | **int** | The sound volume for notifications. | [optional] 
**desktop_notifications** | **string** | The type of desktop notifications. * &#x60;all&#x60;: Get desktop notifications for all messages. * &#x60;mentions&#x60;: Get the notifications only for mentions. * &#x60;nothing&#x60;: Get no desktop notifications. | [optional] 
**push_notifications** | **string** | The type of push notifications. * &#x60;all&#x60;: Get push notifications for all messages. * &#x60;mentions&#x60;: Get the notifications only for mentions. * &#x60;nothing&#x60;: Get no push notifications. | [optional] 
**enable_auto_away** | **bool** | A boolean value that indicates whether the user has enabled the option to update the status as away after a certain amount of idle time. | [optional] 
**highlights** | **string[]** | The message highlights section. You will be notified when someone mentions a word or phrase that you add here. Highlight words are not case-sensitive. | [optional] 
**message_view_mode** | **int** | The preferred view mode for the messages. The available options are:   * &#x60;0&#x60; - Normal   * &#x60;1&#x60; - Cozy   * &#x60;2&#x60; - Compact | [optional] 
**hide_usernames** | **bool** | A boolean value that indicates whether the user has enabled the option to hide usernames. | [optional] 
**hide_roles** | **bool** | A boolean value that indicates whether the user has enabled the option to hide roles. | [optional] 
**display_avatars** | **bool** | A boolean value that indicates whether the user has enabled the option to display user avatars. | [optional] 
**hide_flex_tab** | **bool** | A boolean value that indicates whether the user has enabled the option. | [optional] 
**send_on_enter** | **string** | Set how you want the **Enter** key to behave when sending messages.  * &#x60;normal&#x60; - Send messages with the **Enter** key. * &#x60;alternative&#x60; - Send messages with **Enter** + **Ctrl/Alt/Shift/Cmd**. * &#x60;desktop&#x60; - Send messages with **Enter** only on the desktop. | [optional] 
**idle_time_limit** | **int** | The time limit that is to be considered as idle time. | [optional] 
**sidebar_show_favorites** | **bool** | A boolean value that indicates whether the user has enabled the option to show favorites on the sidebar. | [optional] 
**sidebar_show_unread** | **bool** | A boolean value that indicates whether the user has enabled the option to show unread messages in the sidebar. | [optional] 
**sidebar_sortby** | **string** | To sort the messages in the sidebar alphabetically or by activity. The values can be:   * &#x60;activity&#x60;   * &#x60;alphabetical&#x60; | [optional] 
**sidebar_view_mode** | **string** | The view mode of the sidebar. The values can be:   * &#x60;extended&#x60;   * &#x60;medium&#x60;   * &#x60;condensed&#x60; | [optional] 
**sidebar_display_avatar** | **bool** | A boolean value that indicates whether the user has enabled the option to display avatars in the sidebar. | [optional] 
**sidebar_group_by_type** | **bool** | A boolean value that indicates whether the user has enabled the option to show the grouped values in the sidebar. | [optional] 
**dont_ask_again_list** | **object[]** | This field stores all the \&quot;warnings\&quot; a user opted not to be displayed again. An example where this works is when hiding a room. \&quot;dontAskAgainList\\\&quot;:[{\\\&quot;action\\\&quot;:\\\&quot;hideRoom\\\&quot;,\\\&quot;label\\\&quot;:\\\&quot;Hide\\\&quot;}]\&quot; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

