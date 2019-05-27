<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta  name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    

    <title>Cadastro de Produtos</title>
</head>
<body>
    <div class="container">
        @component('layout.componente_navbar',["current" => $current])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>    
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @hasSection('javascript')
        @yield('javascript')
    @endif

</body>
</html>