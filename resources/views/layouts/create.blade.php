@extends('layouts.app')

@section('content')
    <form action="{{route('tasks.store')}}" method="POST">
        @csrf
        <label for="task_name">Task Name :</label>
        <input type="text" id="task_name" name="task_name"><br><br>
        <label for="task_desc">Task Description :</label>
        <br>
        <textarea name="task_desc" rows="10" cols="30"></textarea>
        <br>
        <input type="submit" value="Submit">
    </form>
@endsection