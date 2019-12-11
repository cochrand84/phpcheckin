# OpenAPI\Client\RegistersApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addRegister**](RegistersApi.md#addRegister) | **POST** /registers | Add a new register to the store
[**batchRegister**](RegistersApi.md#batchRegister) | **POST** /registers/batch | Bulk create, update, and delete registers
[**deleteRegister**](RegistersApi.md#deleteRegister) | **DELETE** /registers/{register_id} | Deletes a register
[**getRegisterByID**](RegistersApi.md#getRegisterByID) | **GET** /registers/{register_id} | Find register by register number or ID
[**searchRegisters**](RegistersApi.md#searchRegisters) | **GET** /registers | Search/list registers
[**updateRegister**](RegistersApi.md#updateRegister) | **POST** /registers/{register_id} | Update a register



## addRegister

> \OpenAPI\Client\Model\Register addRegister($new_register)

Add a new register to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_register = new \OpenAPI\Client\Model\NewRegister(); // \OpenAPI\Client\Model\NewRegister | Register object that needs to be added to the POS

try {
    $result = $apiInstance->addRegister($new_register);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistersApi->addRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_register** | [**\OpenAPI\Client\Model\NewRegister**](../Model/NewRegister.md)| Register object that needs to be added to the POS |

### Return type

[**\OpenAPI\Client\Model\Register**](../Model/Register.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchRegister

> \OpenAPI\Client\Model\BulkRegistersResponse batchRegister($bulk_registers)

Bulk create, update, and delete registers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_registers = new \OpenAPI\Client\Model\BulkRegisters(); // \OpenAPI\Client\Model\BulkRegisters | Register objects that needs to be batched

try {
    $result = $apiInstance->batchRegister($bulk_registers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistersApi->batchRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_registers** | [**\OpenAPI\Client\Model\BulkRegisters**](../Model/BulkRegisters.md)| Register objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkRegistersResponse**](../Model/BulkRegistersResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteRegister

> \OpenAPI\Client\Model\RegisterResponse deleteRegister($register_id)

Deletes a register

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$register_id = 'register_id_example'; // string | ID of register to return

try {
    $result = $apiInstance->deleteRegister($register_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistersApi->deleteRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_id** | **string**| ID of register to return |

### Return type

[**\OpenAPI\Client\Model\RegisterResponse**](../Model/RegisterResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getRegisterByID

> \OpenAPI\Client\Model\RegisterResponse getRegisterByID($register_id)

Find register by register number or ID

Returns a single register

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$register_id = 'register_id_example'; // string | ID of register to return

try {
    $result = $apiInstance->getRegisterByID($register_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistersApi->getRegisterByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_id** | **string**| ID of register to return |

### Return type

[**\OpenAPI\Client\Model\RegisterResponse**](../Model/RegisterResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchRegisters

> \OpenAPI\Client\Model\Register[] searchRegisters($search, $sort_col, $sort_dir, $location_id, $offset, $limit)

Search/list registers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search registers
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$location_id = 'location_id_example'; // string | Search specific location
$offset = 0; // int | Offset to list registers
$limit = 20; // int | Number of registers to get

try {
    $result = $apiInstance->searchRegisters($search, $sort_col, $sort_dir, $location_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistersApi->searchRegisters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search registers | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **location_id** | **string**| Search specific location | [optional]
 **offset** | **int**| Offset to list registers | [optional] [default to 0]
 **limit** | **int**| Number of registers to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Register[]**](../Model/Register.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateRegister

> \OpenAPI\Client\Model\RegisterResponse updateRegister($register_id, $new_register)

Update a register

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegistersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$register_id = 'register_id_example'; // string | register id/number to update
$new_register = new \OpenAPI\Client\Model\NewRegister(); // \OpenAPI\Client\Model\NewRegister | Register that needs to be added to the store

try {
    $result = $apiInstance->updateRegister($register_id, $new_register);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistersApi->updateRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_id** | **string**| register id/number to update |
 **new_register** | [**\OpenAPI\Client\Model\NewRegister**](../Model/NewRegister.md)| Register that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\RegisterResponse**](../Model/RegisterResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

