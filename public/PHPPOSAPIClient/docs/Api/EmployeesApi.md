# OpenAPI\Client\EmployeesApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addEmployee**](EmployeesApi.md#addEmployee) | **POST** /employees | Add a new employee to the store
[**batchEmployee**](EmployeesApi.md#batchEmployee) | **POST** /employees/batch | Bulk create, update, and delete employees
[**deleteEmployee**](EmployeesApi.md#deleteEmployee) | **DELETE** /employees/{person_id} | Deletes a employee
[**getEmployeeByPersonId**](EmployeesApi.md#getEmployeeByPersonId) | **GET** /employees/{person_id} | Find person by Person ID
[**searchEmployees**](EmployeesApi.md#searchEmployees) | **GET** /employees | Search/list employees
[**updateEmployee**](EmployeesApi.md#updateEmployee) | **POST** /employees/{person_id} | Update an existing employee



## addEmployee

> \OpenAPI\Client\Model\Employee addEmployee($new_employee_with_image_url)

Add a new employee to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_employee_with_image_url = new \OpenAPI\Client\Model\NewEmployeeWithImageUrl(); // \OpenAPI\Client\Model\NewEmployeeWithImageUrl | Employee object that needs to be added to the store

try {
    $result = $apiInstance->addEmployee($new_employee_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->addEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_employee_with_image_url** | [**\OpenAPI\Client\Model\NewEmployeeWithImageUrl**](../Model/NewEmployeeWithImageUrl.md)| Employee object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\Employee**](../Model/Employee.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchEmployee

> \OpenAPI\Client\Model\BulkEmployeesResponse batchEmployee($bulk_employees)

Bulk create, update, and delete employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_employees = new \OpenAPI\Client\Model\BulkEmployees(); // \OpenAPI\Client\Model\BulkEmployees | Employee object that needs to be added to the store

try {
    $result = $apiInstance->batchEmployee($bulk_employees);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->batchEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_employees** | [**\OpenAPI\Client\Model\BulkEmployees**](../Model/BulkEmployees.md)| Employee object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\BulkEmployeesResponse**](../Model/BulkEmployeesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteEmployee

> \OpenAPI\Client\Model\EmployeeResponse deleteEmployee($person_id)

Deletes a employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | Person id to delete

try {
    $result = $apiInstance->deleteEmployee($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->deleteEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| Person id to delete |

### Return type

[**\OpenAPI\Client\Model\EmployeeResponse**](../Model/EmployeeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEmployeeByPersonId

> \OpenAPI\Client\Model\EmployeeResponse getEmployeeByPersonId($person_id)

Find person by Person ID

Returns a single employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | ID of employee to return

try {
    $result = $apiInstance->getEmployeeByPersonId($person_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->getEmployeeByPersonId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| ID of employee to return |

### Return type

[**\OpenAPI\Client\Model\EmployeeResponse**](../Model/EmployeeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchEmployees

> \OpenAPI\Client\Model\Employee[] searchEmployees($location_id, $search, $sort_col, $sort_dir, $search_field, $offset, $limit)

Search/list employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$location_id = 'location_id_example'; // string | Location id to search in
$search = 'search_example'; // string | Search employees
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$search_field = 'search_field_example'; // string | Search specific field
$offset = 0; // int | Offset to list employees
$limit = 20; // int | Number of employees to get

try {
    $result = $apiInstance->searchEmployees($location_id, $search, $sort_col, $sort_dir, $search_field, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->searchEmployees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **location_id** | **string**| Location id to search in | [optional]
 **search** | **string**| Search employees | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **search_field** | **string**| Search specific field | [optional]
 **offset** | **int**| Offset to list employees | [optional] [default to 0]
 **limit** | **int**| Number of employees to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Employee[]**](../Model/Employee.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateEmployee

> \OpenAPI\Client\Model\EmployeeResponse updateEmployee($person_id, $new_employee_with_image_url)

Update an existing employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmployeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$person_id = 56; // int | Person id to update
$new_employee_with_image_url = new \OpenAPI\Client\Model\NewEmployeeWithImageUrl(); // \OpenAPI\Client\Model\NewEmployeeWithImageUrl | Employee object that needs to be added to the store

try {
    $result = $apiInstance->updateEmployee($person_id, $new_employee_with_image_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeesApi->updateEmployee: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **person_id** | **int**| Person id to update |
 **new_employee_with_image_url** | [**\OpenAPI\Client\Model\NewEmployeeWithImageUrl**](../Model/NewEmployeeWithImageUrl.md)| Employee object that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\EmployeeResponse**](../Model/EmployeeResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json, multipart/form-data
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

