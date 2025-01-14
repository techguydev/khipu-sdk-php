# # PaymentGetPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payment_id** | **string** | Identificador único del pago, es una cadena alfanumérica de 12 caracteres. Como este identificador es único, se puede usar, por ejemplo, para evitar procesar una notificación repetida. (Khipu espera un código 200 al notificar un pago, si esto no ocurre se reintenta hasta por dos días). |
**payment_url** | **string** | URL principal del pago, si el usuario no ha elegido previamente un método de pago se le muestran las opciones. |
**simplified_transfer_url** | **string** | URL de pago simplificado. |
**transfer_url** | **string** | URL de pago normal. |
**app_url** | **string** | URL para invocar el pago desde un dispositivo móvil usando la APP de Khipu. |
**ready_for_terminal** | **bool** | Es &#x60;true&#x60; si el pago ya cuenta con todos los datos necesarios para abrir directamente la aplicación de pagos Khipu. |
**notification_token** | **string** | Cadena de caracteres alfanuméricos que identifican unicamente al pago, es el identificador que el servidor de Khipu enviará al servidor del comercio cuando notifique que un pago está conciliado. |
**receiver_id** | **int** | Identificador único de una cuenta de cobro. |
**conciliation_date** | **\DateTime** | Fecha y hora de conciliación del pago. Formato ISO-8601. |
**subject** | **string** | Motivo del pago. |
**amount** | **float** | El monto del cobro. |
**currency** | **string** | El código de moneda en formato ISO-4217. |
**status** | **string** | Estado del pago, puede ser &#x60;pending&#x60; (el pagador aún no comienza a pagar), &#x60;verifying&#x60; (se está verificando el pago) o &#x60;done&#x60;, cuando el pago ya está confirmado. |
**status_detail** | **string** | Detalle del estado del pago: &#x60;pending&#x60; (el pagador aún no comienza a pagar), &#x60;normal&#x60; (el pago fue verificado y fue cancelado por algún medio de pago estándar), &#x60;marked-paid-by-receiver&#x60; (el cobrador marcó el cobro como pagado por otro medio), &#x60;rejected-by-payer&#x60; (el pagador declaró que no pagará), &#x60;marked-as-abuse&#x60; (el pagador declaró que no pagará y que el cobro fue no solicitado), y &#x60;reversed&#x60; (el pago fue anulado por el comercio, el dinero fue devuelto al pagador). |
**body** | **string** | Detalle del cobro. |
**picture_url** | **string** | URL con imagen del cobro. |
**receipt_url** | **string** | URL del comprobante de pago. |
**return_url** | **string** | URL donde se redirige al pagador luego que termina el pago. |
**cancel_url** | **string** | URL donde se redirige al pagador luego de que desiste hacer el pago. |
**notify_url** | **string** | URL del webservice donde se notificará el pago. |
**notify_api_version** | **string** | Versión de la API de notificación. |
**expires_date** | **\DateTime** | Fecha máxima para ejecutar el pago (en formato ISO-8601). El cliente podrá realizar varios intentos de pago hasta dicha fecha. Cada intento tiene un plazo individual de 3 horas para su ejecución. |
**attachment_urls** | **string[]** | Arreglo de URLs de archivos adjuntos al pago. |
**bank** | **string** | Nombre del banco seleccionado por el pagador. |
**bank_id** | **string** | Identificador del banco seleccionado por el pagador. |
**payer_name** | **string** | Nombre del pagador. |
**payer_email** | **string** | Correo electrónico del pagador. |
**personal_identifier** | **string** | Identificador personal del pagador. |
**bank_account_number** | **string** | Número de cuenta bancaria del pagador. |
**out_of_date_conciliation** | **bool** | Es &#x60;true&#x60; si la conciliación del pago fue hecha luego de la fecha de expiración. |
**transaction_id** | **string** | Identificador del pago asignado por el cobrador. |
**custom** | **string** | Campo genérico que asigna el cobrador al momento de hacer el pago. |
**responsible_user_email** | **string** | Correo electrónico de la persona responsable del pago. |
**send_reminders** | **bool** | Es &#x60;true&#x60; cuando este es un cobro por correo electrónico y Khipu enviará recordatorios. |
**send_email** | **bool** | Es &#x60;true&#x60; cuando Khipu enviará el cobro por correo electrónico. |
**payment_method** | **string** | Método de pago usado por el pagador, puede ser &#x60;regular_transfer&#x60; (transferencia normal) o &#x60;simplified_transfer&#x60; (transferencia simplificada). |
**funds_source** | **string** | Origen de fondos usado por el pagador, puede ser &#x60;debit&#x60; para pago con débito, &#x60;prepaid&#x60; para pago con prepago, &#x60;credit&#x60; para pago con crédito, o vacío en el caso de que se haya pagado mediante transferencia bancaria. |
**discount** | **float** | Monto a descontar del valor pagado. | [optional]
**third_party_authorization_details** | **string** | Ignorar este campo. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
