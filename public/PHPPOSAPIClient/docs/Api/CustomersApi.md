# OpenAPI\Client\CustomersApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomer**](CustomersApi.md#addCustomer) | **POST** /customers | Add a new customer to the store
[**batchCustomer**](CustomersApi.md#batchCustomer) | **POST** /customers/batch | Bulk create, update, and delete customers
[**deleteCustomer**](CustomersApi.md#deleteCustomer) | **DELETE** /customers/{person_id} | Deletes a customer
[**getCustomerByPersonId**](CustomersApi.md#getCustomerByPersonId) | **GET** /customers/{person_id} | Find person by Person ID
[**searchCustomers**](CustomersApi.md#searchCustomers) | **GET** /customers | Search/list customers
[**updateCustomer**](CustomersApi.md#updateCustomer) | **POST** /customers/{person_id} | Update an existing customer



## addCustomer

> \OpenAPI\Client\Model\Customer addCustomer($new_customer_with_image_url)

Add a new customer to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_customer_with_image_url = new \OpenAPI\Client\Model\NewCustomerWithImageUrl(); // \OpenAPI\Client\Model\NewCustomerWithImageUrl | Customer object that needs to be added to the store

try {
    $result = $apiInstance->addCustomer($new_customer_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->addCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_customer_with_image_url** | [**\OpenAPI\Client\Model\NewCustomerWithImageUrl**](../Model/NewCustomerWithImageUrl.md)| Customer object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchCustomer

> \OpenAPI\Client\Model\BulkCustomersResponse batchCustomer($bulk_customers)

Bulk create, update, and delete customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_customers = new \OpenAPI\Client\Model\BulkCustomers(); // \OpenAPI\Client\Model\BulkCustomers | Customer object that needs to be added to the store

try {
    $result = $apiInstance->batchCustomer($bulk_customers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->batchCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_customers** | [**\OpenAPI\Client\Model\BulkCustomers**](../Model/BulkCustomers.md)| Customer object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\BulkCustomersResponse**](../Model/BulkCustomersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteCustomer

> \OpenAPI\Client\Model\CustomerResponse deleteCustomer($person_id)

Deletes a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | Person id to delete

try {
    $result = $apiInstance->deleteCustomer($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| Person id to delete |

### Return type

[**\OpenAPI\Client\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getCustomerByPersonId

> \OpenAPI\Client\Model\Customer getCustomerByPersonId($person_id)

Find person by Person ID

Returns a single customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | ID of customer to return

try {
    $result = $apiInstance->getCustomerByPersonId($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerByPersonId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| ID of customer to return |

### Return type

[**\OpenAPI\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchCustomers

> \OpenAPI\Client\Model\Customer[] searchCustomers($location_id, $search, $sort_col, $sort_dir, $search_field, $offset, $limit)

Search/list customers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 'location_id_example'; // string | Location id to search in
$search = 'search_example'; // string | Search customers
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$search_field = 'search_field_example'; // string | Search specific field
$offset = 0; // int | Offset to list customers
$limit = 20; // int | Number of customers to get

try {
    $result = $apiInstance->searchCustomers($location_id, $search, $sort_col, $sort_dir, $search_field, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->searchCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| Location id to search in | [optional]
 **search** | **string**| Search customers | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **search_field** | **string**| Search specific field | [optional]
 **offset** | **int**| Offset to list customers | [optional] [default to 0]
 **limit** | **int**| Number of customers to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Customer[]**](../Model/Customer.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateCustomer

> \OpenAPI\Client\Model\CustomerResponse updateCustomer($person_id, $new_customer_with_image_url)

Update an existing customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | Person id to update
$new_customer_with_image_url = new \OpenAPI\Client\Model\NewCustomerWithImageUrl(); // \OpenAPI\Client\Model\NewCustomerWithImageUrl | Customer object that needs to be added to the store

try {
    $result = $apiInstance->updateCustomer($person_id, $new_customer_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| Person id to update |
 **new_customer_with_image_url** | [**\OpenAPI\Client\Model\NewCustomerWithImageUrl**](../Model/NewCustomerWithImageUrl.md)| Customer object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\CustomerResponse**](../Model/CustomerResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

