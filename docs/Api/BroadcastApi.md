# RadioManager\BroadcastApi

All URIs are relative to *http://radiomanager.pluxbox.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBroadcast**](BroadcastApi.md#createBroadcast) | **POST** /broadcasts | Create broadcast.
[**deleteBroadcastById**](BroadcastApi.md#deleteBroadcastById) | **DELETE** /broadcasts/{id} | Delete broadcast by id
[**getBroadcastById**](BroadcastApi.md#getBroadcastById) | **GET** /broadcasts/{id} | Get broadcast by id
[**getCurrentBroadcast**](BroadcastApi.md#getCurrentBroadcast) | **GET** /broadcasts/current | Get current Broadcast
[**getDailyEPG**](BroadcastApi.md#getDailyEPG) | **GET** /broadcasts/epg/daily | Get daily EPG
[**getEPGByDate**](BroadcastApi.md#getEPGByDate) | **GET** /broadcasts/epg | Get EPG by date
[**getNextBroadcast**](BroadcastApi.md#getNextBroadcast) | **GET** /broadcasts/next | Get next Broadcast
[**getWeeklyEPG**](BroadcastApi.md#getWeeklyEPG) | **GET** /broadcasts/epg/weekly | Get weekly EPG
[**listBroadcasts**](BroadcastApi.md#listBroadcasts) | **GET** /broadcasts | Get all broadcasts.
[**printBroadcastById**](BroadcastApi.md#printBroadcastById) | **GET** /broadcasts/print/{id} | Print Broadcast by id
[**updateBroadcastByID**](BroadcastApi.md#updateBroadcastByID) | **PATCH** /broadcasts/{id} | Update broadcast by id


# **createBroadcast**
> \RadioManager\RadioManagerModels\PostSuccess createBroadcast($data)

Create broadcast.

Create broadcast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$data = new \RadioManager\RadioManagerModels\BroadcastDataInput(); // \RadioManager\RadioManagerModels\BroadcastDataInput | Data **(Required)**

try {
    $result = $api_instance->createBroadcast($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->createBroadcast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\RadioManagerModels\BroadcastDataInput**](../Model/BroadcastDataInput.md)| Data **(Required)** |

### Return type

[**\RadioManager\RadioManagerModels\PostSuccess**](../Model/PostSuccess.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBroadcastById**
> \RadioManager\RadioManagerModels\Success deleteBroadcastById($id)

Delete broadcast by id

Delete broadcast by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$id = 789; // int | ID of Broadcast **(Required)**

try {
    $result = $api_instance->deleteBroadcastById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->deleteBroadcastById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Broadcast **(Required)** |

### Return type

[**\RadioManager\RadioManagerModels\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBroadcastById**
> \RadioManager\RadioManagerModels\BroadcastResult getBroadcastById($id, $_station_id)

Get broadcast by id

Get broadcast by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$id = 789; // int | ID of Broadcast **(Required)**
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getBroadcastById($id, $_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getBroadcastById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Broadcast **(Required)** |
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\BroadcastResult**](../Model/BroadcastResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentBroadcast**
> \RadioManager\RadioManagerModels\Broadcast getCurrentBroadcast()

Get current Broadcast

Get current Broadcast

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();

try {
    $result = $api_instance->getCurrentBroadcast();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getCurrentBroadcast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioManager\RadioManagerModels\Broadcast**](../Model/Broadcast.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDailyEPG**
> \RadioManager\RadioManagerModels\EPGBroadcast getDailyEPG($date)

Get daily EPG

Get current Broadcast

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date *(Optional)*

try {
    $result = $api_instance->getDailyEPG($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getDailyEPG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Date *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\EPGBroadcast**](../Model/EPGBroadcast.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEPGByDate**
> \RadioManager\RadioManagerModels\EPGBroadcast getEPGByDate($date)

Get EPG by date

Get EPG by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date *(Optional)*

try {
    $result = $api_instance->getEPGByDate($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getEPGByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Date *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\EPGBroadcast**](../Model/EPGBroadcast.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNextBroadcast**
> \RadioManager\RadioManagerModels\Broadcast getNextBroadcast()

Get next Broadcast

Get next Broadcast

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();

try {
    $result = $api_instance->getNextBroadcast();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getNextBroadcast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioManager\RadioManagerModels\Broadcast**](../Model/Broadcast.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWeeklyEPG**
> \RadioManager\RadioManagerModels\EPGBroadcast getWeeklyEPG($date)

Get weekly EPG

Get weekly EPG

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$date = "date_example"; // string | Date *(Optional)*

try {
    $result = $api_instance->getWeeklyEPG($date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getWeeklyEPG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| Date *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\EPGBroadcast**](../Model/EPGBroadcast.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBroadcasts**
> \RadioManager\RadioManagerModels\BroadcastResults listBroadcasts($page, $start_min, $start_max, $model_type_id, $tag_id, $presenter_id, $item_id, $block_id, $genre_id, $program_id, $_station_id)

Get all broadcasts.

List all broadcasts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$page = 1; // int | Current page *(Optional)*
$start_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum start date *(Optional)*
$start_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum start date *(Optional)*
$model_type_id = 789; // int | Search on ModelType ID *(Optional)*
$tag_id = 789; // int | Search on Tag ID *(Optional)* `(Relation)`
$presenter_id = 789; // int | Search on Presenter ID *(Optional)* `(Relation)`
$item_id = 789; // int | Search on Item ID *(Optional)* `(Relation)`
$block_id = 789; // int | Search on Block ID *(Optional)* `(Relation)`
$genre_id = 789; // int | Search on Genre ID *(Optional)* `(Relation)`
$program_id = 789; // int | Search on Program ID *(Optional)* `(Relation)`
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listBroadcasts($page, $start_min, $start_max, $model_type_id, $tag_id, $presenter_id, $item_id, $block_id, $genre_id, $program_id, $_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->listBroadcasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional] [default to 1]
 **start_min** | **\DateTime**| Minimum start date *(Optional)* | [optional]
 **start_max** | **\DateTime**| Maximum start date *(Optional)* | [optional]
 **model_type_id** | **int**| Search on ModelType ID *(Optional)* | [optional]
 **tag_id** | **int**| Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **presenter_id** | **int**| Search on Presenter ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **item_id** | **int**| Search on Item ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **block_id** | **int**| Search on Block ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **genre_id** | **int**| Search on Genre ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **program_id** | **int**| Search on Program ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\BroadcastResults**](../Model/BroadcastResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **printBroadcastById**
> \RadioManager\RadioManagerModels\EPGBroadcast printBroadcastById($id, $program_id, $presenter_id, $tag_id)

Print Broadcast by id

Print Broadcast by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$id = 789; // int | ID of Broadcast **(Required)**
$program_id = 789; // int | Search on Program ID *(Optional)* `(Relation)`
$presenter_id = 789; // int | Search on Presenter ID *(Optional)* `(Relation)`
$tag_id = 789; // int | Search on Tag ID *(Optional)* `(Relation)`

try {
    $result = $api_instance->printBroadcastById($id, $program_id, $presenter_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->printBroadcastById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Broadcast **(Required)** |
 **program_id** | **int**| Search on Program ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **presenter_id** | **int**| Search on Presenter ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **tag_id** | **int**| Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; | [optional]

### Return type

[**\RadioManager\RadioManagerModels\EPGBroadcast**](../Model/EPGBroadcast.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBroadcastByID**
> \RadioManager\RadioManagerModels\Success updateBroadcastByID($id, $data)

Update broadcast by id

Update broadcast by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$id = 789; // int | ID of Broadcast **(Required)**
$data = new \RadioManager\RadioManagerModels\BroadcastDataInput(); // \RadioManager\RadioManagerModels\BroadcastDataInput | Data *(Optional)*

try {
    $result = $api_instance->updateBroadcastByID($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->updateBroadcastByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Broadcast **(Required)** |
 **data** | [**\RadioManager\RadioManagerModels\BroadcastDataInput**](../Model/BroadcastDataInput.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

