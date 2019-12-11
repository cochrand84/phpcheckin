# OpenAPI\Client\SalesApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSale**](SalesApi.md#addSale) | **POST** /sales | Add a sale to the POS
[**deleteSale**](SalesApi.md#deleteSale) | **DELETE** /sales/{sale_id} | Delete a sale from POS
[**getSale**](SalesApi.md#getSale) | **GET** /sales/{sale_id} | Get info about sale
[**searchSales**](SalesApi.md#searchSales) | **GET** /sales | Search/list sales
[**updateSale**](SalesApi.md#updateSale) | **POST** /sales/{sale_id} | Update a sale in the POS



## addSale

> \OpenAPI\Client\Model\Sale addSale($new_sale)

Add a sale to the POS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_sale = new \OpenAPI\Client\Model\NewSale(); // \OpenAPI\Client\Model\NewSale | Sale object that needs to be added to the store

try {
    $result = $apiInstance->addSale($new_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->addSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_sale** | [**\OpenAPI\Client\Model\NewSale**](../Model/NewSale.md)| Sale object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Sale**](../Model/Sale.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteSale

> \OpenAPI\Client\Model\Sale deleteSale($sale_id)

Delete a sale from POS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_id = 'sale_id_example'; // string | ID of sale to delete

try {
    $result = $apiInstance->deleteSale($sale_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->deleteSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_id** | **string**| ID of sale to delete |

### Return type

[**\OpenAPI\Client\Model\Sale**](../Model/Sale.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getSale

> \OpenAPI\Client\Model\Sale getSale($sale_id)

Get info about sale

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_id = 'sale_id_example'; // string | ID of sale to get

try {
    $result = $apiInstance->getSale($sale_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->getSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_id** | **string**| ID of sale to get |

### Return type

[**\OpenAPI\Client\Model\Sale**](../Model/Sale.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchSales

> \OpenAPI\Client\Model\Sale[] searchSales($start_date, $end_date, $customer_id)

Search/list sales

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = 2017-07-21T17:32:28Z; // \DateTime | Start date to search for sales
$end_date = 2017-07-21T17:32:28Z; // \DateTime | End date to search for sales
$customer_id = 3.4; // float | ID of customer to filter by

try {
    $result = $apiInstance->searchSales($start_date, $end_date, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->searchSales: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Start date to search for sales |
 **end_date** | **\DateTime**| End date to search for sales |
 **customer_id** | **float**| ID of customer to filter by | [optional]

### Return type

[**\OpenAPI\Client\Model\Sale[]**](../Model/Sale.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateSale

> \OpenAPI\Client\Model\Sale updateSale($sale_id, $new_sale)

Update a sale in the POS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SalesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sale_id = 'sale_id_example'; // string | ID of sale to update
$new_sale = new \OpenAPI\Client\Model\NewSale(); // \OpenAPI\Client\Model\NewSale | Sale object that needs to be added to the store

try {
    $result = $apiInstance->updateSale($sale_id, $new_sale);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesApi->updateSale: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sale_id** | **string**| ID of sale to update |
 **new_sale** | [**\OpenAPI\Client\Model\NewSale**](../Model/NewSale.md)| Sale object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Sale**](../Model/Sale.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

