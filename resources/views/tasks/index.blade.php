<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <title>Index</title>
</head>

<body>
    <ul>
        @foreach ($tasks as $task)
        <li>
        <a href="/tasks/{{ $task->id }}" >
            {{ $task->body }}
        </a>
        </li>
        @endforeach
    </ul>
</body>

</html>
