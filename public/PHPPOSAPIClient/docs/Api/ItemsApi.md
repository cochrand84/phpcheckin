# OpenAPI\Client\ItemsApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItem**](ItemsApi.md#addItem) | **POST** /items | Add a new item to the store
[**batchItem**](ItemsApi.md#batchItem) | **POST** /items/batch | Bulk create, update, and delete items
[**deleteItem**](ItemsApi.md#deleteItem) | **DELETE** /items/{item_id} | Deletes an item
[**getItemByItemId**](ItemsApi.md#getItemByItemId) | **GET** /items/{item_id} | Find item by Item ID
[**searchItems**](ItemsApi.md#searchItems) | **GET** /items | Search/list items
[**updateItem**](ItemsApi.md#updateItem) | **POST** /items/{item_id} | Update an existing item



## addItem

> \OpenAPI\Client\Model\Item addItem($new_item_with_image_url)

Add a new item to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_item_with_image_url = new \OpenAPI\Client\Model\NewItemWithImageUrl(); // \OpenAPI\Client\Model\NewItemWithImageUrl | Item object that needs to be added to the store

try {
    $result = $apiInstance->addItem($new_item_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->addItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_item_with_image_url** | [**\OpenAPI\Client\Model\NewItemWithImageUrl**](../Model/NewItemWithImageUrl.md)| Item object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Item**](../Model/Item.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchItem

> \OpenAPI\Client\Model\BulkItemsResponse batchItem($bulk_items)

Bulk create, update, and delete items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_items = new \OpenAPI\Client\Model\BulkItems(); // \OpenAPI\Client\Model\BulkItems | Item object that needs to be added to the store

try {
    $result = $apiInstance->batchItem($bulk_items);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->batchItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_items** | [**\OpenAPI\Client\Model\BulkItems**](../Model/BulkItems.md)| Item object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\BulkItemsResponse**](../Model/BulkItemsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteItem

> \OpenAPI\Client\Model\ItemResponse deleteItem($item_id)

Deletes an item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | Item id to delete

try {
    $result = $apiInstance->deleteItem($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Item id to delete |

### Return type

[**\OpenAPI\Client\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getItemByItemId

> \OpenAPI\Client\Model\ItemResponse getItemByItemId($item_id)

Find item by Item ID

Returns a single item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | ID of item to return

try {
    $result = $apiInstance->getItemByItemId($item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemByItemId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| ID of item to return |

### Return type

[**\OpenAPI\Client\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchItems

> \OpenAPI\Client\Model\Item[] searchItems($search, $sort_col, $sort_dir, $category_id, $search_field, $offset, $limit)

Search/list items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search items
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$category_id = 'category_id_example'; // string | Filter by category id
$search_field = 'search_field_example'; // string | Search specific field
$offset = 0; // int | Offset to list items
$limit = 20; // int | Number of items to get

try {
    $result = $apiInstance->searchItems($search, $sort_col, $sort_dir, $category_id, $search_field, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->searchItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search items | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **category_id** | **string**| Filter by category id | [optional]
 **search_field** | **string**| Search specific field | [optional]
 **offset** | **int**| Offset to list items | [optional] [default to 0]
 **limit** | **int**| Number of items to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Item[]**](../Model/Item.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateItem

> \OpenAPI\Client\Model\ItemResponse updateItem($item_id, $new_item_with_image_url)

Update an existing item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_id = 56; // int | Item id to update
$new_item_with_image_url = new \OpenAPI\Client\Model\NewItemWithImageUrl(); // \OpenAPI\Client\Model\NewItemWithImageUrl | Item object that needs to be added to the store

try {
    $result = $apiInstance->updateItem($item_id, $new_item_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->updateItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_id** | **int**| Item id to update |
 **new_item_with_image_url** | [**\OpenAPI\Client\Model\NewItemWithImageUrl**](../Model/NewItemWithImageUrl.md)| Item object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\ItemResponse**](../Model/ItemResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

