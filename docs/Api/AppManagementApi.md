# Swagger\Client\AppManagementApi

All URIs are relative to */api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCredential**](AppManagementApi.md#createcredential) | **POST** /appManagement/credentials | Create credential
[**createOrUpdateTenant**](AppManagementApi.md#createorupdatetenant) | **PUT** /appManagement/tenants/{tenantName} | Create or update tenant
[**createToken**](AppManagementApi.md#createtoken) | **POST** /appManagement/token | Create token
[**deleteApplicationConfigurationSetting**](AppManagementApi.md#deleteapplicationconfigurationsetting) | **DELETE** /appManagement/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this level
[**deleteCredential**](AppManagementApi.md#deletecredential) | **DELETE** /appManagement/credentials/{credentialId} | Removes &#x60;credentialId&#x60; credentials
[**deleteTenant**](AppManagementApi.md#deletetenant) | **DELETE** /appManagement/tenants/{tenantName} | Delete a tenant. Warning: If tenant data is not deleted first, this will leave orphaned rows that can only be deleted manually. Does not remove any data, but does remove mapping between name and key used to store data. Consider deactivating instead.
[**deleteTenantData**](AppManagementApi.md#deletetenantdata) | **DELETE** /appManagement/tenants/{tenantName}/data | Delete all of a tenant&#x27;s data.
[**getApplicationConfiguration**](AppManagementApi.md#getapplicationconfiguration) | **GET** /appManagement/configuration | Returns all configuration settings for this level
[**getAuthenticatedCredential**](AppManagementApi.md#getauthenticatedcredential) | **GET** /appManagement/authenticatedCredential | Get information about the credential used to authenticate this request.
[**getCredential**](AppManagementApi.md#getcredential) | **GET** /appManagement/credentials/{credentialId} | Get information on &#x60;credentialId&#x60; credential
[**getCredentials**](AppManagementApi.md#getcredentials) | **GET** /appManagement/credentials | List of credentials
[**getPIIDeletionJob**](AppManagementApi.md#getpiideletionjob) | **GET** /appManagement/PII/deletionJob/{jobId} | Check the status of a PII deletion job with the provided job id.
[**getTenantList**](AppManagementApi.md#gettenantlist) | **GET** /appManagement/tenants | Get list of all tenants
[**inspectToken**](AppManagementApi.md#inspecttoken) | **GET** /appManagement/token | Inspect token
[**postPIIDeletionJob**](AppManagementApi.md#postpiideletionjob) | **POST** /appManagement/PII/deletionJob | Initiate a job to delete a user&#x27;s Personal Identifying Information from the system.
[**postUpdateEncryptedSetting**](AppManagementApi.md#postupdateencryptedsetting) | **POST** /appManagement/configuration/updateEncryptedSettings | Re-write settings, and statement pipe passwords using the current encryption settings. For password rotation.
[**resetCredentialSecret**](AppManagementApi.md#resetcredentialsecret) | **POST** /appManagement/credentials/{credentialId}/resetSecret | Reset credential secret
[**setApplicationConfiguration**](AppManagementApi.md#setapplicationconfiguration) | **POST** /appManagement/configuration | Set configuration settings for this level.
[**updateCredential**](AppManagementApi.md#updatecredential) | **PUT** /appManagement/credentials/{credentialId} | Update &#x60;credentialId&#x60; credentials

# **createCredential**
> \Swagger\Client\Model\CredentialCreatedSchema createCredential($body, $engine_tenant_name)

Create credential

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CredentialRequestSchema(); // \Swagger\Client\Model\CredentialRequestSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->createCredential($body, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->createCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CredentialRequestSchema**](../Model/CredentialRequestSchema.md)|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\Swagger\Client\Model\CredentialCreatedSchema**](../Model/CredentialCreatedSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateTenant**
> createOrUpdateTenant($body, $tenant_name)

Create or update tenant

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \stdClass; // object | 
$tenant_name = "tenant_name_example"; // string | 

try {
    $apiInstance->createOrUpdateTenant($body, $tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->createOrUpdateTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object**](../Model/object.md)|  |
 **tenant_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createToken**
> \Swagger\Client\Model\StringResultSchema createToken($body, $engine_tenant_name)

Create token

Creates, signs and returns a token based on the provided permissions, if the credentials used to request the token have the permissions being requested. Note: the token is not stored and therefore can not be modified or deleted. The requested permissions are encoded in the token which is then signed. As long as the secret used to create it is not changed the token will be valid until it expires.

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TokenRequestSchema(); // \Swagger\Client\Model\TokenRequestSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->createToken($body, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TokenRequestSchema**](../Model/TokenRequestSchema.md)|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\Swagger\Client\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApplicationConfigurationSetting**
> deleteApplicationConfigurationSetting($setting_id, $engine_tenant_name, $learning_standard, $single_sco)

Clears the `settingId` value for this level

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$setting_id = "setting_id_example"; // string | 
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request
$learning_standard = "learning_standard_example"; // string | Required if singleSco is specified. Scopes the request to the provided learning standard.
$single_sco = true; // bool | Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes.

try {
    $apiInstance->deleteApplicationConfigurationSetting($setting_id, $engine_tenant_name, $learning_standard, $single_sco);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteApplicationConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **setting_id** | **string**|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **learning_standard** | **string**| Required if singleSco is specified. Scopes the request to the provided learning standard. | [optional]
 **single_sco** | **bool**| Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes. | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCredential**
> deleteCredential($credential_id, $engine_tenant_name)

Removes `credentialId` credentials

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = "credential_id_example"; // string | 
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $apiInstance->deleteCredential($credential_id, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_id** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTenant**
> deleteTenant($tenant_name)

Delete a tenant. Warning: If tenant data is not deleted first, this will leave orphaned rows that can only be deleted manually. Does not remove any data, but does remove mapping between name and key used to store data. Consider deactivating instead.

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_name = "tenant_name_example"; // string | 

try {
    $apiInstance->deleteTenant($tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteTenant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTenantData**
> deleteTenantData($tenant_name)

Delete all of a tenant's data.

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_name = "tenant_name_example"; // string | 

try {
    $apiInstance->deleteTenantData($tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->deleteTenantData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationConfiguration**
> \Swagger\Client\Model\SettingListSchema getApplicationConfiguration($engine_tenant_name, $learning_standard, $single_sco, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens)

Returns all configuration settings for this level

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request
$learning_standard = "learning_standard_example"; // string | Required if singleSco is specified. Scopes the request to the provided learning standard.
$single_sco = true; // bool | Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes.
$include_metadata = true; // bool | 
$include_hidden_settings = true; // bool | Should settings that are declared to be hidden be included. Note: such settings generally do not need to be modified, and may be confusing.
$include_secret_settings = true; // bool | Should settings that are stored encrypted (type 'secretString') be included. Note: if included, the decrypted value will be returned.
$process_replacement_tokens = true; // bool | Whether to process replacement tokens (false returns the raw value of each setting, without tokens or environment variable replacements)

try {
    $result = $apiInstance->getApplicationConfiguration($engine_tenant_name, $learning_standard, $single_sco, $include_metadata, $include_hidden_settings, $include_secret_settings, $process_replacement_tokens);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getApplicationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **learning_standard** | **string**| Required if singleSco is specified. Scopes the request to the provided learning standard. | [optional]
 **single_sco** | **bool**| Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes. | [optional]
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

# **getAuthenticatedCredential**
> \Swagger\Client\Model\CredentialSchema getAuthenticatedCredential($engine_tenant_name)

Get information about the credential used to authenticate this request.

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->getAuthenticatedCredential($engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getAuthenticatedCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\Swagger\Client\Model\CredentialSchema**](../Model/CredentialSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCredential**
> \Swagger\Client\Model\CredentialSchema getCredential($credential_id, $engine_tenant_name)

Get information on `credentialId` credential

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = "credential_id_example"; // string | 
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->getCredential($credential_id, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_id** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\Swagger\Client\Model\CredentialSchema**](../Model/CredentialSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCredentials**
> \Swagger\Client\Model\CredentialListSchema getCredentials($engine_tenant_name)

List of credentials

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->getCredentials($engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\Swagger\Client\Model\CredentialListSchema**](../Model/CredentialListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPIIDeletionJob**
> \Swagger\Client\Model\PIIDeletionResultSchema getPIIDeletionJob($engine_tenant_name, $job_id)

Check the status of a PII deletion job with the provided job id.

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request
$job_id = "job_id_example"; // string | 

try {
    $result = $apiInstance->getPIIDeletionJob($engine_tenant_name, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getPIIDeletionJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |
 **job_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\PIIDeletionResultSchema**](../Model/PIIDeletionResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTenantList**
> \Swagger\Client\Model\TenantListSchema getTenantList($include_deactivated)

Get list of all tenants

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_deactivated = true; // bool | 

try {
    $result = $apiInstance->getTenantList($include_deactivated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->getTenantList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **include_deactivated** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\TenantListSchema**](../Model/TenantListSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inspectToken**
> \Swagger\Client\Model\TokenInfoSchema inspectToken($token, $engine_tenant_name)

Inspect token

Verifies the signature of the provided token, and if valid returns information about the token

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | 
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->inspectToken($token, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->inspectToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\Swagger\Client\Model\TokenInfoSchema**](../Model/TokenInfoSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPIIDeletionJob**
> \Swagger\Client\Model\PIIDeletionRequestResultSchema postPIIDeletionJob($body, $engine_tenant_name)

Initiate a job to delete a user's Personal Identifying Information from the system.

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PIIDeletionRequestSchema(); // \Swagger\Client\Model\PIIDeletionRequestSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request

try {
    $result = $apiInstance->postPIIDeletionJob($body, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->postPIIDeletionJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PIIDeletionRequestSchema**](../Model/PIIDeletionRequestSchema.md)|  |
 **engine_tenant_name** | **string**| tenant for this request |

### Return type

[**\Swagger\Client\Model\PIIDeletionRequestResultSchema**](../Model/PIIDeletionRequestResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpdateEncryptedSetting**
> postUpdateEncryptedSetting($engine_tenant_name)

Re-write settings, and statement pipe passwords using the current encryption settings. For password rotation.

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$engine_tenant_name = "engine_tenant_name_example"; // string | tenant for this request

try {
    $apiInstance->postUpdateEncryptedSetting($engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->postUpdateEncryptedSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **engine_tenant_name** | **string**| tenant for this request |

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetCredentialSecret**
> \Swagger\Client\Model\StringResultSchema resetCredentialSecret($credential_id, $engine_tenant_name)

Reset credential secret

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credential_id = "credential_id_example"; // string | 
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $result = $apiInstance->resetCredentialSecret($credential_id, $engine_tenant_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->resetCredentialSecret: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credential_id** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

[**\Swagger\Client\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setApplicationConfiguration**
> setApplicationConfiguration($body, $engine_tenant_name, $learning_standard, $single_sco)

Set configuration settings for this level.

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SettingsPostSchema(); // \Swagger\Client\Model\SettingsPostSchema | 
$engine_tenant_name = "engine_tenant_name_example"; // string | optional tenant for this request
$learning_standard = "learning_standard_example"; // string | Required if singleSco is specified. Scopes the request to the provided learning standard.
$single_sco = true; // bool | Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes.

try {
    $apiInstance->setApplicationConfiguration($body, $engine_tenant_name, $learning_standard, $single_sco);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->setApplicationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |
 **engine_tenant_name** | **string**| optional tenant for this request | [optional]
 **learning_standard** | **string**| Required if singleSco is specified. Scopes the request to the provided learning standard. | [optional]
 **single_sco** | **bool**| Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes. | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCredential**
> updateCredential($body, $credential_id, $engine_tenant_name)

Update `credentialId` credentials

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

$apiInstance = new Swagger\Client\Api\AppManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CredentialRequestSchema(); // \Swagger\Client\Model\CredentialRequestSchema | 
$credential_id = "credential_id_example"; // string | 
$engine_tenant_name = "engine_tenant_name_example"; // string | If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains 'tenantName' which should be used for any permissions that need to be scoped to a particular tenant.

try {
    $apiInstance->updateCredential($body, $credential_id, $engine_tenant_name);
} catch (Exception $e) {
    echo 'Exception when calling AppManagementApi->updateCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CredentialRequestSchema**](../Model/CredentialRequestSchema.md)|  |
 **credential_id** | **string**|  |
 **engine_tenant_name** | **string**| If specified, the tenant that will be used to store or validate the credentials or token. If not specified, the system data store / settings will be used. Note that PermissionsSchema contains &#x27;tenantName&#x27; which should be used for any permissions that need to be scoped to a particular tenant. | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic), [oauth](../../README.md#oauth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

