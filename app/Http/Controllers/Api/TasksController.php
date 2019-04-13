<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return response()->json(['data' => $tasks], 200);
    }
}
