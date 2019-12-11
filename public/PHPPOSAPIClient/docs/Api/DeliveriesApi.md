# OpenAPI\Client\DeliveriesApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDelivery**](DeliveriesApi.md#deleteDelivery) | **DELETE** /deliveries/{delivery_id} | Deletes a delivery
[**getDeliveryByID**](DeliveriesApi.md#getDeliveryByID) | **GET** /deliveries/{delivery_id} | Find delivery by delivery number or ID
[**searchDeliveries**](DeliveriesApi.md#searchDeliveries) | **GET** /deliveries | Search/list deliveries
[**updateDelivery**](DeliveriesApi.md#updateDelivery) | **POST** /deliveries/{delivery_id} | Update a delivery



## deleteDelivery

> \OpenAPI\Client\Model\DeliveryResponse deleteDelivery($delivery_id)

Deletes a delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_id = 'delivery_id_example'; // string | ID of delivery to return

try {
    $result = $apiInstance->deleteDelivery($delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->deleteDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_id** | **string**| ID of delivery to return |

### Return type

[**\OpenAPI\Client\Model\DeliveryResponse**](../Model/DeliveryResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDeliveryByID

> \OpenAPI\Client\Model\DeliveryResponse getDeliveryByID($delivery_id)

Find delivery by delivery number or ID

Returns a single delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_id = 'delivery_id_example'; // string | ID of delivery to return

try {
    $result = $apiInstance->getDeliveryByID($delivery_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->getDeliveryByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_id** | **string**| ID of delivery to return |

### Return type

[**\OpenAPI\Client\Model\DeliveryResponse**](../Model/DeliveryResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchDeliveries

> \OpenAPI\Client\Model\Delivery[] searchDeliveries($search, $sort_col, $sort_dir, $location_id, $offset, $limit)

Search/list deliveries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search deliveries
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$location_id = 'location_id_example'; // string | Search specific location
$offset = 0; // int | Offset to list deliveries
$limit = 20; // int | Number of deliveries to get

try {
    $result = $apiInstance->searchDeliveries($search, $sort_col, $sort_dir, $location_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->searchDeliveries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search deliveries | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **location_id** | **string**| Search specific location | [optional]
 **offset** | **int**| Offset to list deliveries | [optional] [default to 0]
 **limit** | **int**| Number of deliveries to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Delivery[]**](../Model/Delivery.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDelivery

> \OpenAPI\Client\Model\DeliveryResponse updateDelivery($delivery_id, $new_delivery)

Update a delivery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DeliveriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$delivery_id = 'delivery_id_example'; // string | delivery id/number to update
$new_delivery = new \OpenAPI\Client\Model\NewDelivery(); // \OpenAPI\Client\Model\NewDelivery | Delivery that needs to be added to the store

try {
    $result = $apiInstance->updateDelivery($delivery_id, $new_delivery);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveriesApi->updateDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delivery_id** | **string**| delivery id/number to update |
 **new_delivery** | [**\OpenAPI\Client\Model\NewDelivery**](../Model/NewDelivery.md)| Delivery that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\DeliveryResponse**](../Model/DeliveryResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

