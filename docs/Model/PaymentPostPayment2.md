# # PaymentPostPayment2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **string** | Identificador único del pago, es una cadena alfanumérica de 12 caracteres. Como este identificador es único, se puede usar, por ejemplo, para evitar procesar una notificación repetida. (Khipu espera un código 200 al notificar un pago, si esto no ocurre se reintenta hasta por dos días). |
**payment_url** | **string** | URL principal del pago, si el usuario no ha elegido previamente un método de pago se le muestran las opciones. |
**simplified_transfer_url** | **string** | URL de pago simplificado. |
**transfer_url** | **string** | URL de pago normal. |
**app_url** | **string** | URL para invocar el pago desde un dispositivo móvil usando la APP de Khipu. |
**ready_for_terminal** | **bool** | Es &#x60;true&#x60; si el pago ya cuenta con todos los datos necesarios para abrir directamente la aplicación de pagos Khipu. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
