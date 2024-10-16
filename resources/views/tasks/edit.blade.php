@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $task->title }}">
        <br>
        <label>Description:</label>
        <textarea name="description">{{ $task->description }}</textarea>
        <br>
        <label>Assigned to:</label>
        <input type="text" name="assigned_to" value="{{ $task->assigned_to }}">
        <br>
        <label>Status:</label>
        <select name="status">
            <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
            <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
        <br>
        <button type="submit">Update Task</button>
    </form>
@endsection
