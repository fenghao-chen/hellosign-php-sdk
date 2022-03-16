<?php
/**
 * EmbeddedApi
 * PHP version 7.3
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */

/**
 * HelloSign API
 *
 * HelloSign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HelloSignSDK\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise;
use GuzzleHttp\Psr7;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use HelloSignSDK\ApiException;
use HelloSignSDK\Configuration;
use HelloSignSDK\HeaderSelector;
use HelloSignSDK\Model;
use HelloSignSDK\ObjectSerializer;
use InvalidArgumentException;
use RuntimeException;

/**
 * EmbeddedApi Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */
class EmbeddedApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation embeddedEditUrl
     *
     * Get Embedded Template Edit URL
     *
     * @param string $template_id The id of the template to edit. (required)
     * @param Model\EmbeddedEditUrlRequest $embedded_edit_url_request embedded_edit_url_request (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmbeddedEditUrlResponse|\HelloSignSDK\Model\ErrorResponse
     */
    public function embeddedEditUrl(string $template_id, Model\EmbeddedEditUrlRequest $embedded_edit_url_request)
    {
        list($response) = $this->embeddedEditUrlWithHttpInfo($template_id, $embedded_edit_url_request);

        return $response;
    }

    /**
     * Operation embeddedEditUrlWithHttpInfo
     *
     * Get Embedded Template Edit URL
     *
     * @param string $template_id The id of the template to edit. (required)
     * @param Model\EmbeddedEditUrlRequest $embedded_edit_url_request (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of Model\EmbeddedEditUrlResponse|\HelloSignSDK\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function embeddedEditUrlWithHttpInfo(string $template_id, Model\EmbeddedEditUrlRequest $embedded_edit_url_request)
    {
        $request = $this->embeddedEditUrlRequest($template_id, $embedded_edit_url_request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\HelloSignSDK\Model\EmbeddedEditUrlResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HelloSignSDK\Model\EmbeddedEditUrlResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 400:
                    if ('\HelloSignSDK\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HelloSignSDK\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\HelloSignSDK\Model\EmbeddedEditUrlResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HelloSignSDK\Model\EmbeddedEditUrlResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HelloSignSDK\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation embeddedEditUrlAsync
     *
     * Get Embedded Template Edit URL
     *
     * @param string $template_id The id of the template to edit. (required)
     * @param Model\EmbeddedEditUrlRequest $embedded_edit_url_request (required)
     *
     * @throws InvalidArgumentException
     * @return Promise\PromiseInterface
     */
    public function embeddedEditUrlAsync(string $template_id, Model\EmbeddedEditUrlRequest $embedded_edit_url_request)
    {
        return $this->embeddedEditUrlAsyncWithHttpInfo($template_id, $embedded_edit_url_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation embeddedEditUrlAsyncWithHttpInfo
     *
     * Get Embedded Template Edit URL
     *
     * @param string $template_id The id of the template to edit. (required)
     * @param Model\EmbeddedEditUrlRequest $embedded_edit_url_request (required)
     *
     * @throws InvalidArgumentException
     * @return Promise\PromiseInterface
     */
    public function embeddedEditUrlAsyncWithHttpInfo(string $template_id, Model\EmbeddedEditUrlRequest $embedded_edit_url_request)
    {
        $returnType = '\HelloSignSDK\Model\EmbeddedEditUrlResponse';
        $request = $this->embeddedEditUrlRequest($template_id, $embedded_edit_url_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'embeddedEditUrl'
     *
     * @param string $template_id The id of the template to edit. (required)
     * @param Model\EmbeddedEditUrlRequest $embedded_edit_url_request (required)
     *
     * @throws InvalidArgumentException
     * @return Psr7\Request
     */
    public function embeddedEditUrlRequest(string $template_id, Model\EmbeddedEditUrlRequest $embedded_edit_url_request)
    {
        // verify the required parameter 'template_id' is set
        if ($template_id === null || (is_array($template_id) && count($template_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $template_id when calling embeddedEditUrl'
            );
        }
        // verify the required parameter 'embedded_edit_url_request' is set
        if ($embedded_edit_url_request === null || (is_array($embedded_edit_url_request) && count($embedded_edit_url_request) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $embedded_edit_url_request when calling embeddedEditUrl'
            );
        }

        $resourcePath = '/embedded/edit_url/{template_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $formParams = ObjectSerializer::getFormParams(
            $embedded_edit_url_request
        );

        $multipart = !empty($formParams);

        // path params
        if ($template_id !== null) {
            $resourcePath = str_replace(
                '{' . 'template_id' . '}',
                ObjectSerializer::toPathValue($template_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (count($formParams) === 0) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($embedded_edit_url_request));
            } else {
                $httpBody = $embedded_edit_url_request;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                if (!empty($body)) {
                    $multipartContents[] = [
                        'name' => 'body',
                        'contents' => $body,
                        'headers' => ['Content-Type' => 'application/json'],
                    ];
                }
                $httpBody = new Psr7\MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ':' . $this->config->getPassword());
        }
        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Psr7\Query::build($queryParams);

        return new Psr7\Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation embeddedSignUrl
     *
     * Get Embedded Sign URL
     *
     * @param string $signature_id The id of the signature to get a signature url for. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\EmbeddedSignUrlResponse|\HelloSignSDK\Model\ErrorResponse
     */
    public function embeddedSignUrl(string $signature_id)
    {
        list($response) = $this->embeddedSignUrlWithHttpInfo($signature_id);

        return $response;
    }

    /**
     * Operation embeddedSignUrlWithHttpInfo
     *
     * Get Embedded Sign URL
     *
     * @param string $signature_id The id of the signature to get a signature url for. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of Model\EmbeddedSignUrlResponse|\HelloSignSDK\Model\ErrorResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function embeddedSignUrlWithHttpInfo(string $signature_id)
    {
        $request = $this->embeddedSignUrlRequest($signature_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch ($statusCode) {
                case 200:
                    if ('\HelloSignSDK\Model\EmbeddedSignUrlResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HelloSignSDK\Model\EmbeddedSignUrlResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                case 400:
                    if ('\HelloSignSDK\Model\ErrorResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\HelloSignSDK\Model\ErrorResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\HelloSignSDK\Model\EmbeddedSignUrlResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HelloSignSDK\Model\EmbeddedSignUrlResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\HelloSignSDK\Model\ErrorResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation embeddedSignUrlAsync
     *
     * Get Embedded Sign URL
     *
     * @param string $signature_id The id of the signature to get a signature url for. (required)
     *
     * @throws InvalidArgumentException
     * @return Promise\PromiseInterface
     */
    public function embeddedSignUrlAsync(string $signature_id)
    {
        return $this->embeddedSignUrlAsyncWithHttpInfo($signature_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation embeddedSignUrlAsyncWithHttpInfo
     *
     * Get Embedded Sign URL
     *
     * @param string $signature_id The id of the signature to get a signature url for. (required)
     *
     * @throws InvalidArgumentException
     * @return Promise\PromiseInterface
     */
    public function embeddedSignUrlAsyncWithHttpInfo(string $signature_id)
    {
        $returnType = '\HelloSignSDK\Model\EmbeddedSignUrlResponse';
        $request = $this->embeddedSignUrlRequest($signature_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'embeddedSignUrl'
     *
     * @param string $signature_id The id of the signature to get a signature url for. (required)
     *
     * @throws InvalidArgumentException
     * @return Psr7\Request
     */
    public function embeddedSignUrlRequest(string $signature_id)
    {
        // verify the required parameter 'signature_id' is set
        if ($signature_id === null || (is_array($signature_id) && count($signature_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $signature_id when calling embeddedSignUrl'
            );
        }

        $resourcePath = '/embedded/sign_url/{signature_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $formParams = [];
        $multipart = false;

        // path params
        if ($signature_id !== null) {
            $resourcePath = str_replace(
                '{' . 'signature_id' . '}',
                ObjectSerializer::toPathValue($signature_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                if (!empty($body)) {
                    $multipartContents[] = [
                        'name' => 'body',
                        'contents' => $body,
                        'headers' => ['Content-Type' => 'application/json'],
                    ];
                }
                $httpBody = new Psr7\MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ':' . $this->config->getPassword());
        }
        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Psr7\Query::build($queryParams);

        return new Psr7\Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = $this->config->getOptions();
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
