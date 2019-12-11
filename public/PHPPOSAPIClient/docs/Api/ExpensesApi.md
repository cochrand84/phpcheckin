# OpenAPI\Client\ExpensesApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addExpense**](ExpensesApi.md#addExpense) | **POST** /expenses | Add a new expense to the store
[**batchExpense**](ExpensesApi.md#batchExpense) | **POST** /expenses/batch | Bulk create, update, and delete expenses
[**deleteExpense**](ExpensesApi.md#deleteExpense) | **DELETE** /expenses/{expense_id} | Deletes a expense
[**getExpenseByID**](ExpensesApi.md#getExpenseByID) | **GET** /expenses/{expense_id} | Find expense by expense number or ID
[**searchExpenses**](ExpensesApi.md#searchExpenses) | **GET** /expenses | Search/list expenses
[**updateExpense**](ExpensesApi.md#updateExpense) | **POST** /expenses/{expense_id} | Update a expense



## addExpense

> \OpenAPI\Client\Model\Expense addExpense($new_expense)

Add a new expense to the store

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_expense = new \OpenAPI\Client\Model\NewExpense(); // \OpenAPI\Client\Model\NewExpense | Expense object that needs to be added to the POS

try {
    $result = $apiInstance->addExpense($new_expense);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesApi->addExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_expense** | [**\OpenAPI\Client\Model\NewExpense**](../Model/NewExpense.md)| Expense object that needs to be added to the POS |

### Return type

[**\OpenAPI\Client\Model\Expense**](../Model/Expense.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchExpense

> \OpenAPI\Client\Model\BulkExpensesResponse batchExpense($bulk_expenses)

Bulk create, update, and delete expenses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_expenses = new \OpenAPI\Client\Model\BulkExpenses(); // \OpenAPI\Client\Model\BulkExpenses | Expense objects that needs to be batched

try {
    $result = $apiInstance->batchExpense($bulk_expenses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesApi->batchExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_expenses** | [**\OpenAPI\Client\Model\BulkExpenses**](../Model/BulkExpenses.md)| Expense objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkExpensesResponse**](../Model/BulkExpensesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteExpense

> \OpenAPI\Client\Model\ExpenseResponse deleteExpense($expense_id)

Deletes a expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_id = 'expense_id_example'; // string | ID of expense to return

try {
    $result = $apiInstance->deleteExpense($expense_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesApi->deleteExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_id** | **string**| ID of expense to return |

### Return type

[**\OpenAPI\Client\Model\ExpenseResponse**](../Model/ExpenseResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getExpenseByID

> \OpenAPI\Client\Model\ExpenseResponse getExpenseByID($expense_id)

Find expense by expense number or ID

Returns a single expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_id = 'expense_id_example'; // string | ID of expense to return

try {
    $result = $apiInstance->getExpenseByID($expense_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesApi->getExpenseByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_id** | **string**| ID of expense to return |

### Return type

[**\OpenAPI\Client\Model\ExpenseResponse**](../Model/ExpenseResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchExpenses

> \OpenAPI\Client\Model\Expense[] searchExpenses($search, $sort_col, $sort_dir, $location_id, $offset, $limit)

Search/list expenses

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search expenses
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$location_id = 'location_id_example'; // string | Search specific location
$offset = 0; // int | Offset to list expenses
$limit = 20; // int | Number of expenses to get

try {
    $result = $apiInstance->searchExpenses($search, $sort_col, $sort_dir, $location_id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesApi->searchExpenses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search expenses | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **location_id** | **string**| Search specific location | [optional]
 **offset** | **int**| Offset to list expenses | [optional] [default to 0]
 **limit** | **int**| Number of expenses to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\Expense[]**](../Model/Expense.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateExpense

> \OpenAPI\Client\Model\ExpenseResponse updateExpense($expense_id, $new_expense)

Update a expense

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ExpensesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$expense_id = 'expense_id_example'; // string | expense id/number to update
$new_expense = new \OpenAPI\Client\Model\NewExpense(); // \OpenAPI\Client\Model\NewExpense | Expense that needs to be added to the store

try {
    $result = $apiInstance->updateExpense($expense_id, $new_expense);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpensesApi->updateExpense: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **expense_id** | **string**| expense id/number to update |
 **new_expense** | [**\OpenAPI\Client\Model\NewExpense**](../Model/NewExpense.md)| Expense that needs to be added to the store |

### Return type

[**\OpenAPI\Client\Model\ExpenseResponse**](../Model/ExpenseResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

