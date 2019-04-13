<?php

namespace Tests\Feature;

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
    public function it_can_get_tasks_index_page()
    {
        $response = $this->get('/tasks');

        $response->assertStatus(200)
            ->assertViewIs('tasks.index')
            ->assertViewHas('tasks');
    }
}
