<?php

namespace Strate\Monolog\Handler;

use Monolog\Logger;
use Monolog\Test\TestCase;

class DiscordHandlerTest extends TestCase
{

    private DiscordHandler $handler;

    protected function setUp(): void
    {
        $this->handler = new DiscordHandler('https://discord.com/api/webhooks/{webhook.id}/{webhook.token}', Logger::WARNING);
    }

    public function testGetMessage()
    {
        $message = 'Short dummy message';
        $this->assertMessage($message, $message);
    }

    public function testGetMessageTruncated()
    {
        $message = str_pad('', 2001);
        $truncated = substr($message, 0, 2000 - 32) . ' (removed 33 characters)';
        $this->assertMessage($message, $truncated);
    }

    private function assertMessage(string $actual, string $expected)
    {
        $record = $this->getRecord(Logger::WARNING, $actual);

        $this->assertEquals(
            ['content' => $expected],
            $this->handler->getMessage($record),
        );
    }
}
