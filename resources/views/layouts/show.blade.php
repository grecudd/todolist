@extends('layouts.app')

@section('content')
    <h1>Tasks</h1>
    <form action="{{ route('tasks.create') }}" method="GET">
        @csrf
        <input type="submit" value="Add">
    </form>

    <h1>Uncompleted</h1>
    @if (count($uncompletedTasks) > 0)
        @foreach ($uncompletedTasks as $task)
            <h2>
                @if ($task->status == 0)
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->name }}</a>
                    : <small>{{ $task->description }}</small>
                @endif
            </h2>

        @endforeach
    @else No tasks.
    @endif
    <br>
    <h1>Completed</h1>
    @if (count($completedTasks) > 0)
        @foreach ($completedTasks as $task)
            <h2>
                @if ($task->status == 1)
                    <a href="{{ route('tasks.show', $task->id) }}">{{ $task->name }}</a>
                    : <small>{{ $task->description }}</small>
                @endif
            </h2>
        @endforeach
    @else
        No tasks.
    @endif
@endsection
