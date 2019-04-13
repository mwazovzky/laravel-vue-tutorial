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
    <tasks-index></tasks-index>
</div>
@endsection