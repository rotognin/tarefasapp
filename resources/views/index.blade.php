<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/w3.css" type="text/css" rel="stylesheet">
    <title>Terefas-App</title>
</head>
<body>
    <div class="w3-container">
        <h1>Cadastro de tarefas</h1>
        <p>
            <a class="w3-button w3-blue" href="{{ route('new_task') }}">Nova Tarefa</a>
        </p>
        <br>
        <h3>Tarefas cadastradas:</h3>
        <table class="w3-table w3-striped">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Texto</th>
                <th>Realizada?</th>
                <th>Ação</th>
            </tr>
        @foreach ($tasks as $task)
            @if ($task->status == 0)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->text }}</td>
                    <td>{{ ($task->done == 1) ? 'Sim' : 'Não' }}</td>
                    <td>
                        @if ($task->done == 0)
                            <a class="w3-button w3-small w3-blue" href="{{ route('edit_task', ['id' => $task->id]) }}">Alterar</a>
                            <a class="w3-button w3-small w3-green" href="{{ route('do_task', ['id' => $task->id]) }}">Realizar</a>
                            <a class="w3-button w3-small w3-red" href="{{ route('confirm_delete_task', ['id' => $task->id]) }}">Excluir</a>
                        @else
                            <a class="w3-button w3-small w3-blue" href="{{ route('archive_task', ['id' => $task->id]) }}">Arquivar</a>
                        @endif
                    </td>
                </tr>
            @endif
        @endforeach
        </table>
    </div>

</body>
</html>