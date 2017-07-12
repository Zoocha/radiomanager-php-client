# RadioManager\VisualSlideApi

All URIs are relative to *http://radiomanager.pluxbox.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadVisualSlide**](VisualSlideApi.md#downloadVisualSlide) | **GET** /visual/image | Get Visual Slide Image as JPEG
[**getVisualSlide**](VisualSlideApi.md#getVisualSlide) | **GET** /visual | Get Visual Slide Image as Base64


# **downloadVisualSlide**
> \RadioManager\RadioManagerModels\VisualImageResult downloadVisualSlide()

Get Visual Slide Image as JPEG

Get Visual Slide Image as JPEG

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\VisualSlideApi();

try {
    $result = $api_instance->downloadVisualSlide();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisualSlideApi->downloadVisualSlide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioManager\RadioManagerModels\VisualImageResult**](../Model/VisualImageResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVisualSlide**
> \RadioManager\RadioManagerModels\VisualResult getVisualSlide()

Get Visual Slide Image as Base64

Get Visual Slide Image as Base64

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\VisualSlideApi();

try {
    $result = $api_instance->getVisualSlide();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisualSlideApi->getVisualSlide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioManager\RadioManagerModels\VisualResult**](../Model/VisualResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

