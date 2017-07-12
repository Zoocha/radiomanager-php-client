# RadioManager\CampaignApi

All URIs are relative to *http://radiomanager.pb/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCampaign**](CampaignApi.md#createCampaign) | **POST** /campaigns | Create campaign.
[**deleteCampaignById**](CampaignApi.md#deleteCampaignById) | **DELETE** /campaigns/{id} | Delete campaign by id
[**getCampaignById**](CampaignApi.md#getCampaignById) | **GET** /campaigns/{id} | Get campaign by id
[**listCampaigns**](CampaignApi.md#listCampaigns) | **GET** /campaigns | Get all campaigns.
[**updateCampaignByID**](CampaignApi.md#updateCampaignByID) | **PATCH** /campaigns/{id} | Update campaign by id


# **createCampaign**
> \RadioManager\RadioManagerModels\PostSuccess createCampaign($data)

Create campaign.

Create campaign.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\CampaignApi();
$data = new \RadioManager\RadioManagerModels\CampaignDataInput(); // \RadioManager\RadioManagerModels\CampaignDataInput | Data **(Required)**

try {
    $result = $api_instance->createCampaign($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->createCampaign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\RadioManagerModels\CampaignDataInput**](../Model/CampaignDataInput.md)| Data **(Required)** |

### Return type

[**\RadioManager\RadioManagerModels\PostSuccess**](../Model/PostSuccess.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCampaignById**
> \RadioManager\RadioManagerModels\Success deleteCampaignById($id)

Delete campaign by id

Delete campaign by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\CampaignApi();
$id = 789; // int | ID of Campaign **(Required)**

try {
    $result = $api_instance->deleteCampaignById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->deleteCampaignById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Campaign **(Required)** |

### Return type

[**\RadioManager\RadioManagerModels\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignById**
> \RadioManager\RadioManagerModels\CampaignResult getCampaignById($id, $_station_id)

Get campaign by id

Get campaign by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\CampaignApi();
$id = 789; // int | ID of Campaign **(Required)**
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getCampaignById($id, $_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Campaign **(Required)** |
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\CampaignResult**](../Model/CampaignResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCampaigns**
> \RadioManager\RadioManagerModels\CampaignResults listCampaigns($page, $model_type_id, $item_id, $start_min, $start_max, $_station_id)

Get all campaigns.

List all campaigns.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\CampaignApi();
$page = 789; // int | Current page *(Optional)*
$model_type_id = 789; // int | Search on ModelType ID *(Optional)*
$item_id = 789; // int | Search on Item ID *(Optional)* `(Relation)`
$start_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum start date *(Optional)*
$start_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum start date *(Optional)*
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listCampaigns($page, $model_type_id, $item_id, $start_min, $start_max, $_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->listCampaigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional]
 **model_type_id** | **int**| Search on ModelType ID *(Optional)* | [optional]
 **item_id** | **int**| Search on Item ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **start_min** | **\DateTime**| Minimum start date *(Optional)* | [optional]
 **start_max** | **\DateTime**| Maximum start date *(Optional)* | [optional]
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\CampaignResults**](../Model/CampaignResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCampaignByID**
> \RadioManager\RadioManagerModels\Success updateCampaignByID($id, $data)

Update campaign by id

Update campaign by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\CampaignApi();
$id = 789; // int | ID of Campaign **(Required)**
$data = new \RadioManager\RadioManagerModels\CampaignDataInput(); // \RadioManager\RadioManagerModels\CampaignDataInput | Data *(Optional)*

try {
    $result = $api_instance->updateCampaignByID($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->updateCampaignByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Campaign **(Required)** |
 **data** | [**\RadioManager\RadioManagerModels\CampaignDataInput**](../Model/CampaignDataInput.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

