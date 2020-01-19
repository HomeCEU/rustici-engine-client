# Swagger\Client\RegistrationApi

All URIs are relative to */api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildRegistrationLaunchLink**](RegistrationApi.md#buildregistrationlaunchlink) | **POST** /registrations/{registrationId}/launchLink | Returns the link to use to launch this registration
[**createNewRegistrationInstance**](RegistrationApi.md#createnewregistrationinstance) | **POST** /registrations/{registrationId}/instances | Create a new instance for this registration specified by the registration ID
[**createRegistration**](RegistrationApi.md#createregistration) | **POST** /registrations | Create a registration.
[**deleteRegistration**](RegistrationApi.md#deleteregistration) | **DELETE** /registrations/{registrationId} | Delete &#x60;registrationId&#x60;
[**deleteRegistrationConfigurationSetting**](RegistrationApi.md#deleteregistrationconfigurationsetting) | **DELETE** /registrations/{registrationId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this registration
[**deleteRegistrationGlobalData**](RegistrationApi.md#deleteregistrationglobaldata) | **DELETE** /registrations/{registrationId}/globalData | delete global data associated with &#x60;registrationId&#x60;
[**deleteRegistrationInstance**](RegistrationApi.md#deleteregistrationinstance) | **DELETE** /registrations/{registrationId}/instances/{instanceId} | Delete instance &#x60;instanceId&#x60; of &#x60;registrationId&#x60;
[**deleteRegistrationInstanceConfigurationSetting**](RegistrationApi.md#deleteregistrationinstanceconfigurationsetting) | **DELETE** /registrations/{registrationId}/instances/{instanceId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this registration instance
[**deleteRegistrationProgress**](RegistrationApi.md#deleteregistrationprogress) | **DELETE** /registrations/{registrationId}/progress | delete registration progress (clear registration)
[**getRegistration**](RegistrationApi.md#getregistration) | **HEAD** /registrations/{registrationId} | Does this registration exist?
[**getRegistrationConfiguration**](RegistrationApi.md#getregistrationconfiguration) | **GET** /registrations/{registrationId}/configuration | Returns all configuration settings for this registration
[**getRegistrationInstanceConfiguration**](RegistrationApi.md#getregistrationinstanceconfiguration) | **GET** /registrations/{registrationId}/instances/{instanceId}/configuration | Returns all configuration settings for this registration instance
[**getRegistrationInstanceLaunchHistory**](RegistrationApi.md#getregistrationinstancelaunchhistory) | **GET** /registrations/{registrationId}/instances/{instanceId}/launchHistory | Returns history of this registration&#x27;s launches
[**getRegistrationInstanceProgress**](RegistrationApi.md#getregistrationinstanceprogress) | **GET** /registrations/{registrationId}/instances/{instanceId} | Get registration progress for instance &#x60;instanceId&#x60; of &#x60;registrationId&#x60;
[**getRegistrationInstanceStatements**](RegistrationApi.md#getregistrationinstancestatements) | **GET** /registrations/{registrationId}/instances/{instanceId}/xAPIStatements | Get xAPI statements for instance &#x60;instanceId&#x60; of &#x60;registrationId&#x60;
[**getRegistrationInstances**](RegistrationApi.md#getregistrationinstances) | **GET** /registrations/{registrationId}/instances | Get all the instances of this the registration specified by the registration ID
[**getRegistrationLaunchHistory**](RegistrationApi.md#getregistrationlaunchhistory) | **GET** /registrations/{registrationId}/launchHistory | Returns history of this registration&#x27;s launches
[**getRegistrationProgress**](RegistrationApi.md#getregistrationprogress) | **GET** /registrations/{registrationId} | Get registration progress for &#x60;registrationId&#x60;
[**getRegistrationStatements**](RegistrationApi.md#getregistrationstatements) | **GET** /registrations/{registrationId}/xAPIStatements | Get xAPI statements for &#x60;registrationId&#x60;
[**getRegistrations**](RegistrationApi.md#getregistrations) | **GET** /registrations | Gets a list of registrations including a summary of the status of each registration.
[**setRegistrationConfiguration**](RegistrationApi.md#setregistrationconfiguration) | **POST** /registrations/{registrationId}/configuration | Set configuration settings for this registration.
[**setRegistrationInstanceConfiguration**](RegistrationApi.md#setregistrationinstanceconfiguration) | **POST** /registrations/{registrationId}/instances/{instanceId}/configuration | Set configuration settings for this registration instance.

# **buildRegistrationLaunchLink**
> \Swagger\Client\Model\LaunchLinkSchema buildRegistrationLaunchLink($body, $engine_tenant_name, $registration_id)

Returns the link to use to launch this registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\LaunchLinkRequestSchema(); // \Swagger\Client\Model\LaunchLinkRequestSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $result = $apiInstance->buildRegistrationLaunchLink($body, $engine_tenant_name, $registration_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->buildRegistrationLaunchLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LaunchLinkRequestSchema**](../Model/LaunchLinkRequestSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |

### Return type

[**\Swagger\Client\Model\LaunchLinkSchema**](../Model/LaunchLinkSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewRegistrationInstance**
> createNewRegistrationInstance($engine_tenant_name, $registration_id)

Create a new instance for this registration specified by the registration ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $apiInstance->createNewRegistrationInstance($engine_tenant_name, $registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->createNewRegistrationInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRegistration**
> createRegistration($body, $engine_tenant_name, $course_version)

Create a registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateRegistrationSchema(); // \Swagger\Client\Model\CreateRegistrationSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_version = 56; // int | The version of the course you want to create the registration for. Unless you have a reason for using this you probably do not need to.

try {
    $apiInstance->createRegistration($body, $engine_tenant_name, $course_version);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->createRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateRegistrationSchema**](../Model/CreateRegistrationSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **course_version** | **int**| The version of the course you want to create the registration for. Unless you have a reason for using this you probably do not need to. | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistration**
> deleteRegistration($engine_tenant_name, $registration_id)

Delete `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $apiInstance->deleteRegistration($engine_tenant_name, $registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationConfigurationSetting**
> deleteRegistrationConfigurationSetting($engine_tenant_name, $registration_id, $setting_id)

Clears the `settingId` value for this registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteRegistrationConfigurationSetting($engine_tenant_name, $registration_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationGlobalData**
> deleteRegistrationGlobalData($engine_tenant_name, $registration_id)

delete global data associated with `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $apiInstance->deleteRegistrationGlobalData($engine_tenant_name, $registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationGlobalData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationInstance**
> deleteRegistrationInstance($engine_tenant_name, $registration_id, $instance_id)

Delete instance `instanceId` of `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | the instance of this registration

try {
    $apiInstance->deleteRegistrationInstance($engine_tenant_name, $registration_id, $instance_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| the instance of this registration |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationInstanceConfigurationSetting**
> deleteRegistrationInstanceConfigurationSetting($engine_tenant_name, $registration_id, $instance_id, $setting_id)

Clears the `settingId` value for this registration instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | the instance of this registration
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteRegistrationInstanceConfigurationSetting($engine_tenant_name, $registration_id, $instance_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationInstanceConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| the instance of this registration |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationProgress**
> deleteRegistrationProgress($engine_tenant_name, $registration_id)

delete registration progress (clear registration)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $apiInstance->deleteRegistrationProgress($engine_tenant_name, $registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistration**
> getRegistration($engine_tenant_name, $registration_id)

Does this registration exist?

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $apiInstance->getRegistration($engine_tenant_name, $registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationConfiguration**
> \Swagger\Client\Model\SettingListSchema getRegistrationConfiguration($engine_tenant_name, $registration_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens)

Returns all configuration settings for this registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$include_metadata = true; // bool | 
$include_hidden_settings = true; // bool | Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing.
$include_secret_settings = true; // bool | Should settings that are stored encrypted (type 'secretString') be included. Note: if included, the decrypted value will be returned.
$process_replacement_tokens = true; // bool | Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements)

try {
    $result = $apiInstance->getRegistrationConfiguration($engine_tenant_name, $registration_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **include_metadata** | **bool**|  | [optional]
 **include_hidden_settings** | **bool**| Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing. | [optional]
 **include_secret_settings** | **bool**| Should settings that are stored encrypted (type &#x27;secretString&#x27;) be included. Note: if included, the decrypted value will be returned. | [optional]
 **process_replacement_tokens** | **bool**| Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements) | [optional]

### Return type

[**\Swagger\Client\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstanceConfiguration**
> \Swagger\Client\Model\SettingListSchema getRegistrationInstanceConfiguration($engine_tenant_name, $registration_id, $instance_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens)

Returns all configuration settings for this registration instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | the instance of this registration
$include_metadata = true; // bool | 
$include_hidden_settings = true; // bool | Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing.
$include_secret_settings = true; // bool | Should settings that are stored encrypted (type 'secretString') be included. Note: if included, the decrypted value will be returned.
$process_replacement_tokens = true; // bool | Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements)

try {
    $result = $apiInstance->getRegistrationInstanceConfiguration($engine_tenant_name, $registration_id, $instance_id, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstanceConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| the instance of this registration |
 **include_metadata** | **bool**|  | [optional]
 **include_hidden_settings** | **bool**| Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing. | [optional]
 **include_secret_settings** | **bool**| Should settings that are stored encrypted (type &#x27;secretString&#x27;) be included. Note: if included, the decrypted value will be returned. | [optional]
 **process_replacement_tokens** | **bool**| Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements) | [optional]

### Return type

[**\Swagger\Client\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstanceLaunchHistory**
> \Swagger\Client\Model\LaunchHistoryListSchema getRegistrationInstanceLaunchHistory($engine_tenant_name, $registration_id, $instance_id, $include_history_log)

Returns history of this registration's launches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | the instance of this registration
$include_history_log = true; // bool | Whether to include the history log in the launch history

try {
    $result = $apiInstance->getRegistrationInstanceLaunchHistory($engine_tenant_name, $registration_id, $instance_id, $include_history_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstanceLaunchHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| the instance of this registration |
 **include_history_log** | **bool**| Whether to include the history log in the launch history | [optional]

### Return type

[**\Swagger\Client\Model\LaunchHistoryListSchema**](../Model/LaunchHistoryListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstanceProgress**
> \Swagger\Client\Model\RegistrationSchema getRegistrationInstanceProgress($engine_tenant_name, $registration_id, $instance_id, $include_child_results, $include_interactions_and_objectives, $include_runtime, $create_xapi_registration_id_if_absent)

Get registration progress for instance `instanceId` of `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | the instance of this registration
$include_child_results = true; // bool | Include information about each learning object, not just the top level in the results
$include_interactions_and_objectives = true; // bool | Include interactions and objectives in the results
$include_runtime = true; // bool | Include runtime details in the results
$create_xapi_registration_id_if_absent = true; // bool | create the xAPI registration ID for this registration if one does not already exist

try {
    $result = $apiInstance->getRegistrationInstanceProgress($engine_tenant_name, $registration_id, $instance_id, $include_child_results, $include_interactions_and_objectives, $include_runtime, $create_xapi_registration_id_if_absent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstanceProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| the instance of this registration |
 **include_child_results** | **bool**| Include information about each learning object, not just the top level in the results | [optional]
 **include_interactions_and_objectives** | **bool**| Include interactions and objectives in the results | [optional]
 **include_runtime** | **bool**| Include runtime details in the results | [optional]
 **create_xapi_registration_id_if_absent** | **bool**| create the xAPI registration ID for this registration if one does not already exist | [optional]

### Return type

[**\Swagger\Client\Model\RegistrationSchema**](../Model/RegistrationSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstanceStatements**
> \Swagger\Client\Model\XapiStatementResult getRegistrationInstanceStatements($engine_tenant_name, $registration_id, $instance_id, $since, $until, $more)

Get xAPI statements for instance `instanceId` of `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | the instance of this registration
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getRegistrationInstanceStatements($engine_tenant_name, $registration_id, $instance_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstanceStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| the instance of this registration |
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\Swagger\Client\Model\XapiStatementResult**](../Model/XapiStatementResult.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstances**
> \Swagger\Client\Model\RegistrationListSchema getRegistrationInstances($engine_tenant_name, $registration_id, $since, $until, $more, $include_child_results, $include_interactions_and_objectives, $include_runtime)

Get all the instances of this the registration specified by the registration ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$include_child_results = true; // bool | Include information about each learning object, not just the top level in the results
$include_interactions_and_objectives = true; // bool | Include interactions and objectives in the results
$include_runtime = true; // bool | Include runtime details in the results

try {
    $result = $apiInstance->getRegistrationInstances($engine_tenant_name, $registration_id, $since, $until, $more, $include_child_results, $include_interactions_and_objectives, $include_runtime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **include_child_results** | **bool**| Include information about each learning object, not just the top level in the results | [optional]
 **include_interactions_and_objectives** | **bool**| Include interactions and objectives in the results | [optional]
 **include_runtime** | **bool**| Include runtime details in the results | [optional]

### Return type

[**\Swagger\Client\Model\RegistrationListSchema**](../Model/RegistrationListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationLaunchHistory**
> \Swagger\Client\Model\LaunchHistoryListSchema getRegistrationLaunchHistory($engine_tenant_name, $registration_id, $include_history_log)

Returns history of this registration's launches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$include_history_log = true; // bool | Whether to include the history log in the launch history

try {
    $result = $apiInstance->getRegistrationLaunchHistory($engine_tenant_name, $registration_id, $include_history_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationLaunchHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **include_history_log** | **bool**| Whether to include the history log in the launch history | [optional]

### Return type

[**\Swagger\Client\Model\LaunchHistoryListSchema**](../Model/LaunchHistoryListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationProgress**
> \Swagger\Client\Model\RegistrationSchema getRegistrationProgress($engine_tenant_name, $registration_id, $include_child_results, $include_interactions_and_objectives, $include_runtime, $create_xapi_registration_id_if_absent)

Get registration progress for `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$include_child_results = true; // bool | Include information about each learning object, not just the top level in the results
$include_interactions_and_objectives = true; // bool | Include interactions and objectives in the results
$include_runtime = true; // bool | Include runtime details in the results
$create_xapi_registration_id_if_absent = true; // bool | create the xAPI registration ID for this registration if one does not already exist

try {
    $result = $apiInstance->getRegistrationProgress($engine_tenant_name, $registration_id, $include_child_results, $include_interactions_and_objectives, $include_runtime, $create_xapi_registration_id_if_absent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **include_child_results** | **bool**| Include information about each learning object, not just the top level in the results | [optional]
 **include_interactions_and_objectives** | **bool**| Include interactions and objectives in the results | [optional]
 **include_runtime** | **bool**| Include runtime details in the results | [optional]
 **create_xapi_registration_id_if_absent** | **bool**| create the xAPI registration ID for this registration if one does not already exist | [optional]

### Return type

[**\Swagger\Client\Model\RegistrationSchema**](../Model/RegistrationSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationStatements**
> \Swagger\Client\Model\XapiStatementResult getRegistrationStatements($engine_tenant_name, $registration_id, $since, $until, $more)

Get xAPI statements for `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getRegistrationStatements($engine_tenant_name, $registration_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\Swagger\Client\Model\XapiStatementResult**](../Model/XapiStatementResult.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrations**
> \Swagger\Client\Model\RegistrationListSchema getRegistrations($engine_tenant_name, $course_id, $learner_id, $since, $until, $more, $include_child_results, $include_interactions_and_objectives, $include_runtime)

Gets a list of registrations including a summary of the status of each registration.

The 'since' parameter exists to allow retrieving only registrations that have changed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$course_id = "course_id_example"; // string | Only registrations for the specified course id will be included.
$learner_id = "learner_id_example"; // string | Only entries for the specified learner id will be included.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of lists, where needed. An opaque value, construction and parsing may change without notice.
$include_child_results = true; // bool | Include information about each learning object, not just the top level in the results
$include_interactions_and_objectives = true; // bool | Include interactions and objectives in the results
$include_runtime = true; // bool | Include runtime details in the results

try {
    $result = $apiInstance->getRegistrations($engine_tenant_name, $course_id, $learner_id, $since, $until, $more, $include_child_results, $include_interactions_and_objectives, $include_runtime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **course_id** | **string**| Only registrations for the specified course id will be included. | [optional]
 **learner_id** | **string**| Only entries for the specified learner id will be included. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated up until the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#x27;more&#x27; property of lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **include_child_results** | **bool**| Include information about each learning object, not just the top level in the results | [optional]
 **include_interactions_and_objectives** | **bool**| Include interactions and objectives in the results | [optional]
 **include_runtime** | **bool**| Include runtime details in the results | [optional]

### Return type

[**\Swagger\Client\Model\RegistrationListSchema**](../Model/RegistrationListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRegistrationConfiguration**
> setRegistrationConfiguration($body, $engine_tenant_name, $registration_id)

Set configuration settings for this registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SettingsPostSchema(); // \Swagger\Client\Model\SettingsPostSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $apiInstance->setRegistrationConfiguration($body, $engine_tenant_name, $registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->setRegistrationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRegistrationInstanceConfiguration**
> setRegistrationInstanceConfiguration($body, $engine_tenant_name, $registration_id, $instance_id)

Set configuration settings for this registration instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basic
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SettingsPostSchema(); // \Swagger\Client\Model\SettingsPostSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | the instance of this registration

try {
    $apiInstance->setRegistrationInstanceConfiguration($body, $engine_tenant_name, $registration_id, $instance_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->setRegistrationInstanceConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| the instance of this registration |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
