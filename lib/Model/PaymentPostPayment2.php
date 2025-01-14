<?php
/**
 * PaymentPostPayment2
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
 * PaymentPostPayment2 Class Doc Comment
 *
 * @category Class
 * @description Crea un pago en Khipu y obtiene las URLs para redirección al usuario para que complete el pago.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentPostPayment2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'payment-post-payment-2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payment_id' => 'string',
        'payment_url' => 'string',
        'simplified_transfer_url' => 'string',
        'transfer_url' => 'string',
        'app_url' => 'string',
        'ready_for_terminal' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'payment_id' => null,
        'payment_url' => null,
        'simplified_transfer_url' => null,
        'transfer_url' => null,
        'app_url' => null,
        'ready_for_terminal' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'payment_id' => false,
        'payment_url' => false,
        'simplified_transfer_url' => false,
        'transfer_url' => false,
        'app_url' => false,
        'ready_for_terminal' => false
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
        'payment_id' => 'payment_id',
        'payment_url' => 'payment_url',
        'simplified_transfer_url' => 'simplified_transfer_url',
        'transfer_url' => 'transfer_url',
        'app_url' => 'app_url',
        'ready_for_terminal' => 'ready_for_terminal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_id' => 'setPaymentId',
        'payment_url' => 'setPaymentUrl',
        'simplified_transfer_url' => 'setSimplifiedTransferUrl',
        'transfer_url' => 'setTransferUrl',
        'app_url' => 'setAppUrl',
        'ready_for_terminal' => 'setReadyForTerminal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_id' => 'getPaymentId',
        'payment_url' => 'getPaymentUrl',
        'simplified_transfer_url' => 'getSimplifiedTransferUrl',
        'transfer_url' => 'getTransferUrl',
        'app_url' => 'getAppUrl',
        'ready_for_terminal' => 'getReadyForTerminal'
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
        $this->setIfExists('payment_id', $data ?? [], null);
        $this->setIfExists('payment_url', $data ?? [], null);
        $this->setIfExists('simplified_transfer_url', $data ?? [], null);
        $this->setIfExists('transfer_url', $data ?? [], null);
        $this->setIfExists('app_url', $data ?? [], null);
        $this->setIfExists('ready_for_terminal', $data ?? [], null);
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

        if ($this->container['payment_id'] === null) {
            $invalidProperties[] = "'payment_id' can't be null";
        }
        if ($this->container['payment_url'] === null) {
            $invalidProperties[] = "'payment_url' can't be null";
        }
        if ($this->container['simplified_transfer_url'] === null) {
            $invalidProperties[] = "'simplified_transfer_url' can't be null";
        }
        if ($this->container['transfer_url'] === null) {
            $invalidProperties[] = "'transfer_url' can't be null";
        }
        if ($this->container['app_url'] === null) {
            $invalidProperties[] = "'app_url' can't be null";
        }
        if ($this->container['ready_for_terminal'] === null) {
            $invalidProperties[] = "'ready_for_terminal' can't be null";
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
     * Gets payment_id
     *
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string $payment_id Identificador único del pago, es una cadena alfanumérica de 12 caracteres. Como este identificador es único, se puede usar, por ejemplo, para evitar procesar una notificación repetida. (Khipu espera un código 200 al notificar un pago, si esto no ocurre se reintenta hasta por dos días).
     *
     * @return self
     */
    public function setPaymentId($payment_id)
    {
        if (is_null($payment_id)) {
            throw new \InvalidArgumentException('non-nullable payment_id cannot be null');
        }
        $this->container['payment_id'] = $payment_id;

        return $this;
    }

    /**
     * Gets payment_url
     *
     * @return string
     */
    public function getPaymentUrl()
    {
        return $this->container['payment_url'];
    }

    /**
     * Sets payment_url
     *
     * @param string $payment_url URL principal del pago, si el usuario no ha elegido previamente un método de pago se le muestran las opciones.
     *
     * @return self
     */
    public function setPaymentUrl($payment_url)
    {
        if (is_null($payment_url)) {
            throw new \InvalidArgumentException('non-nullable payment_url cannot be null');
        }
        $this->container['payment_url'] = $payment_url;

        return $this;
    }

    /**
     * Gets simplified_transfer_url
     *
     * @return string
     */
    public function getSimplifiedTransferUrl()
    {
        return $this->container['simplified_transfer_url'];
    }

    /**
     * Sets simplified_transfer_url
     *
     * @param string $simplified_transfer_url URL de pago simplificado.
     *
     * @return self
     */
    public function setSimplifiedTransferUrl($simplified_transfer_url)
    {
        if (is_null($simplified_transfer_url)) {
            throw new \InvalidArgumentException('non-nullable simplified_transfer_url cannot be null');
        }
        $this->container['simplified_transfer_url'] = $simplified_transfer_url;

        return $this;
    }

    /**
     * Gets transfer_url
     *
     * @return string
     */
    public function getTransferUrl()
    {
        return $this->container['transfer_url'];
    }

    /**
     * Sets transfer_url
     *
     * @param string $transfer_url URL de pago normal.
     *
     * @return self
     */
    public function setTransferUrl($transfer_url)
    {
        if (is_null($transfer_url)) {
            throw new \InvalidArgumentException('non-nullable transfer_url cannot be null');
        }
        $this->container['transfer_url'] = $transfer_url;

        return $this;
    }

    /**
     * Gets app_url
     *
     * @return string
     */
    public function getAppUrl()
    {
        return $this->container['app_url'];
    }

    /**
     * Sets app_url
     *
     * @param string $app_url URL para invocar el pago desde un dispositivo móvil usando la APP de Khipu.
     *
     * @return self
     */
    public function setAppUrl($app_url)
    {
        if (is_null($app_url)) {
            throw new \InvalidArgumentException('non-nullable app_url cannot be null');
        }
        $this->container['app_url'] = $app_url;

        return $this;
    }

    /**
     * Gets ready_for_terminal
     *
     * @return bool
     */
    public function getReadyForTerminal()
    {
        return $this->container['ready_for_terminal'];
    }

    /**
     * Sets ready_for_terminal
     *
     * @param bool $ready_for_terminal Es `true` si el pago ya cuenta con todos los datos necesarios para abrir directamente la aplicación de pagos Khipu.
     *
     * @return self
     */
    public function setReadyForTerminal($ready_for_terminal)
    {
        if (is_null($ready_for_terminal)) {
            throw new \InvalidArgumentException('non-nullable ready_for_terminal cannot be null');
        }
        $this->container['ready_for_terminal'] = $ready_for_terminal;

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


