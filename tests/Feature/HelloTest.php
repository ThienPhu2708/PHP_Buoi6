<?php

namespace Tests\Feature;

use Tests\TestCase;

class HelloTest extends TestCase
{
    public function test_hello_route_returns_ok_and_contains_laravel_12(): void
    {
        $response = $this->get('/hello');

        $response->assertStatus(200);
        $response->assertSee('Laravel 12');
    }
}
