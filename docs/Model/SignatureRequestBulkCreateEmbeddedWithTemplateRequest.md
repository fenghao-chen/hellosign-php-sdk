# # SignatureRequestBulkCreateEmbeddedWithTemplateRequest

Calls SignatureRequestBulkSendWithTemplate in controller

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
| `template_ids`<sup>*_required_</sup> | ```string[]``` |  Use `template_ids` to create a SignatureRequest from one or more templates, in the order in which the template will be used.  |  |
| `client_id`<sup>*_required_</sup> | ```string``` |  Client id of the app you&#39;re using to create this embedded signature request. Visit our [embedded page](https://app.hellosign.com/api/embeddedSigningWalkthrough) to learn more about this parameter.  |  |
| `signer_file` | ```\SplFileObject``` |  `signer_file` is a CSV file defining values and options for signer fields. Required unless a `signer_list` is used, you may not use both. The CSV can have the following columns:<br><br>- `name`: the name of the signer filling the role of RoleName - `email_address`: email address of the signer filling the role of RoleName - `pin`: the 4- to 12-character access code that will secure this signer&#39;s signature page (optional) - `sms_phone_number`: An E.164 formatted phone number that will receive a code via SMS to access this signer&#39;s signature page. (optional)<br><br>    **Note**: Not available in test mode and requires a Platinum plan or higher. - `*_field`: any column with a _field&quot; suffix will be treated as a custom field (optional)<br><br>    You may only specify field values here, any other options should be set in the custom_fields request parameter.<br><br>Example CSV:<br><br>``` name, email_address, pin, company_field George, george@example.com, d79a3td, ABC Corp Mary, mary@example.com, gd9as5b, 123 LLC ```  |  |
| `signer_list` | [```\HelloSignSDK\Model\SubBulkSignerList[]```](SubBulkSignerList.md) |  `signer_list` is an array defining values and options for signer fields. Required unless a `signer_file` is used, you may not use both.  |  |
| `allow_decline` | ```bool``` |  Allows signers to decline to sign a document if `true`. Defaults to `false`.  |  [default to false] |
| `ccs` | [```\HelloSignSDK\Model\SubCC[]```](SubCC.md) |  Add CC email recipients. Required when a CC role exists for the Template.  |  |
| `custom_fields` | [```\HelloSignSDK\Model\SubCustomField[]```](SubCustomField.md) |  An array defining values and options for custom fields. Required when defining pre-set values in `form_fields_per_document` or [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro).  |  |
| `message` | ```string``` |  The custom message in the email that will be sent to the signers.  |  |
| `metadata` | ```array<string,mixed>``` |  Key-value data that should be attached to the signature request. This metadata is included in all API responses and events involving the signature request. For example, use the metadata field to store a signer&#39;s order number for look up when receiving events for the signature request.<br><br>Each request can include up to 10 metadata keys, with key names up to 40 characters long and values up to 1000 characters long.  |  |
| `signing_redirect_url` | ```string``` |  The URL you want signers redirected to after they successfully sign.  |  |
| `subject` | ```string``` |  The subject in the email that will be sent to the signers.  |  |
| `test_mode` | ```bool``` |  Whether this is a test, the signature request will not be legally binding if set to `true`. Defaults to `false`.  |  [default to false] |
| `title` | ```string``` |  The title you want to assign to the SignatureRequest.  |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)