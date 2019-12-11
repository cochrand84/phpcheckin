# OpenAPI\Client\CategoriesApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCategory**](CategoriesApi.md#addCategory) | **POST** /categories | Add a new category to the store
[**batchCategory**](CategoriesApi.md#batchCategory) | **POST** /categories/batch | Bulk create, update, and delete categories
[**deleteCategory**](CategoriesApi.md#deleteCategory) | **DELETE** /categories/{category_id} | Deletes a category
[**getCategoryByID**](CategoriesApi.md#getCategoryByID) | **GET** /categories/{category_id} | Find category by ID
[**searchCategories**](CategoriesApi.md#searchCategories) | **GET** /categories | Search/list categories
[**updateCategory**](CategoriesApi.md#updateCategory) | **POST** /categories/{category_id} | Update a category



## addCategory

> \OpenAPI\Client\Model\Category addCategory($new_category_with_image_url)

Add a new category to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_category_with_image_url = new \OpenAPI\Client\Model\NewCategoryWithImageUrl(); // \OpenAPI\Client\Model\NewCategoryWithImageUrl | Item object that needs to be added to the store

try {
    $result = $apiInstance->addCategory($new_category_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->addCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_category_with_image_url** | [**\OpenAPI\Client\Model\NewCategoryWithImageUrl**](../Model/NewCategoryWithImageUrl.md)| Item object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Category**](../Model/Category.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchCategory

> \OpenAPI\Client\Model\BulkCategoriesResponse batchCategory($bulk_categories)

Bulk create, update, and delete categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_categories = new \OpenAPI\Client\Model\BulkCategories(); // \OpenAPI\Client\Model\BulkCategories | Category objects that needs to be batched

try {
    $result = $apiInstance->batchCategory($bulk_categories);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->batchCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_categories** | [**\OpenAPI\Client\Model\BulkCategories**](../Model/BulkCategories.md)| Category objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkCategoriesResponse**](../Model/BulkCategoriesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCategory

> \OpenAPI\Client\Model\CategoryResponse deleteCategory($category_id)

Deletes a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | ID of category to return

try {
    $result = $apiInstance->deleteCategory($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| ID of category to return |

### Return type

[**\OpenAPI\Client\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCategoryByID

> \OpenAPI\Client\Model\CategoryResponse getCategoryByID($category_id)

Find category by ID

Returns a single category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | ID of category to return

try {
    $result = $apiInstance->getCategoryByID($category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->getCategoryByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| ID of category to return |

### Return type

[**\OpenAPI\Client\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCategories

> \OpenAPI\Client\Model\Category[] searchCategories($search, $sort_col, $sort_dir, $offset, $limit)

Search/list categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search categories
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$offset = 0; // int | Offset to list categories
$limit = 20; // int | Number of categories to get

try {
    $result = $apiInstance->searchCategories($search, $sort_col, $sort_dir, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->searchCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search categories | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **offset** | **int**| Offset to list categories | [optional] [default to 0]
 **limit** | **int**| Number of categories to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Category[]**](../Model/Category.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCategory

> \OpenAPI\Client\Model\CategoryResponse updateCategory($category_id, $new_category_with_image_url)

Update a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category_id = 'category_id_example'; // string | category_id to update
$new_category_with_image_url = new \OpenAPI\Client\Model\NewCategoryWithImageUrl(); // \OpenAPI\Client\Model\NewCategoryWithImageUrl | Category that needs to be added to the store

try {
    $result = $apiInstance->updateCategory($category_id, $new_category_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**| category_id to update |
 **new_category_with_image_url** | [**\OpenAPI\Client\Model\NewCategoryWithImageUrl**](../Model/NewCategoryWithImageUrl.md)| Category that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

