<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ToDoList</title>
</head>

<body>
    <h3>
        <a href="{{ route('tasks.index') }}">Home /</a>
        @if (Auth::user())
            User: {{Auth::user()->name}} /
            <a href="{{route('logOut')}}">LogOut</a>
        @endif

    </h3>


    @yield('content')
</body>

</html>
