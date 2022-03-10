<?php

require_once __DIR__ . "/vendor/autoload.php";

$config = HelloSignSDK\Configuration::getDefaultConfiguration();

// Configure HTTP basic authorization: api_key
$config->setUsername("YOUR_API_KEY");

// or, configure Bearer (JWT) authorization: oauth2
// $config->setAccessToken("YOUR_ACCESS_TOKEN");

$api = new HelloSignSDK\Api\TeamApi(
    new GuzzleHttp\Client(),
    $config
);

$data = new HelloSignSDK\Model\TeamRemoveMemberRequest();
$data->setEmailAddress("teammate@hellosign.com")
    ->setNewOwnerEmailAddress("new_teammate@hellosign.com");

try {
    $result = $api->teamRemoveMember($data);
    print_r($result);
} catch (Exception $e) {
    echo "Exception when calling HelloSign API: "
        . $e->getMessage() . PHP_EOL;
}