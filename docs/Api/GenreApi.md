# RadioManager\GenreApi

All URIs are relative to *http://radiomanager.pluxbox.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGenreById**](GenreApi.md#getGenreById) | **GET** /genres/{id} | Get genre by id
[**listGenres**](GenreApi.md#listGenres) | **GET** /genres | List all genres.


# **getGenreById**
> \RadioManager\RadioManagerModels\GenreResult getGenreById($id, $_station_id)

Get genre by id

Get genre by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\GenreApi();
$id = 789; // int | ID of Genre **(Required)**
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getGenreById($id, $_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenreApi->getGenreById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Genre **(Required)** |
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\GenreResult**](../Model/GenreResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listGenres**
> \RadioManager\RadioManagerModels\GenreResults listGenres($page, $parent_id, $program_id, $broadcast_id, $_station_id)

List all genres.

List all genres.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\GenreApi();
$page = 789; // int | Current page *(Optional)*
$parent_id = 789; // int | Search on Parent ID of Genre *(Optional)*
$program_id = 789; // int | Search on Program ID *(Optional)* `(Relation)`
$broadcast_id = 789; // int | Search on Broadcast ID *(Optional)* `(Relation)`
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listGenres($page, $parent_id, $program_id, $broadcast_id, $_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenreApi->listGenres: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional]
 **parent_id** | **int**| Search on Parent ID of Genre *(Optional)* | [optional]
 **program_id** | **int**| Search on Program ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **broadcast_id** | **int**| Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\GenreResults**](../Model/GenreResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

