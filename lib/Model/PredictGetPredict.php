<?php
/**
 * PredictGetPredict
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Pagos Instantáneos
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v3.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
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
 * PredictGetPredict Class Doc Comment
 *
 * @category Class
 * @description Predicción acerca del resultado de un pago, si podrá o no funcionar. Información adicional como máximo posible de transferir a un nuevo destinatario.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PredictGetPredict implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'predict-get-predict';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'result' => 'string',
        'max_amount' => 'float',
        'cool_down_date' => 'string',
        'new_destinatary_max_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'result' => null,
        'max_amount' => 'double',
        'cool_down_date' => null,
        'new_destinatary_max_amount' => 'double'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'result' => false,
        'max_amount' => false,
        'cool_down_date' => false,
        'new_destinatary_max_amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'result' => 'result',
        'max_amount' => 'max_amount',
        'cool_down_date' => 'cool_down_date',
        'new_destinatary_max_amount' => 'new_destinatary_max_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'result' => 'setResult',
        'max_amount' => 'setMaxAmount',
        'cool_down_date' => 'setCoolDownDate',
        'new_destinatary_max_amount' => 'setNewDestinataryMaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'result' => 'getResult',
        'max_amount' => 'getMaxAmount',
        'cool_down_date' => 'getCoolDownDate',
        'new_destinatary_max_amount' => 'getNewDestinataryMaxAmount'
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

    public const RESULT_OK = 'ok';
    public const RESULT_NEW_DESTINATARY_AMOUNT_EXCEEDED = 'new_destinatary_amount_exceeded';
    public const RESULT_MAX_AMOUNT_EXCEEDED = 'max_amount_exceeded';
    public const RESULT_NEW_DESTINATARY_COOL_DOWN = 'new_destinatary_cool_down';
    public const RESULT_NOT_AVAILABLE_ACCOUNT = 'not_available_account';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_OK,
            self::RESULT_NEW_DESTINATARY_AMOUNT_EXCEEDED,
            self::RESULT_MAX_AMOUNT_EXCEEDED,
            self::RESULT_NEW_DESTINATARY_COOL_DOWN,
            self::RESULT_NOT_AVAILABLE_ACCOUNT,
        ];
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
        $this->setIfExists('result', $data ?? [], null);
        $this->setIfExists('max_amount', $data ?? [], null);
        $this->setIfExists('cool_down_date', $data ?? [], null);
        $this->setIfExists('new_destinatary_max_amount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        $allowedValues = $this->getResultAllowableValues();
        if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'result', must be one of '%s'",
                $this->container['result'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['max_amount'] === null) {
            $invalidProperties[] = "'max_amount' can't be null";
        }
        if ($this->container['cool_down_date'] === null) {
            $invalidProperties[] = "'cool_down_date' can't be null";
        }
        if ($this->container['new_destinatary_max_amount'] === null) {
            $invalidProperties[] = "'new_destinatary_max_amount' can't be null";
        }
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
     * Gets result
     *
     * @return string
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param string $result El resultado de la predicción.
     *
     * @return self
     */
    public function setResult($result)
    {
        if (is_null($result)) {
            throw new \InvalidArgumentException('non-nullable result cannot be null');
        }
        $allowedValues = $this->getResultAllowableValues();
        if (!in_array($result, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'result', must be one of '%s'",
                    $result,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets max_amount
     *
     * @return float
     */
    public function getMaxAmount()
    {
        return $this->container['max_amount'];
    }

    /**
     * Sets max_amount
     *
     * @param float $max_amount El monto máximo posible para transferir.
     *
     * @return self
     */
    public function setMaxAmount($max_amount)
    {
        if (is_null($max_amount)) {
            throw new \InvalidArgumentException('non-nullable max_amount cannot be null');
        }
        $this->container['max_amount'] = $max_amount;

        return $this;
    }

    /**
     * Gets cool_down_date
     *
     * @return string
     */
    public function getCoolDownDate()
    {
        return $this->container['cool_down_date'];
    }

    /**
     * Sets cool_down_date
     *
     * @param string $cool_down_date Fecha de término para la restricción de monto en formato ISO-8601
     *
     * @return self
     */
    public function setCoolDownDate($cool_down_date)
    {
        if (is_null($cool_down_date)) {
            throw new \InvalidArgumentException('non-nullable cool_down_date cannot be null');
        }
        $this->container['cool_down_date'] = $cool_down_date;

        return $this;
    }

    /**
     * Gets new_destinatary_max_amount
     *
     * @return float
     */
    public function getNewDestinataryMaxAmount()
    {
        return $this->container['new_destinatary_max_amount'];
    }

    /**
     * Sets new_destinatary_max_amount
     *
     * @param float $new_destinatary_max_amount Monto máximo para transferir a un nuevo destinatario.
     *
     * @return self
     */
    public function setNewDestinataryMaxAmount($new_destinatary_max_amount)
    {
        if (is_null($new_destinatary_max_amount)) {
            throw new \InvalidArgumentException('non-nullable new_destinatary_max_amount cannot be null');
        }
        $this->container['new_destinatary_max_amount'] = $new_destinatary_max_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

