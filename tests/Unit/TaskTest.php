<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * @test
     */
    public function it_has_attributes()
    {
        $task = factory('App\Task')->create(['name' => 'First', 'priority' => 'high']);

        $this->assertEquals('First', $task->name);
        $this->assertEquals('high', $task->priority);
    }
}
