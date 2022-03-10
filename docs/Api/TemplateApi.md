# HelloSignSDK\TemplateApi

All URIs are relative to https://api.hellosign.com/v3.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**templateAddUser()**](TemplateApi.md#templateAddUser) | **POST** /template/add_user/{template_id} | Gives the specified Account access to the specified Template. |
| [**templateCreateEmbeddedDraft()**](TemplateApi.md#templateCreateEmbeddedDraft) | **POST** /template/create_embedded_draft | Creates an embedded template draft for further editing. |
| [**templateDelete()**](TemplateApi.md#templateDelete) | **POST** /template/delete/{template_id} | Deletes the specified template. |
| [**templateFiles()**](TemplateApi.md#templateFiles) | **GET** /template/files/{template_id} | Obtain a copy of a template&#39;s original files. |
| [**templateGet()**](TemplateApi.md#templateGet) | **GET** /template/{template_id} | Gets a Template which includes a list of Accounts that can access it. |
| [**templateList()**](TemplateApi.md#templateList) | **GET** /template/list | Lists your Templates. |
| [**templateRemoveUser()**](TemplateApi.md#templateRemoveUser) | **POST** /template/remove_user/{template_id} | Removes the specified Account&#39;s access to the specified Template. |
| [**templateUpdateFiles()**](TemplateApi.md#templateUpdateFiles) | **POST** /template/update_files/{template_id} | Overlays a new file with the overlay of an existing template. |


## `templateAddUser()`

```php
templateAddUser($template_id, $template_add_user_request): \HelloSignSDK\Model\TemplateGetResponse
```

Gives the specified Account access to the specified Template.

Gives the specified Account access to the specified Template. The specified Account must be a part of your Team.

### Example

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TemplateApi(
    new GuzzleHttp\Client(),
    $config
);

$data = new HelloSignSDK\Model\TemplateAddUserRequest();
$data->setEmailAddress("george@hellosign.com");

$templateId = "f57db65d3f933b5316d398057a36176831451a35";

try {
    $result = $api->templateAddUser($templateId, $data);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}

```

### Parameters

|Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The id of the Template to give the Account access to. | |
| **template_add_user_request** | [**\HelloSignSDK\Model\TemplateAddUserRequest**](../Model/TemplateAddUserRequest.md)|  | |

### Return type

[**\HelloSignSDK\Model\TemplateGetResponse**](../Model/TemplateGetResponse.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateCreateEmbeddedDraft()`

```php
templateCreateEmbeddedDraft($template_create_embedded_draft_request): \HelloSignSDK\Model\TemplateCreateEmbeddedDraftResponse
```

Creates an embedded template draft for further editing.

The first step in an embedded template workflow. Creates a draft template that can then be further set up in the template 'edit' stage.

### Example

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TemplateApi(
    new GuzzleHttp\Client(),
    $config
);

$role1 = new HelloSignSDK\Model\SubTemplateRole();
$role1->setName("Client")
    ->setOrder(0);

$role2 = new HelloSignSDK\Model\SubTemplateRole();
$role2->setName("Witness")
    ->setOrder(1);

$mergeField1 = new HelloSignSDK\Model\SubMergeField();
$mergeField1->setName("Full Name")
    ->setType(HelloSignSDK\Model\SubMergeField::TYPE_TEXT);

$mergeField2 = new HelloSignSDK\Model\SubMergeField();
$mergeField2->setName("Is Registered?")
    ->setType(HelloSignSDK\Model\SubMergeField::TYPE_CHECKBOX);

$fieldOptions = new HelloSignSDK\Model\SubFieldOptions();
$fieldOptions->setDateFormat(HelloSignSDK\Model\SubFieldOptions::DATE_FORMAT_DD_MM_YYYY);

$data = new HelloSignSDK\Model\TemplateCreateEmbeddedDraftRequest();
$data->setClientId("37dee8d8440c66d54cfa05d92c160882")
    ->setFileUrl(["https://app.hellosign.com/docs/example_signature_request.pdf"])
    ->setTitle("Test Template")
    ->setSubject("Please sign this document")
    ->setMessage("For your approval")
    ->setSignerRoles([$role1, $role2])
    ->setCcRoles(["Manager"])
    ->setMergeFields([$mergeField1, $mergeField2])
    ->setFieldOptions($fieldOptions)
    ->setTestMode(true);

try {
    $result = $api->templateCreateEmbeddedDraft($data);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}

```

### Parameters

|Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_create_embedded_draft_request** | [**\HelloSignSDK\Model\TemplateCreateEmbeddedDraftRequest**](../Model/TemplateCreateEmbeddedDraftRequest.md)|  | |

### Return type

[**\HelloSignSDK\Model\TemplateCreateEmbeddedDraftResponse**](../Model/TemplateCreateEmbeddedDraftResponse.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateDelete()`

```php
templateDelete($template_id)
```

Deletes the specified template.

Completely deletes the template specified from the account.

### Example

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TemplateApi(
    new GuzzleHttp\Client(),
    $config
);

$templateId = "5de8179668f2033afac48da1868d0093bf133266";

try {
    $api->templateDelete($templateId);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}

```

### Parameters

|Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The id of the Template to delete. | |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateFiles()`

```php
templateFiles($template_id, $file_type, $get_url, $get_data_uri): \HelloSignSDK\Model\FileResponse
```

Obtain a copy of a template's original files.

Obtain a copy of the current documents specified by the `template_id` parameter.  Returns a PDF or ZIP file, or if `get_url` is set, a JSON object with a url to the file (PDFs only). If `get_data_uri` is set, a JSON object with a `data_uri` representing the base64 encoded file (PDFs only) is returned.  If the files are currently being prepared, a status code of `409` will be returned instead.

### Example

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TemplateApi(
    new GuzzleHttp\Client(),
    $config
);

$templateId = "5de8179668f2033afac48da1868d0093bf133266";

try {
    $result = $api->templateFiles($templateId);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}

```

### Parameters

|Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The id of the Template to delete. | |
| **file_type** | **string**| Set to `pdf` for a single merged document or `zip` for a collection of individual documents. | [optional] |
| **get_url** | **bool**| If `true`, the response will contain a url link to the file instead. Links are only available for PDFs and have a TTL of 3 days. | [optional] [default to false] |
| **get_data_uri** | **bool**| If `true`, the response will contain the file as base64 encoded string. Base64 encoding is only available for PDFs. | [optional] [default to false] |

### Return type

[**\HelloSignSDK\Model\FileResponse**](../Model/FileResponse.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateGet()`

```php
templateGet($template_id): \HelloSignSDK\Model\TemplateGetResponse
```

Gets a Template which includes a list of Accounts that can access it.

Returns the Template specified by the id parameter.

### Example

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TemplateApi(
    new GuzzleHttp\Client(),
    $config
);

$templateId = "f57db65d3f933b5316d398057a36176831451a35";

try {
    $result = $api->templateGet($templateId);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}

```

### Parameters

|Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The id of the Template to retrieve. | |

### Return type

[**\HelloSignSDK\Model\TemplateGetResponse**](../Model/TemplateGetResponse.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateList()`

```php
templateList($account_id, $page, $page_size, $query): \HelloSignSDK\Model\TemplateListResponse
```

Lists your Templates.

Returns a list of the Templates that are accessible by you.  Take a look at our [search guide](https://app.hellosign.com/api/reference#Search) to learn more about querying templates.

### Example

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TemplateApi(
    new GuzzleHttp\Client(),
    $config
);

$accountId = "f57db65d3f933b5316d398057a36176831451a35";

try {
    $result = $api->templateList($accountId);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}

```

### Parameters

|Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Which account to return Templates for. Must be a team member. Use `all` to indicate all team members. Defaults to your account. | [optional] |
| **page** | **int**| Which page number of the Template List to return. Defaults to `1`. | [optional] [default to 1] |
| **page_size** | **int**| `Number of objects to be returned per page. Must be between `1` and `100`. Default is `20`. | [optional] [default to 20] |
| **query** | **string**| String that includes search terms and/or fields to be used to filter the Template objects. | [optional] |

### Return type

[**\HelloSignSDK\Model\TemplateListResponse**](../Model/TemplateListResponse.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateRemoveUser()`

```php
templateRemoveUser($template_id, $template_remove_user_request): \HelloSignSDK\Model\TemplateGetResponse
```

Removes the specified Account's access to the specified Template.

Removes the specified Account's access to the specified Template.

### Example

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TemplateApi(
    new GuzzleHttp\Client(),
    $config
);

$data = new HelloSignSDK\Model\TemplateRemoveUserRequest();
$data->setEmailAddress("george@hellosign.com");

$templateId = "21f920ec2b7f4b6bb64d3ed79f26303843046536";

try {
    $result = $api->templateRemoveUser($templateId, $data);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}

```

### Parameters

|Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The id of the Template to remove the Account&#39;s access to. | |
| **template_remove_user_request** | [**\HelloSignSDK\Model\TemplateRemoveUserRequest**](../Model/TemplateRemoveUserRequest.md)|  | |

### Return type

[**\HelloSignSDK\Model\TemplateGetResponse**](../Model/TemplateGetResponse.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateUpdateFiles()`

```php
templateUpdateFiles($template_id, $template_update_files_request): \HelloSignSDK\Model\TemplateUpdateFilesResponse
```

Overlays a new file with the overlay of an existing template.

Overlays a new file with the overlay of an existing template. The new file(s) must:  1. have the same or higher page count 2. the same orientation as the file(s) being replaced.  This will not overwrite or in any way affect the existing template. Both the existing template and new template will be available for use after executing this endpoint. Also note that this will decrement your template quota.  Overlaying new files is asynchronous and a successful call to this endpoint will return an empty 200 OK response if the request passes initial validation checks.  It is recommended that a callback be implemented to listen for the callback event. A `template_created` event will be sent when the files are updated or a `template_error` event will be sent if there was a problem while updating the files. If a callback handler has been configured and the event has not been received within 60 minutes of making the call, check the status of the request in the API dashboard and retry the request if necessary.  If the page orientation or page count is different from the original template document, we will notify you with a `template_error` [callback event](https://app.hellosign.com/api/eventsAndCallbacksWalkthrough).

### Example

```php
<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TemplateApi(
    new GuzzleHttp\Client(),
    $config
);

$data = new HelloSignSDK\Model\TemplateUpdateFilesRequest();
$data->setFileUrl(["https://app.hellosign.com/docs/example_signature_request.pdf"]);

$templateId = "5de8179668f2033afac48da1868d0093bf133266";

try {
    $result = $api->templateUpdateFiles($templateId, $data);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}

```

### Parameters

|Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| The ID of the template whose files to update. | |
| **template_update_files_request** | [**\HelloSignSDK\Model\TemplateUpdateFilesRequest**](../Model/TemplateUpdateFilesRequest.md)|  | |

### Return type

[**\HelloSignSDK\Model\TemplateUpdateFilesResponse**](../Model/TemplateUpdateFilesResponse.md)

### Authorization

[api_key](../../README.md#api_key), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)