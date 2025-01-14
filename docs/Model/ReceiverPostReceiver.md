# # ReceiverPostReceiver

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**admin_first_name** | **string** | Nombre de pila del administrador de la cuenta de cobro a crear. |
**admin_last_name** | **string** | Apellido del administrador de la cuenta de cobro a crear. |
**admin_email** | **string** | Correo electrónico del administrador de la cuenta de cobro a crear. |
**country_code** | **string** | Código alfanumérico de dos caracteres ISO 3166-1 del país de la cuenta de cobro a crear. |
**business_identifier** | **string** | Identificador tributario del cobrador asociado a la cuenta de cobro a crear. |
**business_category** | **string** | Categoría tributaria o rubro tributario del cobrador asociado a la cuenta de cobro a crear. |
**business_name** | **string** | Nombre tributario del cobrador asociado a la cuenta de cobro a crear. |
**business_phone** | **string** | Teléfono del cobrador asociado a la cuenta de cobro a crear. |
**business_address_line_1** | **string** | Dirección del cobrador de la cuenta de cobro a crear. |
**business_address_line_2** | **string** | Segunda línea de la dirección del cobrador de la cuenta de cobro a crear. |
**business_address_line_3** | **string** | Tercera línea de la dirección del cobrador de la cuenta de cobro a crear. |
**contact_full_name** | **string** | Nombre del contacto del cobrador. |
**contact_job_title** | **string** | Cargo del contacto del cobrador. |
**contact_email** | **string** | Correo electrónico del contacto del cobrador. |
**contact_phone** | **string** | Teléfono del contacto del cobrador. |
**bank_account_bank_id** | **string** | Identificador del banco. | [optional]
**bank_account_type** | **string** | Tipo de cuenta. Es obligatorio si se utiliza el modelo alternativo de integrador de confianza. | [optional]
**bank_account_identifier** | **string** | Identificador personal del dueño de la cuenta de banco. | [optional]
**bank_account_name** | **string** | Nombre de la cuenta de banco. | [optional]
**bank_account_number** | **string** | Número de la cuenta en el banco. | [optional]
**notify_url** | **string** | URL por omisión para el webservice donde se notificará el pago. | [optional]
**rendition_url** | **string** | URL para el webservice donde se notificará la rendición. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
