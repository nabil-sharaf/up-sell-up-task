@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title">
        @error('title')
        <span style="color: red; margin-left: 10px;">{{ $message }}</span>
        @enderror
        <br>
        <label>Description:</label>
        <textarea name="description"></textarea>
        @error('description')
        <span style="color: red; margin-left: 10px;">{{ $message }}</span>
        @enderror
        <br>
        <label>Assigned to:</label>
        <input type="text" name="assigned_to">
        @error('assigned_to')
        <span style="color: red; margin-left: 10px;">{{ $message }}</span>
        @enderror
        <br>
        <button type="submit">Create Task</button>
    </form>
@endsection
