# OpenAPI\Client\AttributesApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAttribute**](AttributesApi.md#addAttribute) | **POST** /attributes | Add a new attribute to the store
[**batchAttribute**](AttributesApi.md#batchAttribute) | **POST** /attributes/batch | Bulk create, update, and delete attributes
[**deleteAttribute**](AttributesApi.md#deleteAttribute) | **DELETE** /attributes/{attribute_id} | Deletes a attribute
[**getAttributeByID**](AttributesApi.md#getAttributeByID) | **GET** /attributes/{attribute_id} | Find attribute by attribute number or ID
[**searchAttributes**](AttributesApi.md#searchAttributes) | **GET** /attributes | Search/list attributes
[**updateAttribute**](AttributesApi.md#updateAttribute) | **POST** /attributes/{attribute_id} | Update a attribute



## addAttribute

> \OpenAPI\Client\Model\Attribute addAttribute($new_attribute)

Add a new attribute to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_attribute = new \OpenAPI\Client\Model\NewAttribute(); // \OpenAPI\Client\Model\NewAttribute | Attribute object that needs to be added to the POS

try {
    $result = $apiInstance->addAttribute($new_attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->addAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_attribute** | [**\OpenAPI\Client\Model\NewAttribute**](../Model/NewAttribute.md)| Attribute object that needs to be added to the POS |

### Return type

[**\OpenAPI\Client\Model\Attribute**](../Model/Attribute.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchAttribute

> \OpenAPI\Client\Model\BulkAttributesResponse batchAttribute($bulk_attributes)

Bulk create, update, and delete attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_attributes = new \OpenAPI\Client\Model\BulkAttributes(); // \OpenAPI\Client\Model\BulkAttributes | Attribute objects that needs to be batched

try {
    $result = $apiInstance->batchAttribute($bulk_attributes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->batchAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_attributes** | [**\OpenAPI\Client\Model\BulkAttributes**](../Model/BulkAttributes.md)| Attribute objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkAttributesResponse**](../Model/BulkAttributesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAttribute

> \OpenAPI\Client\Model\AttributeResponse deleteAttribute($attribute_id)

Deletes a attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 'attribute_id_example'; // string | ID of attribute to return

try {
    $result = $apiInstance->deleteAttribute($attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->deleteAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **string**| ID of attribute to return |

### Return type

[**\OpenAPI\Client\Model\AttributeResponse**](../Model/AttributeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAttributeByID

> \OpenAPI\Client\Model\AttributeResponse getAttributeByID($attribute_id)

Find attribute by attribute number or ID

Returns a single attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 'attribute_id_example'; // string | ID of attribute to return

try {
    $result = $apiInstance->getAttributeByID($attribute_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->getAttributeByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **string**| ID of attribute to return |

### Return type

[**\OpenAPI\Client\Model\AttributeResponse**](../Model/AttributeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchAttributes

> \OpenAPI\Client\Model\Attribute[] searchAttributes($search, $sort_col, $sort_dir, $offset, $limit)

Search/list attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search attributes
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$offset = 0; // int | Offset to list attributes
$limit = 20; // int | Number of attributes to get

try {
    $result = $apiInstance->searchAttributes($search, $sort_col, $sort_dir, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->searchAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search attributes | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **offset** | **int**| Offset to list attributes | [optional] [default to 0]
 **limit** | **int**| Number of attributes to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Attribute[]**](../Model/Attribute.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAttribute

> \OpenAPI\Client\Model\AttributeResponse updateAttribute($attribute_id, $new_attribute)

Update a attribute

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attribute_id = 'attribute_id_example'; // string | attribute id/number to update
$new_attribute = new \OpenAPI\Client\Model\NewAttribute(); // \OpenAPI\Client\Model\NewAttribute | Attribute that needs to be added to the store

try {
    $result = $apiInstance->updateAttribute($attribute_id, $new_attribute);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttributesApi->updateAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_id** | **string**| attribute id/number to update |
 **new_attribute** | [**\OpenAPI\Client\Model\NewAttribute**](../Model/NewAttribute.md)| Attribute that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\AttributeResponse**](../Model/AttributeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

