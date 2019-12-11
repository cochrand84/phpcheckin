# OpenAPI\Client\AppointmentTypesApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAppointmentType**](AppointmentTypesApi.md#addAppointmentType) | **POST** /appointment_types | Add a new appointment_type to the store
[**batchAppointmentType**](AppointmentTypesApi.md#batchAppointmentType) | **POST** /appointment_types/batch | Bulk create, update, and delete appointment_types
[**deleteAppointmentType**](AppointmentTypesApi.md#deleteAppointmentType) | **DELETE** /appointment_types/{appointment_type_id} | Deletes a appointment_type
[**getAppointmentTypeByID**](AppointmentTypesApi.md#getAppointmentTypeByID) | **GET** /appointment_types/{appointment_type_id} | Find appointment_type by appointment_type number or ID
[**searchAppointmentTypes**](AppointmentTypesApi.md#searchAppointmentTypes) | **GET** /appointment_types | Search/list appointment_types
[**updateAppointmentType**](AppointmentTypesApi.md#updateAppointmentType) | **POST** /appointment_types/{appointment_type_id} | Update a appointment_type



## addAppointmentType

> \OpenAPI\Client\Model\AppointmentType addAppointmentType($new_appointment_type)

Add a new appointment_type to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_appointment_type = new \OpenAPI\Client\Model\NewAppointmentType(); // \OpenAPI\Client\Model\NewAppointmentType | AppointmentType object that needs to be added to the POS

try {
    $result = $apiInstance->addAppointmentType($new_appointment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentTypesApi->addAppointmentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_appointment_type** | [**\OpenAPI\Client\Model\NewAppointmentType**](../Model/NewAppointmentType.md)| AppointmentType object that needs to be added to the POS |

### Return type

[**\OpenAPI\Client\Model\AppointmentType**](../Model/AppointmentType.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchAppointmentType

> \OpenAPI\Client\Model\BulkAppointmentTypesResponse batchAppointmentType($bulk_appointment_types)

Bulk create, update, and delete appointment_types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_appointment_types = new \OpenAPI\Client\Model\BulkAppointmentTypes(); // \OpenAPI\Client\Model\BulkAppointmentTypes | AppointmentType objects that needs to be batched

try {
    $result = $apiInstance->batchAppointmentType($bulk_appointment_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentTypesApi->batchAppointmentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_appointment_types** | [**\OpenAPI\Client\Model\BulkAppointmentTypes**](../Model/BulkAppointmentTypes.md)| AppointmentType objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkAppointmentTypesResponse**](../Model/BulkAppointmentTypesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAppointmentType

> \OpenAPI\Client\Model\AppointmentTypeResponse deleteAppointmentType($appointment_type_id)

Deletes a appointment_type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_type_id = 'appointment_type_id_example'; // string | ID of appointment_type to return

try {
    $result = $apiInstance->deleteAppointmentType($appointment_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentTypesApi->deleteAppointmentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_type_id** | **string**| ID of appointment_type to return |

### Return type

[**\OpenAPI\Client\Model\AppointmentTypeResponse**](../Model/AppointmentTypeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAppointmentTypeByID

> \OpenAPI\Client\Model\AppointmentTypeResponse getAppointmentTypeByID($appointment_type_id)

Find appointment_type by appointment_type number or ID

Returns a single appointment_type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_type_id = 'appointment_type_id_example'; // string | ID of appointment_type to return

try {
    $result = $apiInstance->getAppointmentTypeByID($appointment_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentTypesApi->getAppointmentTypeByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_type_id** | **string**| ID of appointment_type to return |

### Return type

[**\OpenAPI\Client\Model\AppointmentTypeResponse**](../Model/AppointmentTypeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchAppointmentTypes

> \OpenAPI\Client\Model\AppointmentType[] searchAppointmentTypes($search, $sort_col, $sort_dir, $offset, $limit)

Search/list appointment_types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search appointment_types
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$offset = 0; // int | Offset to list appointment_types
$limit = 20; // int | Number of appointment_types to get

try {
    $result = $apiInstance->searchAppointmentTypes($search, $sort_col, $sort_dir, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentTypesApi->searchAppointmentTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search appointment_types | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **offset** | **int**| Offset to list appointment_types | [optional] [default to 0]
 **limit** | **int**| Number of appointment_types to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\AppointmentType[]**](../Model/AppointmentType.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAppointmentType

> \OpenAPI\Client\Model\AppointmentTypeResponse updateAppointmentType($appointment_type_id, $new_appointment_type)

Update a appointment_type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_type_id = 'appointment_type_id_example'; // string | appointment_type id/number to update
$new_appointment_type = new \OpenAPI\Client\Model\NewAppointmentType(); // \OpenAPI\Client\Model\NewAppointmentType | AppointmentType that needs to be added to the store

try {
    $result = $apiInstance->updateAppointmentType($appointment_type_id, $new_appointment_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentTypesApi->updateAppointmentType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_type_id** | **string**| appointment_type id/number to update |
 **new_appointment_type** | [**\OpenAPI\Client\Model\NewAppointmentType**](../Model/NewAppointmentType.md)| AppointmentType that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\AppointmentTypeResponse**](../Model/AppointmentTypeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

