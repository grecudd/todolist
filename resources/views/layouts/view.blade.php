@extends('layouts.app')

@section('content')
    <h2>
        Task name: {{$task->name}}
        <br>
        Task description: {{$task->description}}
        <br>
        Status: {{ $task->status == 1 ? 'Completed' : 'Uncompleted' }}
    </h2>
    <form action="{{route('tasks.statusUpdate', $task->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input type="submit" value="Change status">
    </form>
    <form action="{{route('tasks.edit', $task->id)}}" method="GET">
        @csrf
        <input type="submit" value="Edit">
    </form>
    <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="Delete">
    </form>
@endsection