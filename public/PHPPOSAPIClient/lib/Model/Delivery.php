<?php
/**
 * Delivery
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
 * Delivery Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Delivery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Delivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'sale_id' => 'int',
        'delivery_person_info' => 'Person',
        'delivery_info' => 'DeliveryInfo',
        'delivery_tax_group_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'sale_id' => 'uuid',
        'delivery_person_info' => null,
        'delivery_info' => null,
        'delivery_tax_group_id' => null
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
        'id' => 'id',
        'sale_id' => 'sale_id',
        'delivery_person_info' => 'delivery_person_info',
        'delivery_info' => 'delivery_info',
        'delivery_tax_group_id' => 'delivery_tax_group_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'sale_id' => 'setSaleId',
        'delivery_person_info' => 'setDeliveryPersonInfo',
        'delivery_info' => 'setDeliveryInfo',
        'delivery_tax_group_id' => 'setDeliveryTaxGroupId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'sale_id' => 'getSaleId',
        'delivery_person_info' => 'getDeliveryPersonInfo',
        'delivery_info' => 'getDeliveryInfo',
        'delivery_tax_group_id' => 'getDeliveryTaxGroupId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sale_id'] = isset($data['sale_id']) ? $data['sale_id'] : null;
        $this->container['delivery_person_info'] = isset($data['delivery_person_info']) ? $data['delivery_person_info'] : null;
        $this->container['delivery_info'] = isset($data['delivery_info']) ? $data['delivery_info'] : null;
        $this->container['delivery_tax_group_id'] = isset($data['delivery_tax_group_id']) ? $data['delivery_tax_group_id'] : null;
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets sale_id
     *
     * @return int|null
     */
    public function getSaleId()
    {
        return $this->container['sale_id'];
    }

    /**
     * Sets sale_id
     *
     * @param int|null $sale_id sale_id
     *
     * @return $this
     */
    public function setSaleId($sale_id)
    {
        $this->container['sale_id'] = $sale_id;

        return $this;
    }

    /**
     * Gets delivery_person_info
     *
     * @return Person|null
     */
    public function getDeliveryPersonInfo()
    {
        return $this->container['delivery_person_info'];
    }

    /**
     * Sets delivery_person_info
     *
     * @param Person|null $delivery_person_info delivery_person_info
     *
     * @return $this
     */
    public function setDeliveryPersonInfo($delivery_person_info)
    {
        $this->container['delivery_person_info'] = $delivery_person_info;

        return $this;
    }

    /**
     * Gets delivery_info
     *
     * @return DeliveryInfo|null
     */
    public function getDeliveryInfo()
    {
        return $this->container['delivery_info'];
    }

    /**
     * Sets delivery_info
     *
     * @param DeliveryInfo|null $delivery_info delivery_info
     *
     * @return $this
     */
    public function setDeliveryInfo($delivery_info)
    {
        $this->container['delivery_info'] = $delivery_info;

        return $this;
    }

    /**
     * Gets delivery_tax_group_id
     *
     * @return int|null
     */
    public function getDeliveryTaxGroupId()
    {
        return $this->container['delivery_tax_group_id'];
    }

    /**
     * Sets delivery_tax_group_id
     *
     * @param int|null $delivery_tax_group_id delivery_tax_group_id
     *
     * @return $this
     */
    public function setDeliveryTaxGroupId($delivery_tax_group_id)
    {
        $this->container['delivery_tax_group_id'] = $delivery_tax_group_id;

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


