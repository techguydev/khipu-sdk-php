# OpenAPIClient-php

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://payment-api.khipu.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**deletePaymentById**](docs/Api/DefaultApi.md#deletepaymentbyid) | **DELETE** /v3/payments/{id} | Delete payment by Id
*DefaultApi* | [**getBanks**](docs/Api/DefaultApi.md#getbanks) | **GET** /v3/banks | Get banks
*DefaultApi* | [**getMerchantPaymentMethodsById**](docs/Api/DefaultApi.md#getmerchantpaymentmethodsbyid) | **GET** /v3/merchants/{id}/paymentMethods | Get payment methods
*DefaultApi* | [**getPaymentById**](docs/Api/DefaultApi.md#getpaymentbyid) | **GET** /v3/payments/{id} | Get payment by Id
*DefaultApi* | [**getPredict**](docs/Api/DefaultApi.md#getpredict) | **GET** /v3/predict | Get payment prediction
*DefaultApi* | [**postPayment**](docs/Api/DefaultApi.md#postpayment) | **POST** /v3/payments | Create payment
*DefaultApi* | [**postPaymentConfirmById**](docs/Api/DefaultApi.md#postpaymentconfirmbyid) | **POST** /v3/payments/{id}/confirm | Confirm payment by Id
*DefaultApi* | [**postPaymentRefundsById**](docs/Api/DefaultApi.md#postpaymentrefundsbyid) | **POST** /v3/payments/{id}/refunds | Refund payment by Id
*DefaultApi* | [**postReceiver**](docs/Api/DefaultApi.md#postreceiver) | **POST** /v3/receivers | Post receiver

## Models

- [BankGetBanks](docs/Model/BankGetBanks.md)
- [BankGetBanksBanksInner](docs/Model/BankGetBanksBanksInner.md)
- [MerchantGetPaymentMethods](docs/Model/MerchantGetPaymentMethods.md)
- [MerchantGetPaymentMethodsPaymentMethodsInner](docs/Model/MerchantGetPaymentMethodsPaymentMethodsInner.md)
- [PaymentGetPayment](docs/Model/PaymentGetPayment.md)
- [PaymentPostPayment](docs/Model/PaymentPostPayment.md)
- [PaymentPostPayment2](docs/Model/PaymentPostPayment2.md)
- [PaymentPostPaymentRefunds](docs/Model/PaymentPostPaymentRefunds.md)
- [PredictGetPredict](docs/Model/PredictGetPredict.md)
- [ReceiverPostReceiver](docs/Model/ReceiverPostReceiver.md)
- [ReceiverPostReceiver2](docs/Model/ReceiverPostReceiver2.md)
- [Success](docs/Model/Success.md)

## Authorization

Authentication schemes defined for the API:
### Api-Key

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v3.0`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
# khipu-sdk-php
# khipu-sdk-php