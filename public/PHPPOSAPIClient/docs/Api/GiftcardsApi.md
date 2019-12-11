# OpenAPI\Client\GiftcardsApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGifcard**](GiftcardsApi.md#addGifcard) | **POST** /giftcards | Add a new giftcard to the store
[**batchGiftcard**](GiftcardsApi.md#batchGiftcard) | **POST** /giftcards/batch | Bulk create, update, and delete gift cards
[**deleteGiftcard**](GiftcardsApi.md#deleteGiftcard) | **DELETE** /giftcards/{giftcard_number} | Deletes a gift card
[**getGiftcardByID**](GiftcardsApi.md#getGiftcardByID) | **GET** /giftcards/{giftcard_number} | Find gift card by giftcard number or ID
[**searchGiftcards**](GiftcardsApi.md#searchGiftcards) | **GET** /giftcards | Search/list gift cards
[**updateGiftcard**](GiftcardsApi.md#updateGiftcard) | **POST** /giftcards/{giftcard_number} | Update a gift card



## addGifcard

> \OpenAPI\Client\Model\Giftcard addGifcard($new_giftcard)

Add a new giftcard to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GiftcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_giftcard = new \OpenAPI\Client\Model\NewGiftcard(); // \OpenAPI\Client\Model\NewGiftcard | Gift Card object that needs to be added to the store

try {
    $result = $apiInstance->addGifcard($new_giftcard);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftcardsApi->addGifcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_giftcard** | [**\OpenAPI\Client\Model\NewGiftcard**](../Model/NewGiftcard.md)| Gift Card object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Giftcard**](../Model/Giftcard.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchGiftcard

> \OpenAPI\Client\Model\BulkGiftcardsResponse batchGiftcard($bulk_giftcards)

Bulk create, update, and delete gift cards

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GiftcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_giftcards = new \OpenAPI\Client\Model\BulkGiftcards(); // \OpenAPI\Client\Model\BulkGiftcards | Giftcard objects that needs to be batched

try {
    $result = $apiInstance->batchGiftcard($bulk_giftcards);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftcardsApi->batchGiftcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_giftcards** | [**\OpenAPI\Client\Model\BulkGiftcards**](../Model/BulkGiftcards.md)| Giftcard objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkGiftcardsResponse**](../Model/BulkGiftcardsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteGiftcard

> \OpenAPI\Client\Model\GiftcardResponse deleteGiftcard($giftcard_number)

Deletes a gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GiftcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftcard_number = 'giftcard_number_example'; // string | ID of giftcard to return

try {
    $result = $apiInstance->deleteGiftcard($giftcard_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftcardsApi->deleteGiftcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **giftcard_number** | **string**| ID of giftcard to return |

### Return type

[**\OpenAPI\Client\Model\GiftcardResponse**](../Model/GiftcardResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getGiftcardByID

> \OpenAPI\Client\Model\GiftcardResponse getGiftcardByID($giftcard_number)

Find gift card by giftcard number or ID

Returns a single gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GiftcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftcard_number = 'giftcard_number_example'; // string | ID of giftcard to return

try {
    $result = $apiInstance->getGiftcardByID($giftcard_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftcardsApi->getGiftcardByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **giftcard_number** | **string**| ID of giftcard to return |

### Return type

[**\OpenAPI\Client\Model\GiftcardResponse**](../Model/GiftcardResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchGiftcards

> \OpenAPI\Client\Model\Giftcard[] searchGiftcards($search, $sort_col, $sort_dir, $offset, $limit)

Search/list gift cards

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GiftcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search gift cards
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$offset = 0; // int | Offset to list gift cards
$limit = 20; // int | Number of gift cards to get

try {
    $result = $apiInstance->searchGiftcards($search, $sort_col, $sort_dir, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftcardsApi->searchGiftcards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search gift cards | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **offset** | **int**| Offset to list gift cards | [optional] [default to 0]
 **limit** | **int**| Number of gift cards to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Giftcard[]**](../Model/Giftcard.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateGiftcard

> \OpenAPI\Client\Model\GiftcardResponse updateGiftcard($giftcard_number, $new_giftcard)

Update a gift card

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\GiftcardsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$giftcard_number = 'giftcard_number_example'; // string | giftcard id/number to update
$new_giftcard = new \OpenAPI\Client\Model\NewGiftcard(); // \OpenAPI\Client\Model\NewGiftcard | Gift card that needs to be added to the store

try {
    $result = $apiInstance->updateGiftcard($giftcard_number, $new_giftcard);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftcardsApi->updateGiftcard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **giftcard_number** | **string**| giftcard id/number to update |
 **new_giftcard** | [**\OpenAPI\Client\Model\NewGiftcard**](../Model/NewGiftcard.md)| Gift card that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\GiftcardResponse**](../Model/GiftcardResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

