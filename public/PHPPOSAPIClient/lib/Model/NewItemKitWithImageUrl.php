<?php
/**
 * NewItemKitWithImageUrl
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
 * NewItemKitWithImageUrl Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewItemKitWithImageUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewItemKitWithImageUrl';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'dynamic_pricing' => 'bool',
        'unit_price' => 'float',
        'cost_price' => 'float',
        'max_discount_percent' => 'float',
        'max_edit_price' => 'float',
        'min_edit_price' => 'float',
        'description' => 'string',
        'allow_price_override_regardless_of_permissions' => 'bool',
        'only_integer' => 'bool',
        'is_barcoded' => 'bool',
        'category_id' => 'int',
        'manufacturer_id' => 'int',
        'item_kit_number' => 'string',
        'product_id' => 'string',
        'override_default_tax' => 'bool',
        'tax_class_id' => 'int',
        'is_ebt_item' => 'bool',
        'disable_loyalty' => 'bool',
        'change_cost_price' => 'bool',
        'commission_percent' => 'float',
        'commission_fixed' => 'float',
        'commission_percent_type' => 'string',
        'tax_included' => 'bool',
        'default_quantity' => 'float',
        'tags' => 'string[]',
        'items' => '\OpenAPI\Client\Model\ItemKitItem[]',
        'item_kits' => '\OpenAPI\Client\Model\ItemKitItemKit[]',
        'tier_pricing' => '\OpenAPI\Client\Model\TierPricing[]',
        'custom_fields' => 'map[string,string]',
        'locations' => 'map[string,object]',
        'images' => '\OpenAPI\Client\Model\ImageUrl[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'dynamic_pricing' => null,
        'unit_price' => 'float',
        'cost_price' => 'float',
        'max_discount_percent' => 'float',
        'max_edit_price' => 'float',
        'min_edit_price' => 'float',
        'description' => null,
        'allow_price_override_regardless_of_permissions' => null,
        'only_integer' => null,
        'is_barcoded' => null,
        'category_id' => null,
        'manufacturer_id' => null,
        'item_kit_number' => null,
        'product_id' => null,
        'override_default_tax' => null,
        'tax_class_id' => null,
        'is_ebt_item' => null,
        'disable_loyalty' => null,
        'change_cost_price' => null,
        'commission_percent' => 'float',
        'commission_fixed' => 'float',
        'commission_percent_type' => null,
        'tax_included' => null,
        'default_quantity' => 'float',
        'tags' => null,
        'items' => null,
        'item_kits' => null,
        'tier_pricing' => null,
        'custom_fields' => null,
        'locations' => null,
        'images' => null
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
        'name' => 'name',
        'dynamic_pricing' => 'dynamic_pricing',
        'unit_price' => 'unit_price',
        'cost_price' => 'cost_price',
        'max_discount_percent' => 'max_discount_percent',
        'max_edit_price' => 'max_edit_price',
        'min_edit_price' => 'min_edit_price',
        'description' => 'description',
        'allow_price_override_regardless_of_permissions' => 'allow_price_override_regardless_of_permissions',
        'only_integer' => 'only_integer',
        'is_barcoded' => 'is_barcoded',
        'category_id' => 'category_id',
        'manufacturer_id' => 'manufacturer_id',
        'item_kit_number' => 'item_kit_number',
        'product_id' => 'product_id',
        'override_default_tax' => 'override_default_tax',
        'tax_class_id' => 'tax_class_id',
        'is_ebt_item' => 'is_ebt_item',
        'disable_loyalty' => 'disable_loyalty',
        'change_cost_price' => 'change_cost_price',
        'commission_percent' => 'commission_percent',
        'commission_fixed' => 'commission_fixed',
        'commission_percent_type' => 'commission_percent_type',
        'tax_included' => 'tax_included',
        'default_quantity' => 'default_quantity',
        'tags' => 'tags',
        'items' => 'items',
        'item_kits' => 'item_kits',
        'tier_pricing' => 'tier_pricing',
        'custom_fields' => 'custom_fields',
        'locations' => 'locations',
        'images' => 'images'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'dynamic_pricing' => 'setDynamicPricing',
        'unit_price' => 'setUnitPrice',
        'cost_price' => 'setCostPrice',
        'max_discount_percent' => 'setMaxDiscountPercent',
        'max_edit_price' => 'setMaxEditPrice',
        'min_edit_price' => 'setMinEditPrice',
        'description' => 'setDescription',
        'allow_price_override_regardless_of_permissions' => 'setAllowPriceOverrideRegardlessOfPermissions',
        'only_integer' => 'setOnlyInteger',
        'is_barcoded' => 'setIsBarcoded',
        'category_id' => 'setCategoryId',
        'manufacturer_id' => 'setManufacturerId',
        'item_kit_number' => 'setItemKitNumber',
        'product_id' => 'setProductId',
        'override_default_tax' => 'setOverrideDefaultTax',
        'tax_class_id' => 'setTaxClassId',
        'is_ebt_item' => 'setIsEbtItem',
        'disable_loyalty' => 'setDisableLoyalty',
        'change_cost_price' => 'setChangeCostPrice',
        'commission_percent' => 'setCommissionPercent',
        'commission_fixed' => 'setCommissionFixed',
        'commission_percent_type' => 'setCommissionPercentType',
        'tax_included' => 'setTaxIncluded',
        'default_quantity' => 'setDefaultQuantity',
        'tags' => 'setTags',
        'items' => 'setItems',
        'item_kits' => 'setItemKits',
        'tier_pricing' => 'setTierPricing',
        'custom_fields' => 'setCustomFields',
        'locations' => 'setLocations',
        'images' => 'setImages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'dynamic_pricing' => 'getDynamicPricing',
        'unit_price' => 'getUnitPrice',
        'cost_price' => 'getCostPrice',
        'max_discount_percent' => 'getMaxDiscountPercent',
        'max_edit_price' => 'getMaxEditPrice',
        'min_edit_price' => 'getMinEditPrice',
        'description' => 'getDescription',
        'allow_price_override_regardless_of_permissions' => 'getAllowPriceOverrideRegardlessOfPermissions',
        'only_integer' => 'getOnlyInteger',
        'is_barcoded' => 'getIsBarcoded',
        'category_id' => 'getCategoryId',
        'manufacturer_id' => 'getManufacturerId',
        'item_kit_number' => 'getItemKitNumber',
        'product_id' => 'getProductId',
        'override_default_tax' => 'getOverrideDefaultTax',
        'tax_class_id' => 'getTaxClassId',
        'is_ebt_item' => 'getIsEbtItem',
        'disable_loyalty' => 'getDisableLoyalty',
        'change_cost_price' => 'getChangeCostPrice',
        'commission_percent' => 'getCommissionPercent',
        'commission_fixed' => 'getCommissionFixed',
        'commission_percent_type' => 'getCommissionPercentType',
        'tax_included' => 'getTaxIncluded',
        'default_quantity' => 'getDefaultQuantity',
        'tags' => 'getTags',
        'items' => 'getItems',
        'item_kits' => 'getItemKits',
        'tier_pricing' => 'getTierPricing',
        'custom_fields' => 'getCustomFields',
        'locations' => 'getLocations',
        'images' => 'getImages'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dynamic_pricing'] = isset($data['dynamic_pricing']) ? $data['dynamic_pricing'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['cost_price'] = isset($data['cost_price']) ? $data['cost_price'] : null;
        $this->container['max_discount_percent'] = isset($data['max_discount_percent']) ? $data['max_discount_percent'] : null;
        $this->container['max_edit_price'] = isset($data['max_edit_price']) ? $data['max_edit_price'] : null;
        $this->container['min_edit_price'] = isset($data['min_edit_price']) ? $data['min_edit_price'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['allow_price_override_regardless_of_permissions'] = isset($data['allow_price_override_regardless_of_permissions']) ? $data['allow_price_override_regardless_of_permissions'] : null;
        $this->container['only_integer'] = isset($data['only_integer']) ? $data['only_integer'] : null;
        $this->container['is_barcoded'] = isset($data['is_barcoded']) ? $data['is_barcoded'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['manufacturer_id'] = isset($data['manufacturer_id']) ? $data['manufacturer_id'] : null;
        $this->container['item_kit_number'] = isset($data['item_kit_number']) ? $data['item_kit_number'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['override_default_tax'] = isset($data['override_default_tax']) ? $data['override_default_tax'] : null;
        $this->container['tax_class_id'] = isset($data['tax_class_id']) ? $data['tax_class_id'] : null;
        $this->container['is_ebt_item'] = isset($data['is_ebt_item']) ? $data['is_ebt_item'] : null;
        $this->container['disable_loyalty'] = isset($data['disable_loyalty']) ? $data['disable_loyalty'] : null;
        $this->container['change_cost_price'] = isset($data['change_cost_price']) ? $data['change_cost_price'] : null;
        $this->container['commission_percent'] = isset($data['commission_percent']) ? $data['commission_percent'] : null;
        $this->container['commission_fixed'] = isset($data['commission_fixed']) ? $data['commission_fixed'] : null;
        $this->container['commission_percent_type'] = isset($data['commission_percent_type']) ? $data['commission_percent_type'] : null;
        $this->container['tax_included'] = isset($data['tax_included']) ? $data['tax_included'] : null;
        $this->container['default_quantity'] = isset($data['default_quantity']) ? $data['default_quantity'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['item_kits'] = isset($data['item_kits']) ? $data['item_kits'] : null;
        $this->container['tier_pricing'] = isset($data['tier_pricing']) ? $data['tier_pricing'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['locations'] = isset($data['locations']) ? $data['locations'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dynamic_pricing
     *
     * @return bool|null
     */
    public function getDynamicPricing()
    {
        return $this->container['dynamic_pricing'];
    }

    /**
     * Sets dynamic_pricing
     *
     * @param bool|null $dynamic_pricing dynamic_pricing
     *
     * @return $this
     */
    public function setDynamicPricing($dynamic_pricing)
    {
        $this->container['dynamic_pricing'] = $dynamic_pricing;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param float|null $unit_price unit_price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets cost_price
     *
     * @return float|null
     */
    public function getCostPrice()
    {
        return $this->container['cost_price'];
    }

    /**
     * Sets cost_price
     *
     * @param float|null $cost_price cost_price
     *
     * @return $this
     */
    public function setCostPrice($cost_price)
    {
        $this->container['cost_price'] = $cost_price;

        return $this;
    }

    /**
     * Gets max_discount_percent
     *
     * @return float|null
     */
    public function getMaxDiscountPercent()
    {
        return $this->container['max_discount_percent'];
    }

    /**
     * Sets max_discount_percent
     *
     * @param float|null $max_discount_percent max_discount_percent
     *
     * @return $this
     */
    public function setMaxDiscountPercent($max_discount_percent)
    {
        $this->container['max_discount_percent'] = $max_discount_percent;

        return $this;
    }

    /**
     * Gets max_edit_price
     *
     * @return float|null
     */
    public function getMaxEditPrice()
    {
        return $this->container['max_edit_price'];
    }

    /**
     * Sets max_edit_price
     *
     * @param float|null $max_edit_price max_edit_price
     *
     * @return $this
     */
    public function setMaxEditPrice($max_edit_price)
    {
        $this->container['max_edit_price'] = $max_edit_price;

        return $this;
    }

    /**
     * Gets min_edit_price
     *
     * @return float|null
     */
    public function getMinEditPrice()
    {
        return $this->container['min_edit_price'];
    }

    /**
     * Sets min_edit_price
     *
     * @param float|null $min_edit_price min_edit_price
     *
     * @return $this
     */
    public function setMinEditPrice($min_edit_price)
    {
        $this->container['min_edit_price'] = $min_edit_price;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets allow_price_override_regardless_of_permissions
     *
     * @return bool|null
     */
    public function getAllowPriceOverrideRegardlessOfPermissions()
    {
        return $this->container['allow_price_override_regardless_of_permissions'];
    }

    /**
     * Sets allow_price_override_regardless_of_permissions
     *
     * @param bool|null $allow_price_override_regardless_of_permissions allow_price_override_regardless_of_permissions
     *
     * @return $this
     */
    public function setAllowPriceOverrideRegardlessOfPermissions($allow_price_override_regardless_of_permissions)
    {
        $this->container['allow_price_override_regardless_of_permissions'] = $allow_price_override_regardless_of_permissions;

        return $this;
    }

    /**
     * Gets only_integer
     *
     * @return bool|null
     */
    public function getOnlyInteger()
    {
        return $this->container['only_integer'];
    }

    /**
     * Sets only_integer
     *
     * @param bool|null $only_integer only_integer
     *
     * @return $this
     */
    public function setOnlyInteger($only_integer)
    {
        $this->container['only_integer'] = $only_integer;

        return $this;
    }

    /**
     * Gets is_barcoded
     *
     * @return bool|null
     */
    public function getIsBarcoded()
    {
        return $this->container['is_barcoded'];
    }

    /**
     * Sets is_barcoded
     *
     * @param bool|null $is_barcoded is_barcoded
     *
     * @return $this
     */
    public function setIsBarcoded($is_barcoded)
    {
        $this->container['is_barcoded'] = $is_barcoded;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int|null $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets manufacturer_id
     *
     * @return int|null
     */
    public function getManufacturerId()
    {
        return $this->container['manufacturer_id'];
    }

    /**
     * Sets manufacturer_id
     *
     * @param int|null $manufacturer_id manufacturer_id
     *
     * @return $this
     */
    public function setManufacturerId($manufacturer_id)
    {
        $this->container['manufacturer_id'] = $manufacturer_id;

        return $this;
    }

    /**
     * Gets item_kit_number
     *
     * @return string|null
     */
    public function getItemKitNumber()
    {
        return $this->container['item_kit_number'];
    }

    /**
     * Sets item_kit_number
     *
     * @param string|null $item_kit_number item_kit_number
     *
     * @return $this
     */
    public function setItemKitNumber($item_kit_number)
    {
        $this->container['item_kit_number'] = $item_kit_number;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string|null $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

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
     * Gets is_ebt_item
     *
     * @return bool|null
     */
    public function getIsEbtItem()
    {
        return $this->container['is_ebt_item'];
    }

    /**
     * Sets is_ebt_item
     *
     * @param bool|null $is_ebt_item is_ebt_item
     *
     * @return $this
     */
    public function setIsEbtItem($is_ebt_item)
    {
        $this->container['is_ebt_item'] = $is_ebt_item;

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
     * Gets change_cost_price
     *
     * @return bool|null
     */
    public function getChangeCostPrice()
    {
        return $this->container['change_cost_price'];
    }

    /**
     * Sets change_cost_price
     *
     * @param bool|null $change_cost_price change_cost_price
     *
     * @return $this
     */
    public function setChangeCostPrice($change_cost_price)
    {
        $this->container['change_cost_price'] = $change_cost_price;

        return $this;
    }

    /**
     * Gets commission_percent
     *
     * @return float|null
     */
    public function getCommissionPercent()
    {
        return $this->container['commission_percent'];
    }

    /**
     * Sets commission_percent
     *
     * @param float|null $commission_percent commission_percent
     *
     * @return $this
     */
    public function setCommissionPercent($commission_percent)
    {
        $this->container['commission_percent'] = $commission_percent;

        return $this;
    }

    /**
     * Gets commission_fixed
     *
     * @return float|null
     */
    public function getCommissionFixed()
    {
        return $this->container['commission_fixed'];
    }

    /**
     * Sets commission_fixed
     *
     * @param float|null $commission_fixed commission_fixed
     *
     * @return $this
     */
    public function setCommissionFixed($commission_fixed)
    {
        $this->container['commission_fixed'] = $commission_fixed;

        return $this;
    }

    /**
     * Gets commission_percent_type
     *
     * @return string|null
     */
    public function getCommissionPercentType()
    {
        return $this->container['commission_percent_type'];
    }

    /**
     * Sets commission_percent_type
     *
     * @param string|null $commission_percent_type commission_percent_type
     *
     * @return $this
     */
    public function setCommissionPercentType($commission_percent_type)
    {
        $this->container['commission_percent_type'] = $commission_percent_type;

        return $this;
    }

    /**
     * Gets tax_included
     *
     * @return bool|null
     */
    public function getTaxIncluded()
    {
        return $this->container['tax_included'];
    }

    /**
     * Sets tax_included
     *
     * @param bool|null $tax_included tax_included
     *
     * @return $this
     */
    public function setTaxIncluded($tax_included)
    {
        $this->container['tax_included'] = $tax_included;

        return $this;
    }

    /**
     * Gets default_quantity
     *
     * @return float|null
     */
    public function getDefaultQuantity()
    {
        return $this->container['default_quantity'];
    }

    /**
     * Sets default_quantity
     *
     * @param float|null $default_quantity default_quantity
     *
     * @return $this
     */
    public function setDefaultQuantity($default_quantity)
    {
        $this->container['default_quantity'] = $default_quantity;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\ItemKitItem[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\ItemKitItem[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets item_kits
     *
     * @return \OpenAPI\Client\Model\ItemKitItemKit[]|null
     */
    public function getItemKits()
    {
        return $this->container['item_kits'];
    }

    /**
     * Sets item_kits
     *
     * @param \OpenAPI\Client\Model\ItemKitItemKit[]|null $item_kits item_kits
     *
     * @return $this
     */
    public function setItemKits($item_kits)
    {
        $this->container['item_kits'] = $item_kits;

        return $this;
    }

    /**
     * Gets tier_pricing
     *
     * @return \OpenAPI\Client\Model\TierPricing[]|null
     */
    public function getTierPricing()
    {
        return $this->container['tier_pricing'];
    }

    /**
     * Sets tier_pricing
     *
     * @param \OpenAPI\Client\Model\TierPricing[]|null $tier_pricing tier_pricing
     *
     * @return $this
     */
    public function setTierPricing($tier_pricing)
    {
        $this->container['tier_pricing'] = $tier_pricing;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return map[string,string]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param map[string,string]|null $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return map[string,object]|null
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param map[string,object]|null $locations locations
     *
     * @return $this
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \OpenAPI\Client\Model\ImageUrl[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \OpenAPI\Client\Model\ImageUrl[]|null $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

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


