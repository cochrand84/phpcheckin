# OpenAPI\Client\SuppliersApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSupplier**](SuppliersApi.md#addSupplier) | **POST** /suppliers | Add a new supplier to the store
[**batchSupplier**](SuppliersApi.md#batchSupplier) | **POST** /suppliers/batch | Bulk create, update, and delete suppliers
[**deleteSupplier**](SuppliersApi.md#deleteSupplier) | **DELETE** /suppliers/{person_id} | Deletes a supplier
[**getSupplierByPersonId**](SuppliersApi.md#getSupplierByPersonId) | **GET** /suppliers/{person_id} | Find person by Person ID
[**searchSuppliers**](SuppliersApi.md#searchSuppliers) | **GET** /suppliers | Search/list suppliers
[**updateSupplier**](SuppliersApi.md#updateSupplier) | **POST** /suppliers/{person_id} | Update an existing supplier



## addSupplier

> \OpenAPI\Client\Model\Supplier addSupplier($new_supplier_with_image_url)

Add a new supplier to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_supplier_with_image_url = new \OpenAPI\Client\Model\NewSupplierWithImageUrl(); // \OpenAPI\Client\Model\NewSupplierWithImageUrl | Supplier object that needs to be added to the store

try {
    $result = $apiInstance->addSupplier($new_supplier_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->addSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_supplier_with_image_url** | [**\OpenAPI\Client\Model\NewSupplierWithImageUrl**](../Model/NewSupplierWithImageUrl.md)| Supplier object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Supplier**](../Model/Supplier.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchSupplier

> \OpenAPI\Client\Model\BulkSuppliersResponse batchSupplier($bulk_suppliers)

Bulk create, update, and delete suppliers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_suppliers = new \OpenAPI\Client\Model\BulkSuppliers(); // \OpenAPI\Client\Model\BulkSuppliers | Supplier object that needs to be added to the store

try {
    $result = $apiInstance->batchSupplier($bulk_suppliers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->batchSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_suppliers** | [**\OpenAPI\Client\Model\BulkSuppliers**](../Model/BulkSuppliers.md)| Supplier object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\BulkSuppliersResponse**](../Model/BulkSuppliersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSupplier

> \OpenAPI\Client\Model\SupplierResponse deleteSupplier($person_id)

Deletes a supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | Person id to delete

try {
    $result = $apiInstance->deleteSupplier($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->deleteSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| Person id to delete |

### Return type

[**\OpenAPI\Client\Model\SupplierResponse**](../Model/SupplierResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSupplierByPersonId

> \OpenAPI\Client\Model\SupplierResponse getSupplierByPersonId($person_id)

Find person by Person ID

Returns a single supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | ID of supplier to return

try {
    $result = $apiInstance->getSupplierByPersonId($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->getSupplierByPersonId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| ID of supplier to return |

### Return type

[**\OpenAPI\Client\Model\SupplierResponse**](../Model/SupplierResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchSuppliers

> \OpenAPI\Client\Model\Supplier[] searchSuppliers($search, $sort_col, $sort_dir, $search_field, $offset, $limit)

Search/list suppliers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search suppliers
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$search_field = 'search_field_example'; // string | Search specific field
$offset = 0; // int | Offset to list suppliers
$limit = 20; // int | Number of suppliers to get

try {
    $result = $apiInstance->searchSuppliers($search, $sort_col, $sort_dir, $search_field, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->searchSuppliers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search suppliers | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **search_field** | **string**| Search specific field | [optional]
 **offset** | **int**| Offset to list suppliers | [optional] [default to 0]
 **limit** | **int**| Number of suppliers to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Supplier[]**](../Model/Supplier.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSupplier

> \OpenAPI\Client\Model\SupplierResponse updateSupplier($person_id, $new_supplier_with_image_url)

Update an existing supplier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | Person id to update
$new_supplier_with_image_url = new \OpenAPI\Client\Model\NewSupplierWithImageUrl(); // \OpenAPI\Client\Model\NewSupplierWithImageUrl | Supplier object that needs to be added to the store

try {
    $result = $apiInstance->updateSupplier($person_id, $new_supplier_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->updateSupplier: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| Person id to update |
 **new_supplier_with_image_url** | [**\OpenAPI\Client\Model\NewSupplierWithImageUrl**](../Model/NewSupplierWithImageUrl.md)| Supplier object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\SupplierResponse**](../Model/SupplierResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

