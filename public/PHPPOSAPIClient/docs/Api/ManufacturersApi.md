# OpenAPI\Client\ManufacturersApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addManufacturer**](ManufacturersApi.md#addManufacturer) | **POST** /manufacturers | Add a new manufacturer to the store
[**batchManufacturer**](ManufacturersApi.md#batchManufacturer) | **POST** /manufacturers/batch | Bulk create, update, and delete manufacturers
[**deleteManufacturer**](ManufacturersApi.md#deleteManufacturer) | **DELETE** /manufacturers/{manufacturer_id} | Deletes a manufacturer
[**getManufacturerByID**](ManufacturersApi.md#getManufacturerByID) | **GET** /manufacturers/{manufacturer_id} | Find manufacturer by manufacturer number or ID
[**searchManufacturers**](ManufacturersApi.md#searchManufacturers) | **GET** /manufacturers | Search/list manufacturers
[**updateManufacturer**](ManufacturersApi.md#updateManufacturer) | **POST** /manufacturers/{manufacturer_id} | Update a manufacturer



## addManufacturer

> \OpenAPI\Client\Model\Manufacturer addManufacturer($new_manufacturer)

Add a new manufacturer to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_manufacturer = new \OpenAPI\Client\Model\NewManufacturer(); // \OpenAPI\Client\Model\NewManufacturer | Manufacturer object that needs to be added to the POS

try {
    $result = $apiInstance->addManufacturer($new_manufacturer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->addManufacturer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_manufacturer** | [**\OpenAPI\Client\Model\NewManufacturer**](../Model/NewManufacturer.md)| Manufacturer object that needs to be added to the POS |

### Return type

[**\OpenAPI\Client\Model\Manufacturer**](../Model/Manufacturer.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchManufacturer

> \OpenAPI\Client\Model\BulkManufacturersResponse batchManufacturer($bulk_manufacturers)

Bulk create, update, and delete manufacturers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_manufacturers = new \OpenAPI\Client\Model\BulkManufacturers(); // \OpenAPI\Client\Model\BulkManufacturers | Manufacturer objects that needs to be batched

try {
    $result = $apiInstance->batchManufacturer($bulk_manufacturers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->batchManufacturer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_manufacturers** | [**\OpenAPI\Client\Model\BulkManufacturers**](../Model/BulkManufacturers.md)| Manufacturer objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkManufacturersResponse**](../Model/BulkManufacturersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteManufacturer

> \OpenAPI\Client\Model\ManufacturerResponse deleteManufacturer($manufacturer_id)

Deletes a manufacturer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manufacturer_id = 'manufacturer_id_example'; // string | ID of manufacturer to return

try {
    $result = $apiInstance->deleteManufacturer($manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->deleteManufacturer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **string**| ID of manufacturer to return |

### Return type

[**\OpenAPI\Client\Model\ManufacturerResponse**](../Model/ManufacturerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getManufacturerByID

> \OpenAPI\Client\Model\ManufacturerResponse getManufacturerByID($manufacturer_id)

Find manufacturer by manufacturer number or ID

Returns a single manufacturer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manufacturer_id = 'manufacturer_id_example'; // string | ID of manufacturer to return

try {
    $result = $apiInstance->getManufacturerByID($manufacturer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->getManufacturerByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **string**| ID of manufacturer to return |

### Return type

[**\OpenAPI\Client\Model\ManufacturerResponse**](../Model/ManufacturerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchManufacturers

> \OpenAPI\Client\Model\Manufacturer[] searchManufacturers($search, $sort_col, $sort_dir, $offset, $limit)

Search/list manufacturers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search manufacturers
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$offset = 0; // int | Offset to list manufacturers
$limit = 20; // int | Number of manufacturers to get

try {
    $result = $apiInstance->searchManufacturers($search, $sort_col, $sort_dir, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->searchManufacturers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search manufacturers | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **offset** | **int**| Offset to list manufacturers | [optional] [default to 0]
 **limit** | **int**| Number of manufacturers to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Manufacturer[]**](../Model/Manufacturer.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateManufacturer

> \OpenAPI\Client\Model\ManufacturerResponse updateManufacturer($manufacturer_id, $new_manufacturer)

Update a manufacturer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ManufacturersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$manufacturer_id = 'manufacturer_id_example'; // string | manufacturer id/number to update
$new_manufacturer = new \OpenAPI\Client\Model\NewManufacturer(); // \OpenAPI\Client\Model\NewManufacturer | Manufacturer that needs to be added to the store

try {
    $result = $apiInstance->updateManufacturer($manufacturer_id, $new_manufacturer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ManufacturersApi->updateManufacturer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **manufacturer_id** | **string**| manufacturer id/number to update |
 **new_manufacturer** | [**\OpenAPI\Client\Model\NewManufacturer**](../Model/NewManufacturer.md)| Manufacturer that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\ManufacturerResponse**](../Model/ManufacturerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

