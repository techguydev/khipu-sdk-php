# # PaymentPostPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | El monto del cobro. Sin separador de miles y usando &#39;.&#39; como separador de decimales. Hasta 4 lugares decimales, dependiendo de la moneda. |
**currency** | **string** | El código de moneda en formato ISO-4217. |
**subject** | **string** | Motivo. |
**transaction_id** | **string** | Identificador propio de la transacción. Ej: número de factura u orden de compra. | [optional]
**custom** | **string** | Parámetro para enviar información personalizada de la transacción. Ej: documento XML con el detalle del carro de compra. | [optional]
**body** | **string** | Descripción del cobro. | [optional]
**bank_id** | **string** | Identificador del banco para usar en el pago. | [optional]
**return_url** | **string** | La dirección URL a donde enviar al cliente mientras el pago está siendo verificado. | [optional]
**cancel_url** | **string** | La dirección URL a donde enviar al cliente si decide no hacer hacer la transacción. | [optional]
**picture_url** | **string** | Una dirección URL de una foto de tu producto o servicio. | [optional]
**notify_url** | **string** | La dirección del web-service que utilizará khipu para notificar cuando el pago esté conciliado. | [optional]
**contract_url** | **string** | La dirección URL del archivo PDF con el contrato a firmar mediante este pago. El cobrador debe estar habilitado para este servicio y el campo &#x60;fixed_payer_personal_identifier&#x60; es obligatorio. | [optional]
**notify_api_version** | **string** | Versión de la API de notificaciones para recibir avisos por web-service. | [optional]
**expires_date** | **\DateTime** | Fecha máxima para ejecutar el pago (en formato ISO-8601). El cliente podrá realizar varios intentos de pago hasta dicha fecha. Cada intento tiene un plazo individual de 3 horas para su ejecución. | [optional]
**send_email** | **bool** | Si es &#x60;true&#x60;, se enviará una solicitud de cobro al correo especificado en &#x60;payer_email&#x60;. | [optional]
**payer_name** | **string** | Nombre del pagador. Es obligatorio cuando &#x60;send_email&#x60; es &#x60;true&#x60;. | [optional]
**payer_email** | **string** | Correo del pagador. Es obligatorio cuando &#x60;send_email&#x60; es &#x60;true&#x60;. | [optional]
**send_reminders** | **bool** | Si es &#x60;true&#x60;, se enviarán recordatorios de cobro. | [optional]
**responsible_user_email** | **string** | Correo electrónico del responsable de este cobro, debe corresponder a un usuario Khipu con permisos para cobrar usando esta cuenta de cobro. | [optional]
**fixed_payer_personal_identifier** | **string** | Identificador personal. Si se especifica, solo podrá ser pagado usando ese identificador. | [optional]
**integrator_fee** | **string** | Comisión para el integrador. Sólo es válido si la cuenta de cobro tiene una cuenta de integrador asociada. | [optional]
**collect_account_uuid** | **string** | Para cuentas de cobro con más cuenta propia. Permite elegir la cuenta donde debe ocurrir la transferencia. | [optional]
**confirm_timeout_date** | **\DateTime** | Fecha de rendición del cobro. Es también la fecha final para poder reembolsar el cobro. Formato ISO-8601. | [optional]
**mandatory_payment_method** | **string** | El cobro sólo se podrá pagar utilizando el medio de pago especificado. Los posibles valores para este campo se encuentran en el campo &#x60;id&#x60; de la respuesta del endpoint &#x60;/api/3.0/merchants/paymentMethods&#x60;. | [optional]
**psp_client_merchant_name** | **string** | Nombre del comercio final para quien un proveedor de servicios de pago procesa un pago. Requerido para transacciones de clientes PSP; no aplicable para otros. En caso de tratarse de un PSP de PSP, estos deben ingresarse separados por &#39;-&gt;&#39;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
