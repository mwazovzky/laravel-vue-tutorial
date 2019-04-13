@extends('layouts.app')

@section('styles')
    <style>
        .tasks-index { 
            border: 1px solid rgb(222, 222, 222); 
            border-collapse: collapse; 
        }
        th, td { 
            border: 1px solid rgb(222, 222, 222); 
            padding: 5px; 
        }
    </style>
@endsection

@section('content')
<div class="container">
    <h1>Tasks Index</h1>
    <table class="tasks-index">
        <tr>
            <th class="tasks-column">ID</th>
            <th class="tasks-column">Name</th>
            <th class="tasks-column">Priority</th>
        </tr>
        @foreach($tasks as $task)
        <tr>
            <th class="tasks-column">{{ $task->id }}</th>
            <th class="tasks-column">{{ $task->name }}</th>
            <th class="tasks-column">{{ $task->priority }}</th>
        </tr>
        @endforeach
    </table>
</div>
@endsection