<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard do sistema</title>
    @yield('css-view')
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
</head>
<body>
    @include('templates.menu-lateral')
    
    <section id="view-conteudo">
        @yield('conteudo-view')
    </section>

    @yield('js-view')
</body>
</html>