<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/w3.css') }}" rel="stylesheet">
    <title>Confirmação</title>
</head>
<body>

    <h2>Mensagem de confirmação:</h2>
    <br><br>
    <p><b>{{ $message }}</b></p>
    <br><br>
    <a href="{{ route('tasks_home') }}">Início</a>
    
</body>
</html>