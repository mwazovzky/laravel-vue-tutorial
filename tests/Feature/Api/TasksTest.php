<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TasksTest extends TestCase
{
    use RefreshDatabase;
    
    public function setUp() : void
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_can_get_tasks_index()
    {
        factory('App\Task', 1)->create(['name' => 'Second']);
        factory('App\Task', 9)->create();

        $response = $this->json('GET', '/api/tasks');

        $response->assertStatus(200)
            ->assertJsonCount(10, 'data')
            ->assertJsonFragment(['name' => 'Second']);
    }
}
