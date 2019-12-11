# OpenAPI\Client\PriceRulesApi

All URIs are relative to *https://demo.phppointofsale.com/index.php/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPriceRule**](PriceRulesApi.md#addPriceRule) | **POST** /price_rules | Add a new price rule to the POS
[**batchPriceRule**](PriceRulesApi.md#batchPriceRule) | **POST** /price_rules/batch | Bulk create, update, and delete price rules
[**deletePriceRule**](PriceRulesApi.md#deletePriceRule) | **DELETE** /price_rules/{price_rule_id} | Deletes a price _rule
[**getPriceRuleByID**](PriceRulesApi.md#getPriceRuleByID) | **GET** /price_rules/{price_rule_id} | Find price rule by price rule ID
[**searchPriceRules**](PriceRulesApi.md#searchPriceRules) | **GET** /price_rules | Search/list price rules
[**updatePriceRule**](PriceRulesApi.md#updatePriceRule) | **POST** /price_rules/{price_rule_id} | Update a price rule



## addPriceRule

> \OpenAPI\Client\Model\PriceRule addPriceRule($new_price_rule)

Add a new price rule to the POS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$new_price_rule = new \OpenAPI\Client\Model\NewPriceRule(); // \OpenAPI\Client\Model\NewPriceRule | Price rule object; not all fields are required depending on the type of price rule

try {
    $result = $apiInstance->addPriceRule($new_price_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->addPriceRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **new_price_rule** | [**\OpenAPI\Client\Model\NewPriceRule**](../Model/NewPriceRule.md)| Price rule object; not all fields are required depending on the type of price rule |

### Return type

[**\OpenAPI\Client\Model\PriceRule**](../Model/PriceRule.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## batchPriceRule

> \OpenAPI\Client\Model\BulkPriceRulesResponse batchPriceRule($bulk_price_rules)

Bulk create, update, and delete price rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_price_rules = new \OpenAPI\Client\Model\BulkPriceRules(); // \OpenAPI\Client\Model\BulkPriceRules | Price rule objects that needs to be batched

try {
    $result = $apiInstance->batchPriceRule($bulk_price_rules);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->batchPriceRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulk_price_rules** | [**\OpenAPI\Client\Model\BulkPriceRules**](../Model/BulkPriceRules.md)| Price rule objects that needs to be batched |

### Return type

[**\OpenAPI\Client\Model\BulkPriceRulesResponse**](../Model/BulkPriceRulesResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePriceRule

> \OpenAPI\Client\Model\PriceRuleResponse deletePriceRule($price_rule_id)

Deletes a price _rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_rule_id = 'price_rule_id_example'; // string | ID of price rule to delete

try {
    $result = $apiInstance->deletePriceRule($price_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->deletePriceRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_rule_id** | **string**| ID of price rule to delete |

### Return type

[**\OpenAPI\Client\Model\PriceRuleResponse**](../Model/PriceRuleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPriceRuleByID

> \OpenAPI\Client\Model\PriceRuleResponse getPriceRuleByID($price_rule_id)

Find price rule by price rule ID

Returns a single price rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_rule_id = 'price_rule_id_example'; // string | ID of price_rule to return

try {
    $result = $apiInstance->getPriceRuleByID($price_rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->getPriceRuleByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_rule_id** | **string**| ID of price_rule to return |

### Return type

[**\OpenAPI\Client\Model\PriceRuleResponse**](../Model/PriceRuleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchPriceRules

> \OpenAPI\Client\Model\PriceRule[] searchPriceRules($search, $sort_col, $sort_dir, $offset, $limit)

Search/list price rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search price rules
$sort_col = 'sort_col_example'; // string | Sort Column
$sort_dir = 'sort_dir_example'; // string | Sort Direction
$offset = 0; // int | Offset to list price rules
$limit = 20; // int | Number of price rules to get

try {
    $result = $apiInstance->searchPriceRules($search, $sort_col, $sort_dir, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->searchPriceRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search** | **string**| Search price rules | [optional]
 **sort_col** | **string**| Sort Column | [optional]
 **sort_dir** | **string**| Sort Direction | [optional]
 **offset** | **int**| Offset to list price rules | [optional] [default to 0]
 **limit** | **int**| Number of price rules to get | [optional] [default to 20]

### Return type

[**\OpenAPI\Client\Model\PriceRule[]**](../Model/PriceRule.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePriceRule

> \OpenAPI\Client\Model\PriceRuleResponse updatePriceRule($price_rule_id, $new_price_rule)

Update a price rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PriceRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$price_rule_id = 'price_rule_id_example'; // string | price rule id to update
$new_price_rule = new \OpenAPI\Client\Model\NewPriceRule(); // \OpenAPI\Client\Model\NewPriceRule | Price rule that needs to be added to the POS

try {
    $result = $apiInstance->updatePriceRule($price_rule_id, $new_price_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PriceRulesApi->updatePriceRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **price_rule_id** | **string**| price rule id to update |
 **new_price_rule** | [**\OpenAPI\Client\Model\NewPriceRule**](../Model/NewPriceRule.md)| Price rule that needs to be added to the POS |

### Return type

[**\OpenAPI\Client\Model\PriceRuleResponse**](../Model/PriceRuleResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

