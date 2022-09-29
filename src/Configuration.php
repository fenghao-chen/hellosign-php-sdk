<?php
/**
 * Configuration
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

namespace HelloSignSDK;

use InvalidArgumentException;

/**
 * Configuration Class Doc Comment
 * PHP version 7.3
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */
class Configuration
{
    /**
     * @var Configuration
     */
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s)
     *
     * @var string[]
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer)
     *
     * @var string[]
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth/Bearer authentication
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * Username for HTTP basic authentication
     *
     * @var string
     */
    protected $username = '';

    /**
     * Password for HTTP basic authentication
     *
     * @var string
     */
    protected $password = '';

    /**
     * The host
     *
     * @var string
     */
    protected $host = 'https://api.hellosign.com/v3';

    /**
     * User agent of the HTTP request, set to "OpenAPI-Generator/{version}/PHP" by default
     *
     * @var string
     */
    protected $userAgent = 'OpenAPI-Generator/v6.0.0-beta28/PHP';

    /**
     * Debug switch (default set to false)
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default)
     *
     * @var string
     */
    protected $tempFolderPath;

    /**
     * Holds any extra request options you want to send
     *
     * @var array
     */
    protected $options = [];

    /**
     * Allows instantiating files when using ModelInterface::fromArray()
     *
     * @var bool
     */
    protected $instantiateFiles = false;

    /**
     * Define the base location to look for file uploads
     *
     * @var string|null
     */
    protected $rootFilePath = null;

    /** @var ?callable */
    protected $payloadHook = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key
     *
     * @param string $key API key or token
     *
     * @return self
     */
    public function setApiKey(string $key)
    {
        $this->username = $key;

        return $this;
    }

    /**
     * Gets API key
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string API key or token
     */
    public function getApiKey(string $apiKeyIdentifier)
    {
        return $this->username;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer)
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix API key prefix, e.g. Bearer
     *
     * @return self
     */
    public function setApiKeyPrefix(string $apiKeyIdentifier, string $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;

        return $this;
    }

    /**
     * Gets API key prefix
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string|null
     */
    public function getApiKeyPrefix(string $apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth
     *
     * @param string $accessToken Token for OAuth
     *
     * @return self
     */
    public function setAccessToken(string $accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Gets the access token for OAuth
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the API key
     *
     * @param string $key API key or token
     */
    public function setUsername(string $key): self
    {
        $this->username = $key;

        return $this;
    }

    /**
     * Gets the username for HTTP basic authentication
     *
     * @return string Username for HTTP basic authentication
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Gets the password for HTTP basic authentication
     *
     * @return string Password for HTTP basic authentication
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the host
     *
     * @param string $host Host
     *
     * @return self
     */
    public function setHost(string $host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Gets the host
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws InvalidArgumentException
     * @return self
     */
    public function setUserAgent(string $userAgent)
    {
        if (!is_string($userAgent)) {
            throw new InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Gets the user agent of the api client
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag
     *
     * @param bool $debug Debug flag
     *
     * @return self
     */
    public function setDebug(bool $debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Gets the debug flag
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file
     *
     * @param string $debugFile Debug file
     *
     * @return self
     */
    public function setDebugFile(string $debugFile)
    {
        $this->debugFile = $debugFile;

        return $this;
    }

    /**
     * Gets the debug file
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return self
     */
    public function setTempFolderPath(string $tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;

        return $this;
    }

    /**
     * Gets the temp folder path
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Sets instantiateFiles flag
     *
     * @return $this
     */
    public function setInstantiateFiles(bool $value)
    {
        $this->instantiateFiles = $value;

        return $this;
    }

    /**
     * Allows instantiateFiles flag
     */
    public function getInstantiateFiles(): bool
    {
        return $this->instantiateFiles;
    }

    /**
     * Sets the root file upload path
     *
     * @return $this
     */
    public function setRootFilePath(?string $path)
    {
        $this->rootFilePath = $path;

        return $this;
    }

    /**
     * Gets the root file upload path
     */
    public function getRootFilePath(): ?string
    {
        return $this->rootFilePath;
    }

    /**
     * Gets the default configuration instance
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (self::$defaultConfiguration === null) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the default configuration instance
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report = 'PHP SDK (HelloSignSDK) Debug Report:' . PHP_EOL;
        $report .= '    OS: ' . php_uname() . PHP_EOL;
        $report .= '    PHP Version: ' . PHP_VERSION . PHP_EOL;
        $report .= '    The version of the OpenAPI document: 3.0.0' . PHP_EOL;
        $report .= '    SDK Package Version: v6.0.0-beta28' . PHP_EOL;
        $report .= '    Temp Folder Path: ' . self::getDefaultConfiguration()->getTempFolderPath() . PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set)
     *
     * @param string $apiKeyIdentifier name of apikey
     *
     * @return string|null API key with the prefix
     */
    public function getApiKeyWithPrefix(string $apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if ($apiKey === null) {
            return null;
        }

        if ($prefix === null) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix . ' ' . $apiKey;
        }

        return $keyWithPrefix;
    }

    /**
     * Returns an array of host settings
     *
     * @return array an array of host settings
     */
    public function getHostSettings()
    {
        return [
            [
                'url' => 'https://api.hellosign.com/v3',
                'description' => 'No description provided',
            ],
        ];
    }

    /**
     * Returns URL based on the index and variables
     *
     * @param int $index index of the host settings
     * @param array|null $variables hash of variable and the corresponding value (optional)
     * @return string URL based on host settings
     */
    public function getHostFromSettings(int $index, ?array $variables = null)
    {
        if (null === $variables) {
            $variables = [];
        }

        $hosts = $this->getHostSettings();

        // check array index out of bound
        if ($index < 0 || $index >= sizeof($hosts)) {
            throw new InvalidArgumentException("Invalid index $index when selecting the host. Must be less than " . sizeof($hosts));
        }

        $host = $hosts[$index];
        $url = $host['url'];

        // go through variable and assign a value
        foreach ($host['variables'] ?? [] as $name => $variable) {
            if (array_key_exists($name, $variables)) { // check to see if it's in the variables provided by the user
                if (in_array($variables[$name], $variable['enum_values'], true)) { // check to see if the value is in the enum
                    $url = str_replace('{' . $name . '}', $variables[$name], $url);
                } else {
                    throw new InvalidArgumentException("The variable `$name` in the host URL has invalid value " . $variables[$name] . '. Must be ' . join(',', $variable['enum_values']) . '.');
                }
            } else {
                // use default value
                $url = str_replace('{' . $name . '}', $variable['default_value'], $url);
            }
        }

        return $url;
    }

    /**
     * Set extra request options
     */
    public function setOptions(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get extra request options
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    public function setPayloadHook(callable $hook): self
    {
        $this->payloadHook = $hook;

        return $this;
    }

    public function getPayloadHook(): ?callable
    {
        return $this->payloadHook;
    }
}
