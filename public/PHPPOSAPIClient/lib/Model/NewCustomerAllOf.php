<?php
/**
 * NewCustomerAllOf
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PHP Point Of Sale API
 *
 * PHP Point Of Sale API  You can find out more about PHP POS at [https://phppointofsale.com](https://phppointofsale.com)
 *
 * The version of the OpenAPI document: 1.0
 * Contact: support@phppointofsale.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.2
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * NewCustomerAllOf Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewCustomerAllOf implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewCustomer_allOf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_name' => 'string',
        'tier_id' => 'int',
        'account_number' => 'string',
        'taxable' => 'bool',
        'tax_certificate' => 'string',
        'internal_notes' => 'string',
        'override_default_tax' => 'bool',
        'tax_class_id' => 'int',
        'balance' => 'float',
        'credit_limit' => 'float',
        'points' => 'int',
        'disable_loyalty' => 'bool',
        'amount_to_spend_for_next_point' => 'float',
        'remaining_sales_before_discount' => 'int',
        'location_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'company_name' => null,
        'tier_id' => 'uuid',
        'account_number' => null,
        'taxable' => null,
        'tax_certificate' => null,
        'internal_notes' => null,
        'override_default_tax' => null,
        'tax_class_id' => 'uuid',
        'balance' => 'float',
        'credit_limit' => 'float',
        'points' => 'int32',
        'disable_loyalty' => null,
        'amount_to_spend_for_next_point' => 'float',
        'remaining_sales_before_discount' => 'int32',
        'location_id' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'company_name' => 'company_name',
        'tier_id' => 'tier_id',
        'account_number' => 'account_number',
        'taxable' => 'taxable',
        'tax_certificate' => 'tax_certificate',
        'internal_notes' => 'internal_notes',
        'override_default_tax' => 'override_default_tax',
        'tax_class_id' => 'tax_class_id',
        'balance' => 'balance',
        'credit_limit' => 'credit_limit',
        'points' => 'points',
        'disable_loyalty' => 'disable_loyalty',
        'amount_to_spend_for_next_point' => 'amount_to_spend_for_next_point',
        'remaining_sales_before_discount' => 'remaining_sales_before_discount',
        'location_id' => 'location_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'tier_id' => 'setTierId',
        'account_number' => 'setAccountNumber',
        'taxable' => 'setTaxable',
        'tax_certificate' => 'setTaxCertificate',
        'internal_notes' => 'setInternalNotes',
        'override_default_tax' => 'setOverrideDefaultTax',
        'tax_class_id' => 'setTaxClassId',
        'balance' => 'setBalance',
        'credit_limit' => 'setCreditLimit',
        'points' => 'setPoints',
        'disable_loyalty' => 'setDisableLoyalty',
        'amount_to_spend_for_next_point' => 'setAmountToSpendForNextPoint',
        'remaining_sales_before_discount' => 'setRemainingSalesBeforeDiscount',
        'location_id' => 'setLocationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'tier_id' => 'getTierId',
        'account_number' => 'getAccountNumber',
        'taxable' => 'getTaxable',
        'tax_certificate' => 'getTaxCertificate',
        'internal_notes' => 'getInternalNotes',
        'override_default_tax' => 'getOverrideDefaultTax',
        'tax_class_id' => 'getTaxClassId',
        'balance' => 'getBalance',
        'credit_limit' => 'getCreditLimit',
        'points' => 'getPoints',
        'disable_loyalty' => 'getDisableLoyalty',
        'amount_to_spend_for_next_point' => 'getAmountToSpendForNextPoint',
        'remaining_sales_before_discount' => 'getRemainingSalesBeforeDiscount',
        'location_id' => 'getLocationId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['tier_id'] = isset($data['tier_id']) ? $data['tier_id'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['tax_certificate'] = isset($data['tax_certificate']) ? $data['tax_certificate'] : null;
        $this->container['internal_notes'] = isset($data['internal_notes']) ? $data['internal_notes'] : null;
        $this->container['override_default_tax'] = isset($data['override_default_tax']) ? $data['override_default_tax'] : null;
        $this->container['tax_class_id'] = isset($data['tax_class_id']) ? $data['tax_class_id'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['disable_loyalty'] = isset($data['disable_loyalty']) ? $data['disable_loyalty'] : null;
        $this->container['amount_to_spend_for_next_point'] = isset($data['amount_to_spend_for_next_point']) ? $data['amount_to_spend_for_next_point'] : null;
        $this->container['remaining_sales_before_discount'] = isset($data['remaining_sales_before_discount']) ? $data['remaining_sales_before_discount'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets tier_id
     *
     * @return int|null
     */
    public function getTierId()
    {
        return $this->container['tier_id'];
    }

    /**
     * Sets tier_id
     *
     * @param int|null $tier_id tier_id
     *
     * @return $this
     */
    public function setTierId($tier_id)
    {
        $this->container['tier_id'] = $tier_id;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number account_number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets taxable
     *
     * @return bool|null
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     *
     * @param bool|null $taxable taxable
     *
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets tax_certificate
     *
     * @return string|null
     */
    public function getTaxCertificate()
    {
        return $this->container['tax_certificate'];
    }

    /**
     * Sets tax_certificate
     *
     * @param string|null $tax_certificate tax_certificate
     *
     * @return $this
     */
    public function setTaxCertificate($tax_certificate)
    {
        $this->container['tax_certificate'] = $tax_certificate;

        return $this;
    }

    /**
     * Gets internal_notes
     *
     * @return string|null
     */
    public function getInternalNotes()
    {
        return $this->container['internal_notes'];
    }

    /**
     * Sets internal_notes
     *
     * @param string|null $internal_notes internal_notes
     *
     * @return $this
     */
    public function setInternalNotes($internal_notes)
    {
        $this->container['internal_notes'] = $internal_notes;

        return $this;
    }

    /**
     * Gets override_default_tax
     *
     * @return bool|null
     */
    public function getOverrideDefaultTax()
    {
        return $this->container['override_default_tax'];
    }

    /**
     * Sets override_default_tax
     *
     * @param bool|null $override_default_tax override_default_tax
     *
     * @return $this
     */
    public function setOverrideDefaultTax($override_default_tax)
    {
        $this->container['override_default_tax'] = $override_default_tax;

        return $this;
    }

    /**
     * Gets tax_class_id
     *
     * @return int|null
     */
    public function getTaxClassId()
    {
        return $this->container['tax_class_id'];
    }

    /**
     * Sets tax_class_id
     *
     * @param int|null $tax_class_id tax_class_id
     *
     * @return $this
     */
    public function setTaxClassId($tax_class_id)
    {
        $this->container['tax_class_id'] = $tax_class_id;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return float|null
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param float|null $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets credit_limit
     *
     * @return float|null
     */
    public function getCreditLimit()
    {
        return $this->container['credit_limit'];
    }

    /**
     * Sets credit_limit
     *
     * @param float|null $credit_limit credit_limit
     *
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

        return $this;
    }

    /**
     * Gets points
     *
     * @return int|null
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param int|null $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets disable_loyalty
     *
     * @return bool|null
     */
    public function getDisableLoyalty()
    {
        return $this->container['disable_loyalty'];
    }

    /**
     * Sets disable_loyalty
     *
     * @param bool|null $disable_loyalty disable_loyalty
     *
     * @return $this
     */
    public function setDisableLoyalty($disable_loyalty)
    {
        $this->container['disable_loyalty'] = $disable_loyalty;

        return $this;
    }

    /**
     * Gets amount_to_spend_for_next_point
     *
     * @return float|null
     */
    public function getAmountToSpendForNextPoint()
    {
        return $this->container['amount_to_spend_for_next_point'];
    }

    /**
     * Sets amount_to_spend_for_next_point
     *
     * @param float|null $amount_to_spend_for_next_point amount_to_spend_for_next_point
     *
     * @return $this
     */
    public function setAmountToSpendForNextPoint($amount_to_spend_for_next_point)
    {
        $this->container['amount_to_spend_for_next_point'] = $amount_to_spend_for_next_point;

        return $this;
    }

    /**
     * Gets remaining_sales_before_discount
     *
     * @return int|null
     */
    public function getRemainingSalesBeforeDiscount()
    {
        return $this->container['remaining_sales_before_discount'];
    }

    /**
     * Sets remaining_sales_before_discount
     *
     * @param int|null $remaining_sales_before_discount remaining_sales_before_discount
     *
     * @return $this
     */
    public function setRemainingSalesBeforeDiscount($remaining_sales_before_discount)
    {
        $this->container['remaining_sales_before_discount'] = $remaining_sales_before_discount;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id location_id
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


