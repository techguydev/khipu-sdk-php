# OpenAPI\Client\DefaultApi

All URIs are relative to https://payment-api.khipu.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deletePaymentById()**](DefaultApi.md#deletePaymentById) | **DELETE** /v3/payments/{id} | Delete payment by Id |
| [**getBanks()**](DefaultApi.md#getBanks) | **GET** /v3/banks | Get banks |
| [**getMerchantPaymentMethodsById()**](DefaultApi.md#getMerchantPaymentMethodsById) | **GET** /v3/merchants/{id}/paymentMethods | Get payment methods |
| [**getPaymentById()**](DefaultApi.md#getPaymentById) | **GET** /v3/payments/{id} | Get payment by Id |
| [**getPredict()**](DefaultApi.md#getPredict) | **GET** /v3/predict | Get payment prediction |
| [**postPayment()**](DefaultApi.md#postPayment) | **POST** /v3/payments | Create payment |
| [**postPaymentConfirmById()**](DefaultApi.md#postPaymentConfirmById) | **POST** /v3/payments/{id}/confirm | Confirm payment by Id |
| [**postPaymentRefundsById()**](DefaultApi.md#postPaymentRefundsById) | **POST** /v3/payments/{id}/refunds | Refund payment by Id |
| [**postReceiver()**](DefaultApi.md#postReceiver) | **POST** /v3/receivers | Post receiver |


## `deletePaymentById()`

```php
deletePaymentById($id): \OpenAPI\Client\Model\Success
```

Delete payment by Id

Borrar un pago. Solo se pueden borrar pagos que estén pendientes de pagar. Esta operación no puede deshacerse.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identificador del pago

try {
    $result = $apiInstance->deletePaymentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deletePaymentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identificador del pago | |

### Return type

[**\OpenAPI\Client\Model\Success**](../Model/Success.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBanks()`

```php
getBanks(): \OpenAPI\Client\Model\BankGetBanks
```

Get banks

Este método obtiene la lista de bancos que se pueden utilizar para pagar en esta cuenta de cobro.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getBanks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getBanks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\BankGetBanks**](../Model/BankGetBanks.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMerchantPaymentMethodsById()`

```php
getMerchantPaymentMethodsById($id): \OpenAPI\Client\Model\MerchantGetPaymentMethods
```

Get payment methods

Obtiene el listado de medios de pago disponible para una cuenta de cobrador.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 3.4; // float | Identificador de la cuenta de cobro

try {
    $result = $apiInstance->getMerchantPaymentMethodsById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getMerchantPaymentMethodsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **float**| Identificador de la cuenta de cobro | |

### Return type

[**\OpenAPI\Client\Model\MerchantGetPaymentMethods**](../Model/MerchantGetPaymentMethods.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentById()`

```php
getPaymentById($id): \OpenAPI\Client\Model\PaymentGetPayment
```

Get payment by Id

Información completa del pago. Datos con los que fue creado y el estado actual del pago.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identificador del pago

try {
    $result = $apiInstance->getPaymentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPaymentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identificador del pago | |

### Return type

[**\OpenAPI\Client\Model\PaymentGetPayment**](../Model/PaymentGetPayment.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPredict()`

```php
getPredict($payer_email, $bank_id, $amount, $currency): \OpenAPI\Client\Model\PredictGetPredict
```

Get payment prediction

Predicción acerca del resultado de un pago, si podrá o no funcionar. Información adicional como máximo posible de transferir a un nuevo destinatario.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payer_email = 'payer_email_example'; // string | Correo electrónico del pagador
$bank_id = 'bank_id_example'; // string | Identificador del banco de origen
$amount = 'amount_example'; // string | Monto del pago
$currency = 'currency_example'; // string | Moneda en formato ISO-4217

try {
    $result = $apiInstance->getPredict($payer_email, $bank_id, $amount, $currency);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPredict: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payer_email** | **string**| Correo electrónico del pagador | |
| **bank_id** | **string**| Identificador del banco de origen | |
| **amount** | **string**| Monto del pago | |
| **currency** | **string**| Moneda en formato ISO-4217 | |

### Return type

[**\OpenAPI\Client\Model\PredictGetPredict**](../Model/PredictGetPredict.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPayment()`

```php
postPayment($payment_post_payment): \OpenAPI\Client\Model\PaymentPostPayment2
```

Create payment

Crea un pago en Khipu y obtiene las URLs para redirección al usuario para que complete el pago.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_post_payment = new \OpenAPI\Client\Model\PaymentPostPayment(); // \OpenAPI\Client\Model\PaymentPostPayment

try {
    $result = $apiInstance->postPayment($payment_post_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_post_payment** | [**\OpenAPI\Client\Model\PaymentPostPayment**](../Model/PaymentPostPayment.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\PaymentPostPayment2**](../Model/PaymentPostPayment2.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentConfirmById()`

```php
postPaymentConfirmById($id): \OpenAPI\Client\Model\Success
```

Confirm payment by Id

**Advertencia: Esta función sólo está disponible para los clientes que la hayan contratado de forma independiente. Para utilizarla, póngase en contacto con nosotros en soporte@khipu.com**<br><br> Confirmar el pago. Al confirmar el pago, este será rendido al día hábil siguiente.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identificador del pago

try {
    $result = $apiInstance->postPaymentConfirmById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postPaymentConfirmById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identificador del pago | |

### Return type

[**\OpenAPI\Client\Model\Success**](../Model/Success.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPaymentRefundsById()`

```php
postPaymentRefundsById($id, $payment_post_payment_refunds): \OpenAPI\Client\Model\Success
```

Refund payment by Id

Reembolsa total o parcialmente el monto de un pago. Esta operación solo se puede realizar en los comercios que recauden en cuenta Khipu y antes de la rendición de los fondos correspondientes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Identificador del pago
$payment_post_payment_refunds = new \OpenAPI\Client\Model\PaymentPostPaymentRefunds(); // \OpenAPI\Client\Model\PaymentPostPaymentRefunds

try {
    $result = $apiInstance->postPaymentRefundsById($id, $payment_post_payment_refunds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postPaymentRefundsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Identificador del pago | |
| **payment_post_payment_refunds** | [**\OpenAPI\Client\Model\PaymentPostPaymentRefunds**](../Model/PaymentPostPaymentRefunds.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\Success**](../Model/Success.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postReceiver()`

```php
postReceiver($receiver_post_receiver): \OpenAPI\Client\Model\ReceiverPostReceiver2
```

Post receiver

**Advertencia: Esta función sólo está disponible para los clientes que la hayan contratado de forma independiente. Para utilizarla, póngase en contacto con nosotros en soporte@khipu.com**<br><br> Crear una nueva cuenta de cobro asociada a un integrador. Necesita datos de la cuenta de usuario asociada, datos de facturación y datos de contacto.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Api-Key
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$receiver_post_receiver = new \OpenAPI\Client\Model\ReceiverPostReceiver(); // \OpenAPI\Client\Model\ReceiverPostReceiver

try {
    $result = $apiInstance->postReceiver($receiver_post_receiver);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postReceiver: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **receiver_post_receiver** | [**\OpenAPI\Client\Model\ReceiverPostReceiver**](../Model/ReceiverPostReceiver.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ReceiverPostReceiver2**](../Model/ReceiverPostReceiver2.md)

### Authorization

[Api-Key](../../README.md#Api-Key)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
