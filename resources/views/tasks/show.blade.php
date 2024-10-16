@extends('layouts.app')

@section('content')
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Status: {{ $task->status }}</p>
    <p>Assigned to: {{ $task->assigned_to }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}">Edit Task</a>
@endsection
