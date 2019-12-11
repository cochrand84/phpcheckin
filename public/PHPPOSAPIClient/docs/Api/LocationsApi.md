# OpenAPI\Client\LocationsApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getLocationByLocationId**](LocationsApi.md#getLocationByLocationId) | **GET** /locations/{location_id} | Find location by Location ID
[**searchLocations**](LocationsApi.md#searchLocations) | **GET** /locations | Search/list locations



## getLocationByLocationId

> \OpenAPI\Client\Model\LocationResponse getLocationByLocationId($location_id)

Find location by Location ID

Returns a single location

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 56; // int | ID of location to return

try {
    $result = $apiInstance->getLocationByLocationId($location_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->getLocationByLocationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **int**| ID of location to return |

### Return type

[**\OpenAPI\Client\Model\LocationResponse**](../Model/LocationResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchLocations

> \OpenAPI\Client\Model\Location[] searchLocations($search, $sort_col, $sort_dir, $search_field, $offset, $limit)

Search/list locations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search locations
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$search_field = 'search_field_example'; // string | Search specific field
$offset = 0; // int | Offset to list locations
$limit = 20; // int | Number of locations to get

try {
    $result = $apiInstance->searchLocations($search, $sort_col, $sort_dir, $search_field, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocationsApi->searchLocations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search locations | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **search_field** | **string**| Search specific field | [optional]
 **offset** | **int**| Offset to list locations | [optional] [default to 0]
 **limit** | **int**| Number of locations to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Location[]**](../Model/Location.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

