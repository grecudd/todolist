@extends('layouts.app')

@section('content')
<form action="{{route('tasks.update', $task->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="task_name">Task Name :</label>
    <input type="text" id="task_name" name="task_name" value="{{$task->name}}"><br><br>
    <label for="task_desc">Task Description :</label>
    <br>
    <textarea name="task_desc" rows="10" cols="30">{{$task->description}}</textarea>
    <br>
    <input type="submit" value="Save">
</form>
@endsection