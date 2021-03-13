<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/w3.css" type="text/css" rel="stylesheet">
    <title>Excluir uma tarefa</title>
</head>
<body>
    <div class="w3-container">
        <form action="{{ route('delete_task', ['id' => $task->id]) }}" method="POST">
            @csrf
            <label for="title">Tem certeza que deseja excluir essa tarefa?</label><br>
            <input type="text" id="title" size="50" name="title" value="{{ $task->title }}"><br><br>
            <button>Sim</button>
            <a class="w3-button w3-blue" href="{{ route('tasks_home') }}">Não</a>
        </form>
    
    </div>
    
</body>
</html>