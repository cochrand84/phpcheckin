# OpenAPI\Client\ItemKitsApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addItemKit**](ItemKitsApi.md#addItemKit) | **POST** /item_kits | Add a new item kit to the store
[**batchItemKit**](ItemKitsApi.md#batchItemKit) | **POST** /item_kits/batch | Bulk create, update, and delete items
[**deleteItemKit**](ItemKitsApi.md#deleteItemKit) | **DELETE** /item_kits/{item_kit_id} | Deletes a item Kit
[**getItemKitByItemKitId**](ItemKitsApi.md#getItemKitByItemKitId) | **GET** /item_kits/{item_kit_id} | Find item kit by Item KIT ID
[**searchItemKits**](ItemKitsApi.md#searchItemKits) | **GET** /item_kits | Search/list item kits
[**updateItemKit**](ItemKitsApi.md#updateItemKit) | **POST** /item_kits/{item_kit_id} | Update an existing item kit



## addItemKit

> \OpenAPI\Client\Model\ItemKit addItemKit($new_item_kit_with_image_url)

Add a new item kit to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemKitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_item_kit_with_image_url = new \OpenAPI\Client\Model\NewItemKitWithImageUrl(); // \OpenAPI\Client\Model\NewItemKitWithImageUrl | Item Kit object that needs to be added to the store

try {
    $result = $apiInstance->addItemKit($new_item_kit_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemKitsApi->addItemKit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_item_kit_with_image_url** | [**\OpenAPI\Client\Model\NewItemKitWithImageUrl**](../Model/NewItemKitWithImageUrl.md)| Item Kit object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\ItemKit**](../Model/ItemKit.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchItemKit

> \OpenAPI\Client\Model\BulkItemKitsResponse batchItemKit($bulk_item_kits)

Bulk create, update, and delete items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemKitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_item_kits = new \OpenAPI\Client\Model\BulkItemKits(); // \OpenAPI\Client\Model\BulkItemKits | Item kit object that needs to be added to the store

try {
    $result = $apiInstance->batchItemKit($bulk_item_kits);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemKitsApi->batchItemKit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_item_kits** | [**\OpenAPI\Client\Model\BulkItemKits**](../Model/BulkItemKits.md)| Item kit object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\BulkItemKitsResponse**](../Model/BulkItemKitsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteItemKit

> \OpenAPI\Client\Model\ItemKitResponse deleteItemKit($item_kit_id)

Deletes a item Kit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemKitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_kit_id = 56; // int | Item kit id to delete

try {
    $result = $apiInstance->deleteItemKit($item_kit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemKitsApi->deleteItemKit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_kit_id** | **int**| Item kit id to delete |

### Return type

[**\OpenAPI\Client\Model\ItemKitResponse**](../Model/ItemKitResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getItemKitByItemKitId

> \OpenAPI\Client\Model\ItemKitResponse getItemKitByItemKitId($item_kit_id)

Find item kit by Item KIT ID

Returns a single item kit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemKitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_kit_id = 56; // int | ID of item kit to return

try {
    $result = $apiInstance->getItemKitByItemKitId($item_kit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemKitsApi->getItemKitByItemKitId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_kit_id** | **int**| ID of item kit to return |

### Return type

[**\OpenAPI\Client\Model\ItemKitResponse**](../Model/ItemKitResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchItemKits

> \OpenAPI\Client\Model\ItemKit[] searchItemKits($search, $sort_col, $sort_dir, $category_id, $search_field, $offset, $limit)

Search/list item kits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemKitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search item kits
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$category_id = 'category_id_example'; // string | Filter by category id
$search_field = 'search_field_example'; // string | Search specific field
$offset = 0; // int | Offset to list item kits
$limit = 20; // int | Number of item kits to get

try {
    $result = $apiInstance->searchItemKits($search, $sort_col, $sort_dir, $category_id, $search_field, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemKitsApi->searchItemKits: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search item kits | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **category_id** | **string**| Filter by category id | [optional]
 **search_field** | **string**| Search specific field | [optional]
 **offset** | **int**| Offset to list item kits | [optional] [default to 0]
 **limit** | **int**| Number of item kits to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\ItemKit[]**](../Model/ItemKit.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateItemKit

> \OpenAPI\Client\Model\ItemKitResponse updateItemKit($item_kit_id, $new_item_kit_with_image_url)

Update an existing item kit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ItemKitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$item_kit_id = 56; // int | Item kit id to update
$new_item_kit_with_image_url = new \OpenAPI\Client\Model\NewItemKitWithImageUrl(); // \OpenAPI\Client\Model\NewItemKitWithImageUrl | Item Kit object that needs to be added to the store

try {
    $result = $apiInstance->updateItemKit($item_kit_id, $new_item_kit_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemKitsApi->updateItemKit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **item_kit_id** | **int**| Item kit id to update |
 **new_item_kit_with_image_url** | [**\OpenAPI\Client\Model\NewItemKitWithImageUrl**](../Model/NewItemKitWithImageUrl.md)| Item Kit object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\ItemKitResponse**](../Model/ItemKitResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

