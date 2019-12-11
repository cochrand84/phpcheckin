# OpenAPI\Client\AppointmentsApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAppointment**](AppointmentsApi.md#addAppointment) | **POST** /appointments | Add a new appointment to the POS
[**batchAppointment**](AppointmentsApi.md#batchAppointment) | **POST** /appointments/batch | Bulk create, update, and delete appointments
[**deleteAppointment**](AppointmentsApi.md#deleteAppointment) | **DELETE** /appointments/{appointment_id} | Deletes an appointment
[**getAppointmentByID**](AppointmentsApi.md#getAppointmentByID) | **GET** /appointments/{appointment_id} | Find appointment by appointment ID
[**searchAppointments**](AppointmentsApi.md#searchAppointments) | **GET** /appointments | Search/list appointments
[**updateAppointment**](AppointmentsApi.md#updateAppointment) | **POST** /appointments/{appointment_id} | Update am appointment



## addAppointment

> \OpenAPI\Client\Model\Appointment addAppointment($new_appointment)

Add a new appointment to the POS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_appointment = new \OpenAPI\Client\Model\NewAppointment(); // \OpenAPI\Client\Model\NewAppointment | appointments object; not all fields are required

try {
    $result = $apiInstance->addAppointment($new_appointment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->addAppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_appointment** | [**\OpenAPI\Client\Model\NewAppointment**](../Model/NewAppointment.md)| appointments object; not all fields are required |

### Return type

[**\OpenAPI\Client\Model\Appointment**](../Model/Appointment.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchAppointment

> \OpenAPI\Client\Model\BulkAppointmentsResponse batchAppointment($bulk_appointments)

Bulk create, update, and delete appointments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_appointments = new \OpenAPI\Client\Model\BulkAppointments(); // \OpenAPI\Client\Model\BulkAppointments | appointments objects that needs to be batched

try {
    $result = $apiInstance->batchAppointment($bulk_appointments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->batchAppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_appointments** | [**\OpenAPI\Client\Model\BulkAppointments**](../Model/BulkAppointments.md)| appointments objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkAppointmentsResponse**](../Model/BulkAppointmentsResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAppointment

> \OpenAPI\Client\Model\AppointmentResponse deleteAppointment($appointment_id)

Deletes an appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_id = 'appointment_id_example'; // string | ID of appointment to delete

try {
    $result = $apiInstance->deleteAppointment($appointment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->deleteAppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | **string**| ID of appointment to delete |

### Return type

[**\OpenAPI\Client\Model\AppointmentResponse**](../Model/AppointmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAppointmentByID

> \OpenAPI\Client\Model\AppointmentResponse getAppointmentByID($appointment_id)

Find appointment by appointment ID

Returns a single appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_id = 'appointment_id_example'; // string | ID of appointment to return

try {
    $result = $apiInstance->getAppointmentByID($appointment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->getAppointmentByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | **string**| ID of appointment to return |

### Return type

[**\OpenAPI\Client\Model\AppointmentResponse**](../Model/AppointmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchAppointments

> \OpenAPI\Client\Model\Appointment[] searchAppointments($search, $sort_col, $sort_dir, $offset, $limit)

Search/list appointments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search appointments
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$offset = 0; // int | Offset to list appointments
$limit = 20; // int | Number of appointments to get

try {
    $result = $apiInstance->searchAppointments($search, $sort_col, $sort_dir, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->searchAppointments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search appointments | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **offset** | **int**| Offset to list appointments | [optional] [default to 0]
 **limit** | **int**| Number of appointments to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Appointment[]**](../Model/Appointment.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateAppointment

> \OpenAPI\Client\Model\AppointmentResponse updateAppointment($appointment_id, $new_appointment)

Update am appointment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AppointmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$appointment_id = 'appointment_id_example'; // string | appointment id to update
$new_appointment = new \OpenAPI\Client\Model\NewAppointment(); // \OpenAPI\Client\Model\NewAppointment | appointments that needs to be added to the POS

try {
    $result = $apiInstance->updateAppointment($appointment_id, $new_appointment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentsApi->updateAppointment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | **string**| appointment id to update |
 **new_appointment** | [**\OpenAPI\Client\Model\NewAppointment**](../Model/NewAppointment.md)| appointments that needs to be added to the POS |

### Return type

[**\OpenAPI\Client\Model\AppointmentResponse**](../Model/AppointmentResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

