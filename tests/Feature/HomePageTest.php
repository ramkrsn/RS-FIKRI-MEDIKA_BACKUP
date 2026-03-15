<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function home_page_is_accessible()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Feedback');
    }
}
