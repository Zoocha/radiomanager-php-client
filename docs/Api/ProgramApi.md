# RadioManager\ProgramApi

All URIs are relative to *http://radiomanager.pluxbox.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgram**](ProgramApi.md#createProgram) | **POST** /programs | Create program.
[**deleteProgramById**](ProgramApi.md#deleteProgramById) | **DELETE** /programs/{id} | Delete program by id
[**getProgramById**](ProgramApi.md#getProgramById) | **GET** /programs/{id} | Get program by id
[**listPrograms**](ProgramApi.md#listPrograms) | **GET** /programs | Get all programs.
[**updateProgramByID**](ProgramApi.md#updateProgramByID) | **PATCH** /programs/{id} | Update program by id


# **createProgram**
> \RadioManager\RadioManagerModels\PostSuccess createProgram($data)

Create program.

Create program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$data = new \RadioManager\RadioManagerModels\ProgramDataInput(); // \RadioManager\RadioManagerModels\ProgramDataInput | Data **(Required)**

try {
    $result = $api_instance->createProgram($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->createProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\RadioManagerModels\ProgramDataInput**](../Model/ProgramDataInput.md)| Data **(Required)** |

### Return type

[**\RadioManager\RadioManagerModels\PostSuccess**](../Model/PostSuccess.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramById**
> \RadioManager\RadioManagerModels\Success deleteProgramById($id)

Delete program by id

Delete program by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$id = 789; // int | ID of program **(Required)**

try {
    $result = $api_instance->deleteProgramById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->deleteProgramById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of program **(Required)** |

### Return type

[**\RadioManager\RadioManagerModels\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramById**
> \RadioManager\RadioManagerModels\ProgramResult getProgramById($id, $_station_id)

Get program by id

Get program by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$id = 789; // int | ID of Program **(Required)**
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getProgramById($id, $_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->getProgramById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Program **(Required)** |
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\ProgramResult**](../Model/ProgramResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPrograms**
> \RadioManager\RadioManagerModels\ProgramResults listPrograms($page, $genre_id, $model_type_id, $presenter_id, $tag_id, $broadcast_id, $item_id, $block_id, $_station_id)

Get all programs.

List all programs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$page = 789; // int | Current page *(Optional)*
$genre_id = 789; // int | Search on Genre ID *(Optional)*
$model_type_id = 789; // int | Search on ModelType ID *(Optional)*
$presenter_id = 789; // int | Search on Presenter ID *(Optional)* `(Relation)`
$tag_id = 789; // int | Search on Tag ID *(Optional)* `(Relation)`
$broadcast_id = 789; // int | Search on Broadcast ID *(Optional)* `(Relation)`
$item_id = 789; // int | Search on Item ID *(Optional)* `(Relation)`
$block_id = 789; // int | Search on Block ID *(Optional)* `(Relation)`
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listPrograms($page, $genre_id, $model_type_id, $presenter_id, $tag_id, $broadcast_id, $item_id, $block_id, $_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->listPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional]
 **genre_id** | **int**| Search on Genre ID *(Optional)* | [optional]
 **model_type_id** | **int**| Search on ModelType ID *(Optional)* | [optional]
 **presenter_id** | **int**| Search on Presenter ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **tag_id** | **int**| Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **broadcast_id** | **int**| Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **item_id** | **int**| Search on Item ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **block_id** | **int**| Search on Block ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\ProgramResults**](../Model/ProgramResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramByID**
> \RadioManager\RadioManagerModels\Success updateProgramByID($id, $data)

Update program by id

Update program by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$id = 789; // int | ID of Program **(Required)**
$data = new \RadioManager\RadioManagerModels\ProgramDataInput(); // \RadioManager\RadioManagerModels\ProgramDataInput | Data *(Optional)*

try {
    $result = $api_instance->updateProgramByID($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->updateProgramByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Program **(Required)** |
 **data** | [**\RadioManager\RadioManagerModels\ProgramDataInput**](../Model/ProgramDataInput.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

