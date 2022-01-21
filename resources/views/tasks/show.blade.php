<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet">
    <title>Visualizar uma tarefa</title>
</head>
<body>
    <!-- 
        Segundo o tutorial:
        https://imasters.com.br/php/como-fazer-um-crud-no-laravel-do-zero-parte-2
    -->

    <label for="title">ID - Título</label><br>
    <input type="text" id="title" size="50" name="title" value="{{ $task->id . ' - ' . $task->title }}"><br>
    <label for="text">Texto</label><br>
    <input type="text" id="text" size="100" name="text" value="{{ $task->text }}"><br>
    <input type="checkbox" id="done" name="done" {{ ($task->done == 1) ? 'checked' : '' }}>
    <label for="done">Realizada<br>
    
</body>
</html>