<?php

namespace HelloSignSDK\Test\Model;

use HelloSignSDK\EventCallbackHelper;
use HelloSignSDK\Model\EventCallbackApiAppRequest;
use HelloSignSDK\Test\HelloTestCase;
use HelloSignSDK\Test\TestUtils;

class EventCallbackHelperTest extends HelloTestCase
{
    protected const APIKEY = '324e3b0840f065eb51f3fd63231d0d33daa35d4ed10d27718839e81737065782';

    /**
     * @dataProvider providerIsValid
     */
    public function testIsValid(
        string $apiKey,
        array $data,
        bool $passes
    ) {
        $obj = EventCallbackApiAppRequest::fromArray(['json' => $data]);

        $isValid = EventCallbackHelper::isValid(
            $apiKey,
            $obj->getJson()->getEvent(),
        );

        if ($passes) {
            $this->assertTrue($isValid);
        } else {
            $this->assertFalse($isValid);
        }
    }

    public function providerIsValid(): iterable
    {
        $fixtures = TestUtils::getFixtureData('EventCallbackHelper');
        foreach ($fixtures as $data) {
            yield [
                'apiKey' => self::APIKEY,
                'data' => $data,
                'passes' => true,
            ];

            yield [
                'apiKey' => strrev(self::APIKEY),
                'data' => $data,
                'passes' => false,
            ];
        }
    }
}
