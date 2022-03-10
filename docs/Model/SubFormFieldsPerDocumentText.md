# # SubFormFieldsPerDocumentText

This class extends `SubFormFieldsPerDocumentBase`.

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
| `type`<sup>*_required_</sup> | ```string``` |  A text input field. Use the `SubFormFieldsPerDocumentText` class.  |  [default to 'text'] |
| `placeholder` | ```string``` |  Placeholder value for text field.  |  |
| `auto_fill_type` | ```string``` |  Auto fill type for populating fields automatically. Check out the list of [auto fill types](https://app.hellosign.com/api/reference#AutoFillTypes) to learn more about the possible values.  |  |
| `masked` | ```bool``` |  Masks entered data. For more information see [Masking sensitive information](https://app.hellosign.com/api/reference#:~:text&#x3D;Masking%20sensitive%20information). `true` for masking the data in a text field, otherwise `false`.  |  |
| `validation_type` | ```string``` |  Each text field may contain a `validation_type` parameter. Check out the list of [validation types](https://faq.hellosign.com/hc/en-us/articles/217115577) to learn more about the possible values.<br><br>**NOTE**: When using `custom_regex` you are required to pass a second parameter `validation_custom_regex` and you can optionally provide `validation_custom_regex_format_label` for the error message the user will see in case of an invalid value.  |  |
| `validation_custom_regex` | ```string``` |    |  |
| `validation_custom_regex_format_label` | ```string``` |    |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)