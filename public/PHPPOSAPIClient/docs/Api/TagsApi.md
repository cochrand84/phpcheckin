# OpenAPI\Client\TagsApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTag**](TagsApi.md#addTag) | **POST** /tags | Add a new tag to the store
[**batchTag**](TagsApi.md#batchTag) | **POST** /tags/batch | Bulk create, update, and delete tags
[**deleteTag**](TagsApi.md#deleteTag) | **DELETE** /tags/{tag_id} | Deletes a tag
[**getTagByID**](TagsApi.md#getTagByID) | **GET** /tags/{tag_id} | Find tag by tag number or ID
[**searchTags**](TagsApi.md#searchTags) | **GET** /tags | Search/list tags
[**updateTag**](TagsApi.md#updateTag) | **POST** /tags/{tag_id} | Update a tag



## addTag

> \OpenAPI\Client\Model\Tag addTag($new_tag)

Add a new tag to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_tag = new \OpenAPI\Client\Model\NewTag(); // \OpenAPI\Client\Model\NewTag | Tag object that needs to be added to the POS

try {
    $result = $apiInstance->addTag($new_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->addTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_tag** | [**\OpenAPI\Client\Model\NewTag**](../Model/NewTag.md)| Tag object that needs to be added to the POS |

### Return type

[**\OpenAPI\Client\Model\Tag**](../Model/Tag.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchTag

> \OpenAPI\Client\Model\BulkTagsResponse batchTag($bulk_tags)

Bulk create, update, and delete tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_tags = new \OpenAPI\Client\Model\BulkTags(); // \OpenAPI\Client\Model\BulkTags | Tag objects that needs to be batched

try {
    $result = $apiInstance->batchTag($bulk_tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->batchTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_tags** | [**\OpenAPI\Client\Model\BulkTags**](../Model/BulkTags.md)| Tag objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkTagsResponse**](../Model/BulkTagsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTag

> \OpenAPI\Client\Model\TagResponse deleteTag($tag_id)

Deletes a tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 'tag_id_example'; // string | ID of tag to return

try {
    $result = $apiInstance->deleteTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| ID of tag to return |

### Return type

[**\OpenAPI\Client\Model\TagResponse**](../Model/TagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getTagByID

> \OpenAPI\Client\Model\TagResponse getTagByID($tag_id)

Find tag by tag number or ID

Returns a single tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 'tag_id_example'; // string | ID of tag to return

try {
    $result = $apiInstance->getTagByID($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| ID of tag to return |

### Return type

[**\OpenAPI\Client\Model\TagResponse**](../Model/TagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchTags

> \OpenAPI\Client\Model\Tag[] searchTags($search, $sort_col, $sort_dir, $offset, $limit)

Search/list tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search tags
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$offset = 0; // int | Offset to list tags
$limit = 20; // int | Number of tags to get

try {
    $result = $apiInstance->searchTags($search, $sort_col, $sort_dir, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->searchTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search tags | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **offset** | **int**| Offset to list tags | [optional] [default to 0]
 **limit** | **int**| Number of tags to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Tag[]**](../Model/Tag.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTag

> \OpenAPI\Client\Model\TagResponse updateTag($tag_id, $new_tag)

Update a tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tag_id = 'tag_id_example'; // string | tag id/number to update
$new_tag = new \OpenAPI\Client\Model\NewTag(); // \OpenAPI\Client\Model\NewTag | Tag that needs to be added to the store

try {
    $result = $apiInstance->updateTag($tag_id, $new_tag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **string**| tag id/number to update |
 **new_tag** | [**\OpenAPI\Client\Model\NewTag**](../Model/NewTag.md)| Tag that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\TagResponse**](../Model/TagResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

