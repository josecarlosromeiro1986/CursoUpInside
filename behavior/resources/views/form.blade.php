<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário :: Teste de Rotas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="container my-5">
        <form action="" autocomplete="off">

            @csrf

            <div class="form-group">
                <label for="first_nome">Primeiro Nome</label>
                <input type="text" name="first_nome" id="first_nome" class="form-control" value="José Carlos">
            </div>

            <div class="form-group">
                <label for="last_nome">Segundo Nome</label>
                <input type="text" name="last_nome" id="last_nome" class="form-control" value="Romeiro">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="josecarlosromeiro1986@gmail.com">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
