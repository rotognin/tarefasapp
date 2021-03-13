<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/w3.css" type="text/css" rel="stylesheet">
    <title>Cadastrar uma nova tarefa</title>
</head>
<body>
    <!-- 
        Segundo o tutorial:
        https://imasters.com.br/php/como-fazer-um-crud-no-laravel-do-zero-parte-1
    -->

    <div class="w3-container">
        <form action="{{ route('register_task') }}" method="POST">
            @csrf
            <label for="title">Título</label><br>
            <input type="text" size="50" id="title" name="title" autofocus="autofocus"><br>
            <label for="text">Texto</label><br>
            <input type="text" size="100" id="text" name="text"><br>
            <input type="checkbox" id="done" name="done">
            <label for="done">Realizada<br><br>
            <button class="w3-button w3-blue">Gravar</button>
            <a class="w3-button w3-blue" href="{{ route('tasks_home') }}">Voltar</a>
        </form>
    </div>
</body>
</html>