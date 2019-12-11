# OpenAPI\Client\ReceivingsApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addReceiving**](ReceivingsApi.md#addReceiving) | **POST** /receivings | Add a receiving to the POS
[**deleteReceiving**](ReceivingsApi.md#deleteReceiving) | **DELETE** /receivings/{receiving_id} | Delete a receiving from POS
[**getReceiving**](ReceivingsApi.md#getReceiving) | **GET** /receivings/{receiving_id} | Get info about receiving
[**searchReceivings**](ReceivingsApi.md#searchReceivings) | **GET** /receivings | Search/list receivings
[**updateReceiving**](ReceivingsApi.md#updateReceiving) | **POST** /receivings/{receiving_id} | Update a receiving in the POS



## addReceiving

> \OpenAPI\Client\Model\Receiving addReceiving($new_receiving)

Add a receiving to the POS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReceivingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_receiving = new \OpenAPI\Client\Model\NewReceiving(); // \OpenAPI\Client\Model\NewReceiving | Receiving object that needs to be added to the store

try {
    $result = $apiInstance->addReceiving($new_receiving);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingsApi->addReceiving: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_receiving** | [**\OpenAPI\Client\Model\NewReceiving**](../Model/NewReceiving.md)| Receiving object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Receiving**](../Model/Receiving.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteReceiving

> \OpenAPI\Client\Model\Receiving deleteReceiving($receiving_id)

Delete a receiving from POS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReceivingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_id = 'receiving_id_example'; // string | ID of receiving to delete

try {
    $result = $apiInstance->deleteReceiving($receiving_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingsApi->deleteReceiving: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_id** | **string**| ID of receiving to delete |

### Return type

[**\OpenAPI\Client\Model\Receiving**](../Model/Receiving.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getReceiving

> \OpenAPI\Client\Model\Receiving getReceiving($receiving_id)

Get info about receiving

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReceivingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_id = 'receiving_id_example'; // string | ID of receiving to get

try {
    $result = $apiInstance->getReceiving($receiving_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingsApi->getReceiving: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_id** | **string**| ID of receiving to get |

### Return type

[**\OpenAPI\Client\Model\Receiving**](../Model/Receiving.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchReceivings

> \OpenAPI\Client\Model\Receiving[] searchReceivings($start_date, $end_date)

Search/list receivings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReceivingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 2017-07-21T17:32:28Z; // \DateTime | Start date to search for receivings
$end_date = 2017-07-21T17:32:28Z; // \DateTime | End date to search for receivings

try {
    $result = $apiInstance->searchReceivings($start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingsApi->searchReceivings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Start date to search for receivings |
 **end_date** | **\DateTime**| End date to search for receivings |

### Return type

[**\OpenAPI\Client\Model\Receiving[]**](../Model/Receiving.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateReceiving

> \OpenAPI\Client\Model\Receiving updateReceiving($receiving_id, $new_receiving)

Update a receiving in the POS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ReceivingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiving_id = 'receiving_id_example'; // string | ID of receiving to update
$new_receiving = new \OpenAPI\Client\Model\NewReceiving(); // \OpenAPI\Client\Model\NewReceiving | Receiving object that needs to be added to the store

try {
    $result = $apiInstance->updateReceiving($receiving_id, $new_receiving);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReceivingsApi->updateReceiving: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receiving_id** | **string**| ID of receiving to update |
 **new_receiving** | [**\OpenAPI\Client\Model\NewReceiving**](../Model/NewReceiving.md)| Receiving object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Receiving**](../Model/Receiving.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

