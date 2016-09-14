<?php
use Casperlaitw\LaravelFbMessenger\Contracts\Bot;
use Casperlaitw\LaravelFbMessenger\Messages\Audio;
use Casperlaitw\LaravelFbMessenger\Messages\Greeting;
use Casperlaitw\LaravelFbMessenger\Messages\Text;
use Mockery as m;

/**
 * User: casperlai
 * Date: 2016/9/10
 * Time: 下午11:50
 */
class BotTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->bot = new Bot(getenv('MESSENGER_APP_TOKEN'));
    }

    public function test_parent_send()
    {
        $message = new Text(str_random(), str_random());
        $this->bot->send($message);
    }

    public function test_send_thread_setting()
    {
        $message = m::mock(Greeting::class);
        $message
            ->shouldReceive('toData')
            ->andReturn([]);
        $this->bot->send($message);
    }

    public function test_send_array_message()
    {
        $message = [];
        $this->bot->send($message);
    }
}