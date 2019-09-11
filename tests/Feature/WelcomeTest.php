<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class WelcomeTest extends TestCase
{
    /**
     * @return void
     */
    public function testWillReturnHtml(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertViewIs('welcome');
    }

    /**
     * @return void
     */
    public function testWillReturnJson(): void
    {
        $response = $this->get('/', [
            'Accept' => 'application/json',
        ]);

        $response->assertStatus(200);

        $this->assertJson($response->baseResponse->getContent());
    }
}
