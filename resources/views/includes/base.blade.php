<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1 style="color:darkmagenta">GUIZIN AMOR DA MY LIFE</h1>
    <!--menu-->
    <div>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('produtos') }}">Produtos</a></li>


    </div>
    {{--Conteúdo--}}
    <hr style="color:rgb(255, 0, 234)">
    @yield('content')

</body>
</html>
