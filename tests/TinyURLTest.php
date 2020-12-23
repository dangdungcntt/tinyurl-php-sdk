<?php

namespace Nddcoder\TinyURL\Tests;

use Nddcoder\TinyURL\TinyURL;

class TinyURLTest extends TestCase
{
    /** @test */
    public function should_create_tiny_url()
    {
        $shortedUrl = TinyURL::create('https://google.com');
        $this->assertEquals('https://tinyurl.com/mbq3m', $shortedUrl);
    }

    /** @test */
    public function should_return_null_when_input_invalid_url()
    {
        $shortedUrl = TinyURL::create('google');
        $this->assertNull($shortedUrl);
    }

    /** @test */
    public function should_preview_tiny_url()
    {
        $targetUrl = TinyURL::preview('https://tinyurl.com/mbq3m');
        $this->assertEquals('https://google.com', $targetUrl);
    }

    /** @test */
    public function should_return_null_when_preview_not_exist_tiny_url()
    {
        $targetUrl = TinyURL::preview('https://tinyurl.com/abcdef%');
        $this->assertNull($targetUrl);
    }
}
