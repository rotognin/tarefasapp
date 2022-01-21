<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet">
    <title>Alterar uma tarefa</title>
</head>
<body>
    <!-- 
        Segundo o tutorial:
        https://imasters.com.br/php/como-fazer-um-crud-no-laravel-do-zero-parte-2
    -->
    <div class="w3-container">

        <form action="{{ route('update_task', ['id' => $task->id]) }}" method="POST">
            @csrf
            <label for="title">Título</label><br>
            <input type="text" id="title" size="50" name="title" value="{{ $task->title }}"><br>
            <label for="text">Texto</label><br>
            <input type="text" id="text" size="100" name="text" value="{{ $task->text }}"><br>
            <input type="checkbox" id="done" name="done" {{ ($task->done == 1) ? 'checked' : '' }}>
            <label for="done">Realizada<br>
            <!-- Na realidade não precisa criar esse input com o ID, já que ele está
                sendo enviado para a rota. Mas estou enviando ele por POST para que
                no Controller ele seja pego dentro do $request -->
            <input type="hidden" namme="id" value="{{ $task->id }}">
            <button class="w3-button w3-blue">Gravar</button>
            <a class="w3-button w3-blue" href="{{ route('tasks_home') }}">Voltar</a>
        </form>
    </div>
    
</body>
</html>